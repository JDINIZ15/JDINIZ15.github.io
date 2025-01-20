class Produto {
  constructor(nome, preco, quantidadeEmEstoque) {
    this.nome = nome;
    this.preco = preco;
    this.quantidadeEmEstoque = quantidadeEmEstoque;
  }

  atualizarEstoque(quantidade) {
    this.quantidadeEmEstoque += quantidade;
  }

  calcularValorEstoque() {
    return this.preco * this.quantidadeEmEstoque;
  }
}

class ProdutoPerecivel extends Produto {
  constructor(nome, preco, quantidadeEmEstoque, dataDeValidade) {
    super(nome, preco, quantidadeEmEstoque);
    this.dataDeValidade = dataDeValidade;
  }

  verificarValidade(dataAtual) {
    return new Date(dataAtual) <= new Date(this.dataDeValidade);
  }
}

const produto = new ProdutoPerecivel("Leite", 5, 10, "2025-01-30");
console.log(produto.verificarValidade("2025-01-29"));
