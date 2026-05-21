class Veiculo {
  constructor(marca, modelo, ano) {
    this.marca = marca;
    this.modelo = modelo;
    this.ano = ano;
  }

  descrever() {
    return `Marca: ${this.marca}, Modelo: ${this.modelo}, Ano: ${this.ano}`;
  }
}

class Carro extends Veiculo {
  constructor(marca, modelo, ano, portas) {
    super(marca, modelo, ano);
    this.portas = portas;
  }

  descrever() {
    return `${super.descrever()}, Portas: ${this.portas}`;
  }
}

class Moto extends Veiculo {
  constructor(marca, modelo, ano, cilindradas) {
    super(marca, modelo, ano);
    this.cilindradas = cilindradas;
  }

  descrever() {
    return `${super.descrever()}, Cilindradas: ${this.cilindradas}`;
  }
}

const carro = new Carro("Ford", "Fiesta", 2020, 4);
console.log(carro.descrever());
