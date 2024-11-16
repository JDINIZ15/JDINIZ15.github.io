const lerConteudo = (seletor) => document.querySelector(seletor).value;

/**
 * função que permite criar elementos HTML
 * @param {*} tagName - O nome do elemento HTML a ser criado
 * @param {*} seletorElemPai  - O nome do id pai
 * @param {*} conteudoTextual - O conteúdo textual digitado
 * @returns void
 */
const criarElemHTML = (tagName, seletorElemPai, conteudoTextual) => {
  const obj = document.createElement(tagName);
  document.querySelector(seletorElemPai).appendChild(obj);
  obj.textContent = conteudoTextual;
};

const botao = document.querySelector("#adicionar");

botao.addEventListener("click", function () {
  const entrada = lerConteudo("#tarefa");

  if (entrada) {
    const objLI = document.createElement("li");

    objLI.textContent = entrada;

    const objA = document.createElement("a");

    objA.textContent = "Apagar";
    objA.href = "#";
    objLI.appendChild(objA);

    document.querySelector("#lista-tarefas").appendChild(objLI);

    document.querySelector("#tarefa").value = "";
  }
});

const listaDeLinks = document.querySelector("#lista-tarefas");

listaDeLinks.addEventListener("click", function (evento) {
  if (evento.target.nodeName == "A") {
    evento.target.parentElement.remove();
  }
});
