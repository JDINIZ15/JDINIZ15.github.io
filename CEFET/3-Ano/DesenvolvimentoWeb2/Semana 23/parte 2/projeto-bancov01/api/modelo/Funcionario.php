<?php
declare (strict_types=1);
require_once "Data.php";
class Funcionario{
    private string $nome;
    private string $departamento;
    private float $salario;
    private bool $ativo = true;
    private Data $data;
    private static int $contador = 0;
    private int $identificador = 0;
    private string $cpf = 0;


    public function __construct(string $nome = "", string $departamento = "", float $salario = 0.0, string $dia = "", string $mes = "", string $ano = ""){
        Funcionario::$contador++;
        $this->identificador = self::$contador; 
        if(!($nome === "")){
            $this->setNome( $nome );
        }

        if(!($departamento === ""))
            $this->setDepartamento($departamento);

        if(!($salario === 0.0))
            $this->setSalario($salario);

        $this->ativo = true;

        if( !( $dia==="" || $mes==="" || $ano==="") ){
            $this->data = new Data;
            $this->data->setDia($dia);
            $this->data->setMes($mes);
            $this->data->setAno($ano);
        }
}

    public function __destruct(){
        echo "<br/>O Funcionario foi Destruído <br>";
    }


    //GETTERS
    public function getNome(): string {
        return $this->nome;
    }

    public function getDepartamento(): string {
        return $this->departamento;
    }

    public function getSalario(): float {
        return $this->salario;
    }

    public function getAtivo(): bool {
        return $this->ativo;
    }

    public function getData(): Data{
        return $this->data;
    }
    public function getIdentificador(): int{
        return $this->identificador;
    }

    public function getCpf(): string{
        return $this->cpf;
    }

    //SETTERS

    public function setCpf(string $cpf): void{
        if($this->validaCpf($cpf)){
            $this->cpf = $cpf;
        }
        return;
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

    public function aumentaSalario(float $percent):void{
        $this->salario += $this->salario * ($percent/100); 
    }

    public function demite():void{
        if($this->getAtivo()){
            $this->ativo = false;
        }
        else{
            die("O funcionario já esta demitido"); 
        }
    }

     public function contrata():void{
        if(!($this->getAtivo())){
            $this->ativo = true;
        }
        else{
            die("O funcionario já esta contratado"); 
        }
    }

    public function validaCpf(string $cpf): bool{
         if(strlen($cpf) ==14 && strpos($cpf, '.') == 3 && strpos($cpf, '.', 4) == 7 && strpos($cpf, '-') ==11){
            return true; 
        }
        else{
            return false;
        }
    }

    public function exibeDados(){
        echo "Funcionario <br/>";
        echo "Nome:".$this->getNome()."<br/>";
        echo "Departamento:".$this->getDepartamento()."<br/>";
        echo "Salario:".$this->getSalario()."<br/>";
        echo "Atividade:". $this->getAtivo()? "Ativo <br/>" : "Demitido <br/>";
        echo "Data de Nascimento:". $this->getData()->getDataBr()."</br>";
    }


}