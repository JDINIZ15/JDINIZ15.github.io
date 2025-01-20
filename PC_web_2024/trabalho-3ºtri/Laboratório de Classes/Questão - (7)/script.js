class Jogador {
  constructor(nome, nivel = 1, experiencia = 0) {
    this.nome = nome;
    this.nivel = nivel;
    this.experiencia = experiencia;
  }

  ganharExperiencia(pontos) {
    this.experiencia += pontos;
    if (this.experiencia >= 100) {
      this.subirDeNivel();
    }
  }

  subirDeNivel() {
    this.nivel += 1;
    this.experiencia = 0;
    console.log(`${this.nome} subiu para o nível ${this.nivel}!`);
  }
}

class Guerreiro extends Jogador {
  constructor(nome, nivel, experiencia, forca = 10) {
    super(nome, nivel, experiencia);
    this.forca = forca;
  }

  subirDeNivel() {
    super.subirDeNivel();
    this.forca += 5;
    console.log(`${this.nome} agora tem força ${this.forca}.`);
  }
}

const guerreiro = new Guerreiro("Thor");
guerreiro.ganharExperiencia(120);
