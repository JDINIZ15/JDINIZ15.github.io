async function montarResultado (elementoPai, aluno, exibirComoTabela){
  console.log(elementoPai);
  elementoPai.innerHTML = "";
  const $cabecalho = document.createElement('h2');
  $cabecalho.textContent = "Dados do aluno:";
  elementoPai.append($cabecalho, document.createElement('hr'));
  if(!exibirComoTabela){
    elementoPai.appendChild(devolverLista(aluno));
  } else {
    elementoPai.appendChild(devolverTabela(aluno));
  }
}

function devolverLista(aluno){
  const $ul = document.createElement('ul');
  const[liNome, liMedia,liGrau] = ['li', 'li', 'li'].map(item => document.createElement(item));
  liNome.innerHTML = "<strong>Nome: </strong>"+aluno.nome;
  liMedia.innerHTML = "<strong>Média: </strong>"+aluno.media;
  liGrau.innerHTML = "<strong>Grau: </strong>"+aluno.grau;
  $ul.append(liNome, liMedia, liGrau);
  return $ul;
}

function devolverTabela({nome, grau, media}){
  const $tabela = document.createElement('table');
  $tabela.setAttribute("border", "1");
  const $cabecalhoTabela = document.createElement('thead');
  const $corpoTabela = document.createElement('tbody');
  const [thNome, thGrau, thMedia] = ["th", "th", "th"].map(item => document.createElement(item));
  thNome.textContent = "NOME";
  thGrau.textContent = "GRAU";
  thMedia.textContent = "MÉDIA";
  $cabecalhoTabela.append(thNome, thGrau, thMedia);

  const [tdNome, tdGrau, tdMedia] = ["td", "td", "td"].map(item => document.createElement(item));
  //Se fosse um array de alunos, poderíamos colocar um for/foreach
  let $tr = document.createElement("tr");
  $corpoTabela.appendChild($tr);
  tdNome.textContent = nome;
  tdGrau.textContent = grau;
  tdMedia.textContent = media;
  $tr.append(tdNome, tdGrau, tdMedia);
  //Após uma contagem, poderíamos exibir a média das médiaas no rodapé

  let $trRodape = document.createElement("tr");
  $corpoTabela.appendChild($trRodape);
  const tdRodapeNomeGrau = document.createElement("td");
  tdRodapeNomeGrau.setAttribute("colspan", "2");
  const tdRodapeMedia = document.createElement("td");
  tdRodapeMedia.textContent = media;

  $trRodape.append(tdRodapeNomeGrau, tdRodapeMedia);
  $tabela.append($cabecalhoTabela, $corpoTabela);
  return $tabela;
}

export {montarResultado};