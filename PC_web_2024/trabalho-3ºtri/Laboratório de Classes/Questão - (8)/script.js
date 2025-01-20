class Turma {
  constructor(curso) {
    this.curso = curso;
    this.alunos = [];
  }

  adicionarAluno(nome) {
    this.alunos.push(nome);
  }

  removerAluno(nome) {
    this.alunos = this.alunos.filter((aluno) => aluno !== nome);
  }

  listarAlunos() {
    return this.alunos;
  }
}

class TurmaOnline extends Turma {
  constructor(curso, linkDeAcesso) {
    super(curso);
    this.linkDeAcesso = linkDeAcesso;
  }

  listarAlunos() {
    return `${super.listarAlunos().join(", ")}. Link de acesso: ${
      this.linkDeAcesso
    }`;
  }
}

const turma = new TurmaOnline("Matemática", "http://linkdeacesso.com");
turma.adicionarAluno("Ana");
turma.adicionarAluno("Pedro");
console.log(turma.listarAlunos());
