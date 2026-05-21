fetch("https://rafaelescalfoni.github.io/desenv_web/filmes.json")
  .then((response) => response.json())
  .then((filmes) => {
    const filmesDiv = document.getElementById("filmes");

    filmes.forEach((filme) => {
      const filmeDiv = document.createElement("div");
      filmeDiv.classList.add("filme");
      filmeDiv.id = "filme-comum"; // Todos têm o mesmo ID

      filmeDiv.innerHTML = `
        <img src="${filme.figura}" alt="${filme.titulo}">
        <div>
          <h2>${filme.titulo}</h2>
          <p><strong>Gêneros:</strong> ${filme.generos.join(", ")}</p>
          <p><strong>Elenco:</strong> ${filme.elenco.join(", ")}</p>
          <p><strong>Classificação:</strong> ${filme.classificacao}</p>
          <p><strong>Resumo:</strong> ${filme.resumo}</p>
          <p><strong>Títulos Semelhantes:</strong> ${filme.titulosSemelhantes.join(
            ", "
          )}</p>
        </div>
      `;

      filmesDiv.appendChild(filmeDiv);
    });
  })
  .catch((error) => console.error("Erro ao carregar o JSON:", error));
