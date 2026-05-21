<?php
declare(strict_types=1);
namespace cefet\banco\modelo;
class Data{
    private string $dia;
    private string $mes;
    private string $ano;

    public function __construct(string $dia = "", string $mes = "", string $ano = ""){
        if( !( $dia==="" || $mes==="" || $ano==="") ){
            $this->setDia($dia);
            $this->setMes($mes);
            $this->setAno($ano); 
        }
        
    }
  //GETTERS
    public function getDia(): string {
        return $this->dia;
    }

    public function getMes(): string {
        return $this->mes;
    }

    public function getAno(): string {
        return $this->ano;
    }

    //SETTERS

      public function setDia(string $dia):void{
        if(strlen($dia)==2)
            $this->dia = $dia;
        else{
            die("Um dia so pode ter dois numeros");
        }
    }

     public function setMes(string $mes):void{
        if(strlen($mes)==2)
            $this->mes = $mes;
        else{
            die("Um mes so pode ter dois numeros");
        }
    }
     public function setAno(string $ano):void{
        if(strlen($ano)==4)
            $this->ano = $ano;
        else{
            die("Um ano so pode ter quatro numeros");
        }
    }

    public function getDataBr(){
        return "{$this->dia}/{$this->mes}/{$this->ano}";
    }
}