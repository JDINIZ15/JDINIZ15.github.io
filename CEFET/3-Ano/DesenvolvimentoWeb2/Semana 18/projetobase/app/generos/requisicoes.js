import { requisicao, ROOT } from "../util.js";
// Agora o base da API independe de onde o projeto está instalado
const API_BASE = `${ROOT}/api/generos`;
//Todos os métodos deixam Error passar para gestor.js
export async function listar(){
    let resposta = await requisicao('GET',API_BASE);
    return await resposta.json();
} 

export async function salvar(genero){
    let resposta = null;
    const id = Number(genero.id);
    if(!id>0)
        resposta = await requisicao('POST',API_BASE, genero);
    else
        resposta = await requisicao('PUT',API_BASE, genero);
    return await resposta.json();
}

export async function obter(id){
    let resposta = await requisicao('GET',`${API_BASE}/${id}`);
    return await resposta.json();
}

export async function remover(id){
    await requisicao('DELETE',`${API_BASE}/${id}`);
}