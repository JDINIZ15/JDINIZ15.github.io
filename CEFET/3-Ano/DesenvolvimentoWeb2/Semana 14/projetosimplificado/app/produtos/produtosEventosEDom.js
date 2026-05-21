import { listar, salvar, remover, obter } from "./produtosRequisicoes.js";
//Declare os botões que serão criados e utilizados em cada linha de nossa tabela
let btnEditar, btnExcluir = null;

//###########AQUI REGISTRAREMOS OS EVENTOS###################
//Ao carregar a árvore do DOM
document.addEventListener("DOMContentLoaded", async () => {
    let registros = await listar();
    montarTabela(registros); 
}); //Fim de Ao carregar a árvore do DOM

//registrar evento submit do FORM
const formProduto = document.querySelector("#form-produtos");
formProduto.addEventListener("submit", async (e) => {
    e.preventDefault();
    let produto = {
        id: document.querySelector("#id").value,
        descricao: document.querySelector("#descricao").value,
        precoDeCusto: document.querySelector("#precoDeCusto").value
    }

    await salvar( produto );
    formProduto.reset();
    //Lembre de limpar o id
    document.querySelector("#id").value='';
    let registros = await listar();
    montarTabela( registros );
});

//Declarar eventos do corpo da tabela (click em EDITAR ou EXCLUIR)
document.querySelector("#tbl-produtos tbody").addEventListener("click", async (e) => {
    const alvo = e.target;
    //Só acontecerá algo se você clicar em um botão
    if(alvo.tagName==='BUTTON'){
        const botao = alvo;
        //Vincula o botão com o id do registro corrente
        const id = botao.dataset.id;
        if(botao.textContent.trim() === '[EDITAR]') {
            let produto = await obter( id );
            document.querySelector("#id").value = produto.id;
            document.querySelector("#descricao").value = produto.descricao;
            document.querySelector("#precoDeCusto").value = produto.precoDeCusto;  
        }else if(botao.textContent.trim() === '[EXCLUIR]'){
            let produto = {id: id};
            await remover(produto);
            let registros = await listar();
            //Se alterou os registros tem que montar a tabela novamente
            montarTabela( registros );
        }
        else
            ; 
    }//Fim da verificação do click em um BUTTON
})
//###########FIM DO REGISTRO DOS EVENTOS###################

//###########Funções auxiliares para montagem do DOM###############
function montarTabela( registros ){
    const corpoTabela = document.querySelector("#tbl-produtos tbody");
    //Enquanto o elemento tbody tiver um filho, remova este filho
    while(corpoTabela.firstChild)
        corpoTabela.removeChild(corpoTabela.firstChild);
    //Depois de limpar o elemento tbody da tabela....
    
    //Percorra os registros montando as linhas (forma simples, sem map)
    registros.forEach(registro => {
        const linhaTabela =document.createElement('tr');

        const colunaId = document.createElement('td');
        colunaId.textContent = registro.id;
        const colunaDescricao = document.createElement('td');
        colunaDescricao.textContent = registro.descricao;
        const colunaPrecoDeCusto = document.createElement('td');
        colunaPrecoDeCusto.textContent = registro.precoDeCusto;

        //Recebe rótulo e id ao qual deve ser vinculado
        btnEditar = criaEDevolveBotao('[EDITAR]', registro.id);
        btnExcluir = criaEDevolveBotao('[EXCLUIR]', registro.id);

        const colunaAcoes = document.createElement('td');
        //append pendura vários nós em um mesmo elemento ao mesmo tempo
        colunaAcoes.append(btnEditar, btnExcluir);
        linhaTabela.append(colunaId,colunaDescricao,colunaPrecoDeCusto,colunaAcoes);
        //Pendura cada linha criada ao corpo da tabela
        corpoTabela.appendChild(linhaTabela); 
    });
}

function criaEDevolveBotao(rotulo, valorId){
    const botao = document.createElement('button');
    botao.textContent = rotulo;
    botao.dataset.id = valorId;
    return botao;
}