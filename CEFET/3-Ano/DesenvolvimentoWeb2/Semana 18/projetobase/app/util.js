// Deriva o prefixo até "/app/" a partir da URL atual.
// Ex.: "/projetobase/app/genero/index.html"  -> ROOT = "/projetobase"
//ROOT recebe o retorno de uma IIFE (Função autoinvocável)
export const ROOT = (() => {
  const match = window.location.pathname.match(/^(.*)\/app\//);
  return match ? match[1] : ''; // se estiver na raiz do host, fica vazio
})();

export async function requisicao(metodo, uri, dados = null){
    const ctrl = new AbortController();
    const tempo = setTimeout(() => ctrl.abort(), 10000); // 10s
    const opcoes = { 
        method: metodo, 
        headers: { 'Accept': 'application/json' }, 
        signal: ctrl.signal 
    };

    if (dados != null) {
        opcoes.body = JSON.stringify(dados);
        opcoes.headers = {'Content-Type':'application/json;charset=UTF-8'};
    }
    try{
        let resposta = await fetch(uri, opcoes);
        await verificaErros( resposta );
        return resposta; // sucesso (2xx)
    }finally {
        clearTimeout(tempo);
    }
}

export function exibirErro( spanErro , msgErro, tempoExibicao = 3000){
    spanErro.textContent = msgErro;
    setTimeout( ()=> {
        spanErro.textContent = "";
    }, tempoExibicao);
}

async function verificaErros(resp) {
  if (resp.ok) return;
  //Pegando o texto de erro que pode ou não vir do servidor
  let respostaJSON = await resp.text();
  //Resposta que pode vir do servidor no formato JSON
  respostaJSON = JSON.parse(respostaJSON);
  //Se respostaJSON estiver preenchido, exibe respostaJSON. 
  //Caso contrário, exibe mensagem pré-definida
  let msg;
  switch (resp.status) {
    case 400: msg = respostaJSON || "Erro de domínio ${resp.status}.";break;
    case 404: msg = respostaJSON || "Recurso não encontrado ${resp.status}.";break;
    case 405: msg = respostaJSON || "Método não permitido ${resp.status}.";break;
    case 409: msg = respostaJSON || "Conflito de dados ${resp.status}.";break;
    case 500: msg = respostaJSON || "Erro interno do servidor ${resp.status}.";break;
    default:  msg = respostaJSON || "Erro desconhecido ${resp.status}.";break;
  }

  //Finalmente lança o erro com mensagem e status
  const erro = new Error(msg);
  erro.status = resp.status; // anexa status para quem quiser tratar(//4xx/5xx)
  throw erro;
}