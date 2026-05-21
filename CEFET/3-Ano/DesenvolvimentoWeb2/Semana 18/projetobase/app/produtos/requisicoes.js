import { requisicao, ROOT } from "../util.js";
// Agora o base da API independe de onde o projeto está instalado
const API_BASE = `${ROOT}/api/produtos`;
//Todos os métodos deixam Error passar para gestor.js
export async function listar(){
    let resposta = await requisicao('GET',API_BASE);
    return await resposta.json();
}

export async function salvar(produto){
    let resposta = null;
    if(!produto.id>0)
        resposta = await requisicao('POST',API_BASE, produto);
    else
        resposta = await requisicao('PUT',API_BASE, produto);
    return await resposta.json();
}

export async function obter(id){
    let resposta = await requisicao('GET',`${API_BASE}/${id}`);
    return await resposta.json();
}

export async function remover(id){
    await requisicao('DELETE',`${API_BASE}/${id}`);
}