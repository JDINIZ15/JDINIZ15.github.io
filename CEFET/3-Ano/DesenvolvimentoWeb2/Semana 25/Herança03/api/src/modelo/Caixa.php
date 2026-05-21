<?php
declare(strict_types=1);
namespace cefet\banco\modelo;
class Caixa extends Funcionario{

    private int $numeroDoGuiche;


    public function getBonificacao(): float
    {
        return $this->salario * 0.15;
    }

    public function getNumeroGuiche(): int{
        return $this->numeroDoGuiche;
    }

    public function setNumeroGuiche(int $numeroGuiche): void{
        $this->numeroDoGuiche = $numeroGuiche;
    }

}