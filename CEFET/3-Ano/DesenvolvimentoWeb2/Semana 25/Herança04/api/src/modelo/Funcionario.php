<?php
declare (strict_types=1);
namespace cefet\banco\modelo;



class Funcionario{
    protected string $nome, $departamento;
    protected float $salario;

    public function __construct(string $nome, string $departamento = "NÃO DEFINIDO", float $salario = 1000.0)
    {
      $this->setNome($nome);
      if(isset($departamento) && $departamento !== "")
        $this->setDepartamento($departamento);
      $this->setSalario($salario);
    }

    public function aumentaSalario(float $percentualDeAumento):void {
        if($percentualDeAumento > 0 && $percentualDeAumento <=100)
            $this->salario +=(($this->salario * $percentualDeAumento)/100);
    }

    public function getBonificacao():float {
        return $this->salario * 0.10;
    }

    public function exibeDados():void{
        echo "Nome: {$this->getNome()} <br/>";
        echo "Departamento: {$this->getDepartamento()}<br/>";
        echo "Salário: R\${$this->getSalario()}<br/>";
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getDepartamento(): string {
        return $this->departamento;
    }

    public function getSalario(): float {
        return $this->salario;
    }

    public function setNome(string $nome):void{
        if(strlen($nome) < 3)
            return;
        $this->nome = $nome;
    }

    public function setDepartamento(string $departamento):void{
        
        $this->departamento = $departamento;
    }

       public function setSalario(float $salario):void{
        
        $this->salario = $salario;
    }
}