class Livro {
  constructor(titulo, autor, anoPublicacao, disponivel = true) {
    this.id = Livro.gerarId();
    this.titulo = titulo;
    this.autor = autor;
    this.anoPublicacao = anoPublicacao;
    this.disponivel = disponivel;
  }

  static gerarId() {
    return Math.floor(Math.random() * 1000000);
  }

  detalhes() {
    return `ID: ${this.id}, Título: "${this.titulo}", Autor: ${this.autor}, Ano: ${this.anoPublicacao}, Disponível: ${this.disponivel}`;
  }
}

class Biblioteca {
  constructor() {
    this.livros = [];
    this.carregarDados();
  }

  adicionarLivro(livro) {
    this.livros.push(livro);
    this.salvarDados();
    console.log("Livro adicionado com sucesso!");
  }

  listarLivros() {
    if (this.livros.length === 0) {
      console.log("Nenhum livro cadastrado.");
    } else {
      this.livros.forEach((livro) => console.log(livro.detalhes()));
    }
  }

  atualizarLivro(id, novosDados) {
    const livro = this.livros.find((l) => l.id === id);
    if (livro) {
      Object.assign(livro, novosDados);
      this.salvarDados();
      console.log("Livro atualizado com sucesso!");
    } else {
      console.log("Livro não encontrado.");
    }
  }

  removerLivro(id) {
    const index = this.livros.findIndex((l) => l.id === id);
    if (index !== -1) {
      this.livros.splice(index, 1);
      this.salvarDados();
      console.log("Livro removido com sucesso!");
    } else {
      console.log("Livro não encontrado.");
    }
  }

  salvarDados() {
    localStorage.setItem("biblioteca", JSON.stringify(this.livros));
  }

  carregarDados() {
    const dados = localStorage.getItem("biblioteca");
    if (dados) {
      this.livros = JSON.parse(dados).map(
        (livro) =>
          new Livro(
            livro.titulo,
            livro.autor,
            livro.anoPublicacao,
            livro.disponivel
          )
      );
    }
  }
}

const biblioteca = new Biblioteca();
let opcao;

do {
  opcao = prompt(
    `Escolha uma opção:
    1. Adicionar Livro
    2. Listar Livros
    3. Atualizar Livro
    4. Remover Livro
    5. Sair`
  );

  switch (opcao) {
    case "1":
      const titulo = prompt("Informe o título do livro:");
      const autor = prompt("Informe o autor:");
      const anoPublicacao = prompt("Informe o ano de publicação:");
      const livro = new Livro(titulo, autor, anoPublicacao);
      biblioteca.adicionarLivro(livro);
      break;

    case "2":
      biblioteca.listarLivros();
      break;

    case "3":
      const idAtualizar = prompt("Informe o ID do livro a ser atualizado:");
      const novoTitulo = prompt("Novo título:");
      const novoAutor = prompt("Novo autor:");
      const novoAno = prompt("Novo ano de publicação:");
      const novosDados = {
        titulo: novoTitulo,
        autor: novoAutor,
        anoPublicacao: novoAno,
      };
      biblioteca.atualizarLivro(Number(idAtualizar), novosDados);
      break;

    case "4":
      const idRemover = prompt("Informe o ID do livro a ser removido:");
      biblioteca.removerLivro(Number(idRemover));
      break;

    case "5":
      console.log("Saindo...");
      break;

    default:
      console.log("Opção inválida.");
      break;
  }
} while (opcao !== "5");
