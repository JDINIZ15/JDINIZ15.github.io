<?php
declare (strict_types=1);

require_once "../modelo/Funcionario.php";

$funcionario1 = new Funcionario("Cid Cidoso", "Não Salvo", 10000, "12", "09", "1980");

$funcionario2 = new Funcionario("Luide", "Não Salvo", 5000, "10", "05", "1990");

$funcionario2->demite();
$funcionario1->demite();
$funcionario1->aumentaSalario(50);

echo "Funcionario1 <br/>";
echo "Nome:".$funcionario1->getNome()."<br/>";
echo "Departamento:".$funcionario1->getDepartamento()."<br/>";
echo "Salario:".$funcionario1->getSalario()."<br/>";
echo "Atividade:". $funcionario1->getAtivo()? "Ativo <br/>" : "Demitido <br/>";
echo "Data de Nascimento:". $funcionario1->getData()->getDataBr();

$funcionario2->exibeDados();
