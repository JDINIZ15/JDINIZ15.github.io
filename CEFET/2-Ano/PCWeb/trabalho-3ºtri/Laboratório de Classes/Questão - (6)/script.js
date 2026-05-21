class Livro {
  constructor(titulo, autor, disponivel = true) {
    this.titulo = titulo;
    this.autor = autor;
    this.disponivel = disponivel;
  }

  emprestar() {
    if (this.disponivel) {
      this.disponivel = false;
      console.log(`${this.titulo} foi emprestado.`);
    } else {
      console.log(`${this.titulo} já está emprestado.`);
    }
  }

  devolver() {
    this.disponivel = true;
    console.log(`${this.titulo} foi devolvido.`);
  }

  status() {
    return `${this.titulo} - ${this.disponivel ? "Disponível" : "Emprestado"}`;
  }
}

class Biblioteca {
  constructor() {
    this.livros = [];
  }

  adicionarLivro(livro) {
    this.livros.push(livro);
  }

  listarLivrosDisponiveis() {
    return this.livros
      .filter((livro) => livro.disponivel)
      .map((livro) => livro.status());
  }

  buscarLivro(titulo) {
    return (
      this.livros.find((livro) => livro.titulo === titulo) ||
      "Livro não encontrado."
    );
  }
}

const biblioteca = new Biblioteca();
const livro1 = new Livro("1984", "George Orwell");
const livro2 = new Livro("O Senhor dos Anéis", "J.R.R. Tolkien");

biblioteca.adicionarLivro(livro1);
biblioteca.adicionarLivro(livro2);
livro1.emprestar();
console.log(biblioteca.listarLivrosDisponiveis());
