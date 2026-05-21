<?php
declare(strict_types = 1);

class ProfessorMestre extends Professor{
  private string $temaDaDissertacao;

  public function setTemaDissertacao($temaDaDissertacao):void{
    $this->temaDaDissertacao = $temaDaDissertacao;
  }
  public function getTemaDissertacao():string{
    return $this->temaDaDissertacao;
  }

   public function calcularSalario(float $horasDeAulasMes = 0.0, float $valorHoraSalario = 0.0):float{

    if($horasDeAulasMes == 0.0 || $valorHoraSalario ==0.0)
        return parent::getHorasAulas() * parent::getValorSalario();

    return $horasDeAulasMes * $valorHoraSalario;
  }
}