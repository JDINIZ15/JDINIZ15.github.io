const btn = document.querySelector("#btn");

btn.addEventListener("click", async () => {
  let filme = document.querySelector("#filme").value;

  const requisicao = await fetch(
    `https://omdbapi.com/?s=${filme}&page=1&apikey=ef424d95`
  );

  const requisicaoConvertida = await requisicao.json();

  let filmes = requisicaoConvertida.Search;

  let Info = filmes.map((a) => {
    return [a["Title"], a["Year"]];
  });

  let FilmeDefinitivo = Info.filter((a) => {
    return a[1] > 2000;
  });

  let resp = document.querySelector("#resp");

  let resposta = "";

  for (let i = 0; i < FilmeDefinitivo.length; i++) {
    resposta += `<p>${FilmeDefinitivo[i]}</p> <br />`;
  }
  resp.innerHTML = resposta;
});
