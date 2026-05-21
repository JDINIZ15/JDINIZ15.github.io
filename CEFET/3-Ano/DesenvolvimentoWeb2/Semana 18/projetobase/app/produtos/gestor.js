import { listar, salvar, remover, obter } from "./requisicoes.js";
import { exibirErro } from "../util.js";
import { listar as listarGeneros } from "../generos/requisicoes.js";

const spanErro = document.querySelector('#msgErro');

//Ao carregar a árvore do DOM
document.addEventListener("DOMContentLoaded", async () => {
    try{
        let generos = await listarGeneros();
        let registros = await listar();
        montarSelect(generos);
        montarTabela(registros);
    }catch( e ){//4xx/5xx
        exibirErro( spanErro , '('+e.status+') '+e, 3000);
    } 
     
}); //Fim de Ao carregar a árvore do DOM

//registrar evento submit do FORM
const formProduto = document.querySelector("#form-produtos");
formProduto.addEventListener("submit", async (e) => {
    e.preventDefault();
    let produto = {
        id: document.querySelector("#id").value,
        descricao: document.querySelector("#descricao").value,
        precoDeCusto: document.querySelector("#precoDeCusto").value,
        generoId: document.querySelector("#generos").value,
    }

    try{
        await salvar( produto );
        formProduto.reset();
        document.querySelector("#id").value='';
        let registros = await listar();
        let generos = await listarGeneros();
        montarSelect(generos);
        montarTabela(registros);
    }catch( e ){//4xx/5xx
        exibirErro( spanErro , '('+e.status+') '+e, 3000);
    } 
});

//Declarar eventos do corpo da tabela (click em EDITAR ou EXCLUIR)
document.querySelector("#tbl-produtos tbody").addEventListener("click", async (e) => {
    const alvo = e.target;
    if(alvo.tagName==='BUTTON'){
        const botao = alvo;
        const id = botao.dataset.id;
        try{
            if(botao.textContent.trim() === '[EDITAR]') {
                let produto = await obter(id);
                let generos = await listarGeneros();
                document.querySelector("#id").value = produto.id;
                document.querySelector("#descricao").value = produto.descricao;
                montarSelect(generos, produto.generoId);
                document.querySelector("#precoDeCusto").value = produto.precoDeCusto;  
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
function montarSelect(generos, generoIdAtual = 0){
    const selectGeneros = document.querySelector("#generos");

    while(selectGeneros.firstChild)
        selectGeneros.removeChild(selectGeneros.firstChild);

    let opt1 = document.createElement("option");
        opt1.value = 0;
        opt1.textContent = "------  Escolha  ------";
        selectGeneros.appendChild(opt1);
    generos.forEach(genero => {
        let opt = document.createElement("option");
        opt.value = genero.id;
        opt.textContent = genero.descricao;
        if( genero.id === generoIdAtual)
            opt.setAttribute("SELECTED", "SELECTED");
        selectGeneros.appendChild(opt);
    });
}

function montarTabela(registros){
    const corpoTabela = document.querySelector("#tbl-produtos tbody");
    while(corpoTabela.firstChild)
        corpoTabela.removeChild(corpoTabela.firstChild);
    
    registros.forEach(registro => {
        const linha = montaLinha(registro); 
        corpoTabela.appendChild(linha);   
    });
}

function montaLinha({id, descricao, descGenero, precoDeCusto, precoDeVenda}){
    let tr = document.createElement('tr');
    const celulas = [id, descricao ,descGenero, precoDeCusto, precoDeVenda].map(texto => {
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