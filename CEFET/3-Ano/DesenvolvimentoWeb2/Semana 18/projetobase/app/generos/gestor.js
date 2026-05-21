import { listar, salvar, remover, obter } from "./requisicoes.js";
import { exibirErro } from "../util.js";
const spanErro = document.querySelector('#msgErro');
//Ao carregar a árvore do DOM
document.addEventListener("DOMContentLoaded", async () => {
    try{
        let registros = await listar();
        montarTabela(registros);
    }catch( e ){//4xx/5xx
        exibirErro( spanErro , '('+e.status+') '+e, 3000);
    } 
}); //Fim de Ao carregar a árvore do DOM

//registrar evento submit do FORM
const formGenero = document.querySelector("#form-generos");
formGenero.addEventListener("submit", async (e) => {
    e.preventDefault();
    let genero = {
        id: document.querySelector("#id").value,
        descricao: document.querySelector("#descricao").value
    }

    try{
        await salvar(genero);
        formGenero.reset();
        document.querySelector("#id").value='';
        let registros = await listar();
        montarTabela(registros);
    }catch( e ){//4xx/5xx
        exibirErro( spanErro , '('+e.status+') '+e, 3000);
    }
});

//Declarar eventos do corpo da tabela (click em EDITAR ou EXCLUIR)
document.querySelector("#tbl-generos tbody").addEventListener("click", async (e) => {
    const alvo = e.target;
    if(alvo.tagName==='BUTTON'){
        const botao = alvo;
        const id = botao.dataset.id;
        try{
            if(botao.textContent.trim() === '[EDITAR]') {
                let genero = await obter(id);
                document.querySelector("#id").value = genero.id;
                document.querySelector("#descricao").value = genero.descricao;  
            }else{ 
                if(botao.textContent.trim() === '[EXCLUIR]'){
                    let erro = await remover(id);
                    if( ! erro ){ //Se removeu, lista os registros novamente
                        let registros = await listar();
                        montarTabela(registros);
                    }
                }
            }
        }catch( e ){//4xx/5xx
            exibirErro( spanErro , '('+e.status+') '+e, 3000);
        }
    }
})

//Funções auxiliares para montagem do DOM
function montarTabela(registros){
    const corpoTabela = document.querySelector("#tbl-generos tbody");
    while(corpoTabela.firstChild)
        corpoTabela.removeChild(corpoTabela.firstChild);
    
    registros.forEach(registro => {
        const linha = montaLinha(registro); 
        corpoTabela.appendChild(linha);   
    });
}

function montaLinha({id, descricao}){
    let tr = document.createElement('tr');
    const celulas = [id,descricao].map(texto => {
        const td = document.createElement('td');
        td.textContent = texto;
        return td;
    })
    const btnEditar = criaBotao('[EDITAR]', id);
    const btnExcluir = criaBotao('[EXCLUIR]', id);
    const tdAcoes = document.createElement('td');
    tdAcoes.append(btnEditar, btnExcluir);
    tr.append(...celulas, tdAcoes);
    return tr;
}

function criaBotao(rotulo, valorId){
    const botao = document.createElement('button');
    botao.textContent = rotulo;
    botao.dataset.id = valorId;
    return botao;
}