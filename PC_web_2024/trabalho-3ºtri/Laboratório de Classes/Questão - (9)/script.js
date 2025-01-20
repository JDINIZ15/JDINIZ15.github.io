class Tarefa {
  constructor(descricao) {
    this.descricao = descricao;
    this.concluida = false;
  }

  marcarConcluida() {
    this.concluida = true;
  }

  descrever() {
    return `${this.descricao} - ${this.concluida ? "Concluída" : "Pendente"}`;
  }
}

class ListaDeTarefas {
  constructor() {
    this.tarefas = [];
  }

  adicionarTarefa(tarefa) {
    this.tarefas.push(tarefa);
  }

  listarConcluidas() {
    return this.tarefas
      .filter((tarefa) => tarefa.concluida)
      .map((tarefa) => tarefa.descrever());
  }
}

const lista = new ListaDeTarefas();
const tarefa1 = new Tarefa("Estudar JavaScript");
tarefa1.marcarConcluida();
lista.adicionarTarefa(tarefa1);
lista.adicionarTarefa(new Tarefa("Fazer exercícios"));
console.log(lista.listarConcluidas());
