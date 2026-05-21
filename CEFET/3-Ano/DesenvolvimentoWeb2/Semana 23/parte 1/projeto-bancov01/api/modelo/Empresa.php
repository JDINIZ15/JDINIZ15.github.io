<?php
declare(strict_types = 1);
require_once "Funcionario.php";
class Empresa{
    
    private string $nome;
    private string $cnpj;
    private array $empregados; 


    public function __construct(string $nome = '', string $cnpj = '')
    {
        if($nome != "")
            $this->setNome($nome);
        if($cnpj != "")
            $this->setCNPJ($cnpj);

        $this->empregados = array();
    }

    public function setNome(string $nome):void{
    if(strlen($nome) >= 4)
        $this->nome = $nome;
    }
    public function setCNPJ(string $cnpj){
        if($cnpj != "")
            $this->cnpj = $cnpj;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getcnpj(): string {
        return $this->cnpj;
    }
    public function adicionaEmpregado(Funcionario $funcionario):void{
        array_push($this->empregados, $funcionario);
    }

    public function verificaArrayDeEmpregados(array $variosFuncionarios):bool{
      foreach($variosFuncionarios as $funcionario){
        if(! $funcionario instanceof Funcionario)
            return false;
      }
    return true; 
    }

    public function addVariosFuncionarios(array $variosFuncionarios){
        if($this->verificaArrayDeEmpregados($variosFuncionarios))
            $this->empregados = array_merge($this->empregados, $variosFuncionarios);
    }

    public function getEmpregados(){
       foreach($this->empregados as $empregado){
            $empregado->exibeDados();
       }
    }
    public function verificaFuncionario(Funcionario $funcionario){
        if(in_array($funcionario, $this->empregados)){
            echo "O funcionario Pertence à empresa";
        }else{
            echo "O funcionario não pertence à empresa"; 
        }
    }

    public function removeEmpregado( Funcionario $funcionario){
        $key = array_search($funcionario, $this->empregados);
        unset($this->empregados[$key]);
    }
}