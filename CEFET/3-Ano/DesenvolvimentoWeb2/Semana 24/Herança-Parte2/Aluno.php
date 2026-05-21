<?php
declare(strict_types = 1);

class Aluno extends Pessoa{
  private string $matricula; 

    public function setMatricula($matricula):void{
    $this->matricula = $matricula;
  }
  public function getMatricula():string{
    return $this->matricula;
  }
}