class Pessoa {
  constructor(nome, idade, sexo) {
    this.nome = nome;
    this.idade = idade;
    this.sexo = sexo;
  }

  apresentar() {
    return `Olá, meu nome é ${this.nome}, tenho ${this.idade} anos e sou ${this.sexo}.`;
  }
}

class Aluno extends Pessoa {
  constructor(nome, idade, sexo, matricula, curso) {
    super(nome, idade, sexo);
    this.matricula = matricula;
    this.curso = curso;
  }

  apresentar() {
    return `${super.apresentar()} Estou matriculado no curso de ${this.curso}.`;
  }
}

const aluno = new Aluno("João", 25, "homem", 12345, "Engenharia");
console.log(aluno.apresentar());
