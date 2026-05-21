<?php
declare(strict_types = 1);
require_once "Cliente.php";


class Conta{
  private int $numero;
  private float $saldo = 0.0;
  private Cliente $titular; 

  public function __construct(int $numero, Cliente $titular){
  
    if($numero <=0){
      die("Erro: o número precisa ser positivo");
    }
    $this->numero = $numero; 
    $this->titular = $titular;
  }

public function transferePara(Conta $outraConta, float $valor): void {
        if ($valor <= 0) {
            die("Erro: valor da transferência deve ser maior que zero.");
        }
        if ($valor > $this->saldo) {
            die("Erro: saldo insuficiente para transferência.");
        }
        $this->saldo -= $valor;
        $outraConta->depositar($valor);
}

public function sacar(float $valor): void {
        if ($valor <= 0) {
            die("Erro: valor de saque deve ser maior que zero.");
        }
        if ($valor > $this->saldo) {
            die("Erro: saldo insuficiente.");
        }
        $this->saldo -= $valor;
    }

public function depositar(float $valor): void {
        if ($valor <= 0) {
            die("Erro: valor de depósito deve ser maior que zero.");
        }
        $this->saldo += $valor;
    }

public function getNumero(): int {
        return $this->numero;
    }

public function getSaldo(): float {
        return $this->saldo;
    }

public function getTitular(): Cliente {
        return $this->titular;
    }
 public function exibeDados(){
        echo "Numero:".$this->getNumero();
        echo "Saldo:".$this->getSaldo();
        echo "Titular: " . $this->titular->getNome();
        echo "CPF: " . $this->titular->getCpf();
        echo "Email: " . $this->titular->getEmail();
    }
}