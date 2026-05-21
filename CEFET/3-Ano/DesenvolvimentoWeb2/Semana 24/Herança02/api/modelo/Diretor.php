<?php
declare(strict_types=1);

class Diretor extends Gerente{
    public function getBonificacao(): float
    {
        return $this->salario * 0.50;
    }
}