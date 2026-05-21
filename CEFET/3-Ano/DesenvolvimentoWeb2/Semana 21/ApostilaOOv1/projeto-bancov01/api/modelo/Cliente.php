<?php
declare (strict_types=1);

class Cliente{
    private string $nome;
    private string $cpf;
    private string $email;

    public function __construct(string $nome = ""){
        if($nome != ""){
            $this->setNome( $nome );
        }
    }

    public function __destruct(){
        echo "O cliente foi Destruído";
    }

    public function getNome():string{
        return $this->nome;
    }

     public function getCPF():string{
        return $this->cpf;
    }

     public function getEmail():string{
        return $this->email;
    }


    public function setNome(string $nome):void{
        if(strlen($nome) < 3)
            return;
        $this->nome = $nome;
    }

    public function setCPF(string $cpf):void{
        
        $this->cpf = $cpf;
    }

    public function setEmail(string $email):void{
        if( strpos($email, "@") && strpos($email, "."))
            $this->email = $email;
        return;
    }

    public function validaCPF($cpf){
        if(strlen($cpf) ==14 && strpos($cpf, '.') == 3 && strpos($cpf, '.', 4) == 7 && strpos($cpf, '-') ==11){
            return true; 
        }
    }

    public function exibeDados(){
        echo "Nome:".$this->getNome();
        echo "CPF:".$this->getCPF();
        echo "E-mail:".$this->getEmail();
    }
}