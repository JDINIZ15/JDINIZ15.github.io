import { inserir, listar } from  "./produtosRequisicoes.js";
//###########AQUI REGISTRAREMOS OS EVENTOS###################
//Ao carregar a árvore do DOM
//Fim de Ao carregar a árvore do DOM
document.addEventListener("DOMContentLoaded", async () => {
    let registros = await listar();
    montarTabela(registros);
});
//registrar evento submit do FORM
    //Evitar o comportamento default caso haja um action

    //Montar um objeto literal produto com base nos campos do formulario

    //chamar uma função assíncrona inserir em produtosRequisicoes.js

    //limpar o formulário (.reset()) e os campos hidden

    //Agora que temos um novo registro, buscar todos os registros no banco de dados

    // e montar novamente a tabela

//Fim de ao submeter form

//###########FIM DO REGISTRO DOS EVENTOS###################

//###########Funções auxiliares para montagem do DOM###############
function montarTabela( registros){
    const corpoDaTabela = document.querySelector("#tbl-produtos tbody");

    while(corpoDaTabela.firstChild)
        corpoDaTabela.removeChild(corpoDaTabela.firstChild);

    registros.forEach(registro =>{
        const linhaTabela = document.createElement('tr');
        const colunaId = document.createElement('td');

        colunaId.textContent = registro.id;
        const ColunaDescricao = document.createElement('td');
        ColunaDescricao.textContent=registro.descricao;
        const colunaPrecoDeCusto = document.createElement('td');
        colunaPrecoDeCusto.textContent = registro.precoDeCusto;
        const colunaAcoes = document.createElement('td');

        linhaTabela.append(colunaId, ColunaDescricao, colunaPrecoDeCusto, colunaAcoes);

        corpoDaTabela.appendChild(linhaTabela);
        
    })
}

const formProduto = document.querySelector("#form-produtos")
formProduto.addEventListener("submit",  async(e) =>{
    e.preventDefault()

    let produto = {
    precoDeCusto : document.querySelector("#precoDeCusto").value,
    descricao : document.querySelector("#descricao").value
    }

    await inserir(produto);

    formProduto.reset();

    console.log(produto);
    let registros = await listar();

    montarTabela(registros);
});

