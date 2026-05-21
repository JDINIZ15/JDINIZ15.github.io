<?php
declare(strict_types=1);

class Tesoureiro extends Funcionario{
    public function getBonificacao(): float
    {
        return $this->salario * 0.20;
    }

}