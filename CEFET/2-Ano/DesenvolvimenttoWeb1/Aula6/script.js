/*function carregaespecies(campo){
    var form=document.getElementsByTagName("form")[0];
    form.setAttribute("action"," ");
    form.submit();
};*/

document.addEventListener("DOMContentLoaded", () => {
  var selectclasse = document.getElementById("classe");
  selectclasse.addEventListener("change", carregaespecies);
});
const pegaValorclasse = () => document.getElementById("classe").value;

let criaOptionsespecie = (resposta) => {
  var selectespecie = document.getElementById("especie");
  limpaSelect(selectespecie);
  console.log(resposta);
  for (var especie of resposta) {
    var optionCid = document.createElement("option");
    optionCid.setAttribute("value", especie);
    optionCid.textContent = especie;
    selectespecie.appendChild(optionCid);
  }
};
function limpaSelect(campo) {
  var opt;
  while ((opt = campo.firstChild)) {
    campo.removeChild(opt);
  }
}
function carregaespecies() {
  //var corpo = {"classe": pegaValorclasse()};
  var formulario = new FormData();
  formulario.append("classe", pegaValorclasse());
  fetch(
    "http://localhost/trabalhos/Aulas-Trabalho/DesenvolvimentoWeb1/Aula6/animais.php",
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
      var especies = await resposta.json();
      criaOptionsespecie(especies);
    })
    .catch((error) => console.log(error));
}
