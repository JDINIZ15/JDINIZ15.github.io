<?php
class Filme{
    private string $titulo;
    private int $anoDeLancamento;
    private float $somaDasAvaliacoes = 0;
    private int $totalDeAvaliacoes = 0;
    private bool $incluidoNoPlano = false; 

    public function getTitulo():string{
        return $this->titulo;
    }

    public function setTitulo(string $titulo):void{
        $this->titulo = $titulo;
    }

    public function getAnoDeLancamento():int{
        return $this->anoDeLancamento;
    }

    public function setAnoDeLancamento(int $anoDeLancamento):void{
        if($anoDeLancamento <1960){
            echo"Só trabalhamos com filmes a partir de 1960.<br/>";
            return;
        }
        $this->anoDeLancamento = $anoDeLancamento;
    }

    public function getSomaDasAvaliacoes():float{
        return $this->somaDasAvaliacoes;
    }

    public function getTotalDeAvaliacoes():int{
        return $this->totalDeAvaliacoes;
    }

    public function isIncluidoNoPlano(): bool{
        return $this->incluidoNoPlano;
    }

    public function exibeFichaTecnica():void{
        echo"Titulo: {$this->titulo}<BR/>";
        echo"Ano de Lançamento: {$this->anoDeLancamento}<BR/>";
        $incluido = ($this->incluidoNoPlano)?"SIM":"NÃO";
        echo"Incluido no Plano: {$incluido}<br/>";
    }
    
    public function avalia(float $nota):void{
        if($nota<0|| $nota>10){
            echo"A nota deve estar entre 0 e 10.<br/>";
            return;
        }
        $this->somaDasAvaliacoes +=$nota;
        $this->totalDeAvaliacoes++;
    }

    public function obtemAvaliacao():float{
        return ($this->somaDasAvaliacoes / $this->totalDeAvaliacoes);
    }

    public function incluirNoPlano():void{
        $this->incluidoNoPlano = true; 
    }

    public function retirarDoPlano():void{
        $this->incluidoNoPlano=false;
    }
}
?>