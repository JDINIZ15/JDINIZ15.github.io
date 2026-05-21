<?php 
declare(strict_types = 1);

class Pessoa{
  protected string $nome, $cpf;
  protected int $telefone;

    public function __construct(string $nome, string $cpf = "", int $telefone = 0){
      $this->setNome($nome);
      $this->setCPF($cpf);
      $this->setTelefone($telefone);
  }
 
    public function getTelefone(): int{
      return $this->telefone;
    }

    public function setTelefone(int $telefone):void{
      $this->telefone = $telefone;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome):void{
        if(strlen($nome) < 3)
            return;
        $this->nome = $nome;
    }

     public function getCPF():string{
        return $this->cpf;
    }

     public function validaCPF($cpf):bool{
        if(strlen($cpf) ==14 && strpos($cpf, '.') == 3 && strpos($cpf, '.', 4) == 7 && strpos($cpf, '-') ==11){
            return true; 
        }
        else
          return false;
      }

     public function setCPF(string $cpf):void{
        if($this->validaCPF($cpf))
            $this->cpf = $cpf;
        else{
            die("CPF inválido.");
        }
    }

}