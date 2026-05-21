class ContaBancaria {
  constructor(titular, saldo) {
    this.titular = titular;
    this.saldo = saldo;
  }

  depositar(valor) {
    this.saldo += valor;
  }

  sacar(valor) {
    if (this.saldo >= valor) {
      this.saldo -= valor;
    } else {
      console.log("Saldo insuficiente.");
    }
  }

  mostrarSaldo() {
    console.log(`Saldo atual: R$ ${this.saldo}`);
  }
}

class ContaCorrente extends ContaBancaria {
  constructor(titular, saldo, limite) {
    super(titular, saldo);
    this.limite = limite;
  }

  sacar(valor) {
    if (this.saldo + this.limite >= valor) {
      this.saldo -= valor;
    } else {
      console.log("Saldo e limite insuficientes.");
    }
  }
}

const conta = new ContaCorrente("Maria", 500, 200);
conta.sacar(600);
conta.mostrarSaldo();
