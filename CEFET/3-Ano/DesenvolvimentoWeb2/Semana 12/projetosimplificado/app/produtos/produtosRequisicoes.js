import { verificaErros } from "../utilErrosDoServidor.js";

export async function listar(){
    const uri = '../../api/controller/listar.php';
    const opcoes = {
        method: 'GET',
        headers:{
            'Content-Type':'application/json;charset=UTF-8'
        }
    }
    try{
        let resposta = await fetch(uri, opcoes);
        await verificaErros( resposta );
        return await resposta.json();
    }catch( erro ){
        alert(erro);
    }
}

export async function salvar(produto){
    const uri = (!produto.id)?'../../api/controller/inserir.php':'../../api/controller/alterar.php';
    let metodo = (!produto.id)?'POST':'PUT'; 
    const opcoes = {
        method: metodo,
        headers:{
            'Content-Type':'application/json;charset=UTF-8'
        },
        body: JSON.stringify(produto)
    }
    try{
        let resposta = await fetch(uri, opcoes);
        await verificaErros( resposta );
        return await resposta.json();
    }catch( erro ){
        alert(erro);
    }
}

export async function obter( id ){
    const uri = '../../api/controller/obter.php?id='+id;
    const opcoes = {
        method: 'GET',
        headers:{
            'Content-Type':'application/json;charset=UTF-8'
        }
    }
    try{
        let resposta = await fetch(uri, opcoes);
        await verificaErros( resposta );
        return await resposta.json();
    }catch( erro ){
        alert(erro);
    }
}

export async function remover(produto){
    const uri = '../../api/controller/remover.php';
    const opcoes = {
        method: 'DELETE',
        headers:{
            'Content-Type':'application/json;charset=UTF-8'
        },
        body: JSON.stringify(produto)
    }
    try{
        let resposta = await fetch(uri, opcoes);
        await verificaErros( resposta );
        //Codigo esperado (204) não retorna resposta
    }catch( erro ){
        alert(erro);
    }
}