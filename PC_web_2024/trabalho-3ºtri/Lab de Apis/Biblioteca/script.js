class Livro {
  constructor(titulo, autor) {
    this.titulo = titulo;
    this.autor = autor;
    this.disponivel = true;
    this.emprestimos = 0;
  }

  emprestar() {
    if (this.disponivel) {
      this.disponivel = false;
      this.emprestimos += 1;
    }
  }

  devolver() {
    this.disponivel = true;
  }
}

class Biblioteca {
  constructor() {
    this.livros = [];
  }

  adicionarLivro(titulo, autor) {
    const novoLivro = new Livro(titulo, autor);
    this.livros.push(novoLivro);
  }

  listarLivrosDisponiveis() {
    return this.livros.filter((livro) => livro.disponivel);
  }

  listarTitulosEmprestados() {
    return this.livros
      .filter((livro) => !livro.disponivel)
      .map((livro) => livro.titulo);
  }

  calcularTotalEmprestimos() {
    return this.livros.reduce((total, livro) => total + livro.emprestimos, 0);
  }
}

const biblioteca = new Biblioteca();

document.querySelector("#adicionar").addEventListener("click", () => {
  const titulo = document.querySelector("#titulo").value;
  const autor = document.querySelector("#autor").value;

  if (titulo && autor) {
    biblioteca.adicionarLivro(titulo, autor);
    document.querySelector(
      "#resultado"
    ).innerHTML = `Livro "${titulo}" adicionado com sucesso!`;
  } else {
    document.querySelector("#resultado").innerHTML =
      "Preencha todos os campos!";
  }
});

document.querySelector("#listar-disponiveis").addEventListener("click", () => {
  const disponiveis = biblioteca.listarLivrosDisponiveis();
  let resposta = "Livros disponíveis:<br>";

  if (disponiveis.length > 0) {
    disponiveis.forEach((livro) => {
      resposta += `<p>${livro.titulo} - ${livro.autor}</p>`;
    });
  } else {
    resposta += "Nenhum livro disponível.";
  }

  document.querySelector("#resultado").innerHTML = resposta;
});

document.querySelector("#listar-emprestados").addEventListener("click", () => {
  const emprestados = biblioteca.listarTitulosEmprestados();
  let resposta = "Livros emprestados:<br>";

  if (emprestados.length > 0) {
    resposta += emprestados.map((titulo) => `<p>${titulo}</p>`).join("");
  } else {
    resposta += "Nenhum livro emprestado.";
  }

  document.querySelector("#resultado").innerHTML = resposta;
});

document
  .querySelector("#calcular-emprestimos")
  .addEventListener("click", () => {
    const total = biblioteca.calcularTotalEmprestimos();
    document.querySelector(
      "#resultado"
    ).innerHTML = `Total de empréstimos: ${total}`;
  });
