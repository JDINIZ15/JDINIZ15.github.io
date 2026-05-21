class Funcionario {
  constructor(nome, salario) {
    this.nome = nome;
    this.salario = salario;
  }

  aumentarSalario(percentual) {
    this.salario += (this.salario * percentual) / 100;
  }

  mostrarInformacoes() {
    return `Nome: ${this.nome}, Salário: R$ ${this.salario}`;
  }
}

class Gerente extends Funcionario {
  constructor(nome, salario, departamento) {
    super(nome, salario);
    this.departamento = departamento;
  }

  mostrarInformacoes() {
    return `${super.mostrarInformacoes()}, Departamento: ${this.departamento}`;
  }
}

class Estagiario extends Funcionario {
  aumentarSalario(percentual) {
    if (percentual > 10) percentual = 10;
    super.aumentarSalario(percentual);
  }
}

const gerente = new Gerente("Carlos", 5000, "TI");
console.log(gerente.mostrarInformacoes());
