let btn = document.querySelector("#btn");

btn.addEventListener("click", async () => {
  try {
    const respJson = await fetch("filmes.json");
    const resp = await respJson.json();
    const filmes = resp.filmes;
    filmes.forEach((element) => {
      exibeFilmes(element);
    });
  } catch (error) {
    console.log("Erro:", error);
  }
});

function exibeFilmes(obj) {
  const resposta = document.querySelector("#resposta");
  const lista = document.createElement("ul");
  const chave = Object.keys(obj);
  const valor = Object.values(obj);

  for (let i = 0; i < chave.length; i++) {
    console.log(typeof valor[i]);
    const item = document.createElement("li");
    item.innerHTML = `<strong>${chave[i]}: </strong>`;

    if (chave[i] == "dataLancamento") {
      const arrayData = Object.values(valor[i]);
      item.innerHTML += `${arrayData[1]} - ${arrayData[0]}`;
    } else if (chave[i] == "generos" || chave[i] == "elenco") {
      const lista2 = document.createElement("ul");
      const valor2 = valor[i];

      for (let j = 0; j < valor[i].length; j++) {
        const item2 = document.createElement("li");

        if (chave[i] == "generos") item2.innerHTML = valor2[j];
        else item2.innerHTML = Object.values(valor2[j]);

        lista2.append(item2);
      }
      item.append(lista2);
    } else item.innerHTML += valor[i];

    lista.append(item);
  }
  resposta.append(lista, document.createElement("hr"));
}
