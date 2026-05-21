/*function carregaCidades(campo){
    var form=document.getElementsByTagName("form")[0];
    form.setAttribute("action"," ");
    form.submit();
};*/

document.addEventListener("DOMContentLoaded", () => {
  var selectEstado = document.getElementById("estado");
  selectEstado.addEventListener("change", carregaCidades);
});
const pegaValorEstado = () => document.getElementById("estado").value;

let criaOptionsCidade = (resposta) => {
  var selectCidade = document.getElementById("cidade");
  limpaSelect(selectCidade);
  console.log(resposta);
  for (var cidade of resposta) {
    var optionCid = document.createElement("option");
    optionCid.setAttribute("value", cidade);
    optionCid.textContent = cidade;
    selectCidade.appendChild(optionCid);
  }
};
function limpaSelect(campo) {
  var opt;
  while ((opt = campo.firstChild)) {
    campo.removeChild(opt);
  }
}
function carregaCidades() {
  //var corpo = {"estado": pegaValorEstado()};
  var formulario = new FormData();
  formulario.append("estado", pegaValorEstado());
  fetch(
    "http://localhost/trabalhos/Aulas-Trabalho/DesenvolvimentoWeb1/Aula4/Forma%202%20-%20API/cidade.php",
    {
      mode: "no-cors",
      method: "POST",
      headers: {
        "content-type": "application-json",
        "Access-Control-Allow-Origin": "origin-list",
      },
      body: formulario,
    }
  )
    .then(async (resposta) => {
      var cidades = await resposta.json();
      criaOptionsCidade(cidades);
    })
    .catch((error) => console.log(error));
}
