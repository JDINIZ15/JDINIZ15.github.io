class Carro {
  constructor(placa, modelo) {
    this.placa = placa;
    this.modelo = modelo;
  }

  descrever() {
    return `Placa: ${this.placa}, Modelo: ${this.modelo}`;
  }
}

class Estacionamento {
  constructor(vagasTotais) {
    this.vagasTotais = vagasTotais;
    this.carros = [];
  }

  adicionarCarro(carro) {
    if (this.carros.length < this.vagasTotais) {
      this.carros.push(carro);
      console.log("Carro adicionado.");
    } else {
      console.log("Não há vagas disponíveis.");
    }
  }

  removerCarro(placa) {
    this.carros = this.carros.filter((carro) => carro.placa !== placa);
    console.log("Carro removido.");
  }

  listarCarros() {
    return this.carros.map((carro) => carro.descrever());
  }
}

const estacionamento = new Estacionamento(2);
const carro1 = new Carro("ABC-1234", "Gol");
const carro2 = new Carro("XYZ-5678", "Fiesta");

estacionamento.adicionarCarro(carro1);
estacionamento.adicionarCarro(carro2);
console.log(estacionamento.listarCarros());
estacionamento.removerCarro("ABC-1234");
console.log(estacionamento.listarCarros());
