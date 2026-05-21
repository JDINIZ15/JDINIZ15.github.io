<?php
declare(strict_types = 1);
class Professor extends Pessoa{
  protected float $horasDeAulasMes;
  protected float $valorHoraSalario;

  public function calcularSalario(float $horasDeAulasMes = 0.0, float $valorHoraSalario = 0.0):float{

    if($horasDeAulasMes == 0.0 || $valorHoraSalario ==0.0)
        return $this->getHorasAulas() * $this->getValorSalario();

    return $horasDeAulasMes * $valorHoraSalario;
  }

  public function getHorasAulas():float{
    return $this->horasDeAulasMes;
  }

  public function setHorasAulas(float $horasAulas):void{
    $this->horasDeAulasMes = $horasAulas;
  }

    public function getValorSalario():float{
    return $this->valorHoraSalario;
  }

  public function setValorSalario(float $valorSalario):void{
    $this->valorHoraSalario = $valorSalario;
  }
}