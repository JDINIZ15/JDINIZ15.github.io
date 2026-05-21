<?php
declare(strict_types = 1);
namespace cefet\banco\modelo;
require_once "Cliente.php";


abstract class Conta{
  protected int $numero;
  protected float $saldo = 0.0;
  protected string $nomeDoTitular;

  public function __construct(int $numero, string $nomeDoTitular){
  
    if($numero <=0){
      echo "Não é possível criar uma conta com número inválido.<br/>";
      die("A aplicação será encerrada");
    }

    $this->numero = $numero; 

   if($nomeDoTitular !="")
      $this->setNomeDoTitular($nomeDoTitular);
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

public function getNomeDoTitular(): string {
        return $this->nomeDoTitular;
    }
public function setNomeDoTitular($nomeTitular):void{
    $this->nomeDoTitular = $nomeTitular;
}
public function atualiza(float $taxa){
    $this->saldo -=$taxa;
}
 public function exibeDados(){
        echo "Numero:".$this->getNumero();
        echo "Saldo:".$this->getSaldo();
        echo "Nome do Titular: " . $this->getNomeDoTitular();
    }
}