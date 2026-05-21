<?php
declare(strict_types=1);

require_once __DIR__.'../../modelo/Funcionario.php';
require_once __DIR__.'../../modelo/Gerente.php';

$f1 = new Funcionario("Mariana");
$f1->setNome("Mariana da Silva");
$f1->setDepartamento("Vendas");
$f1->setSalario(2000);

$g1 = new Gerente("Ricarado", 123);
$g1->setDepartamento("Recursos Humanos");
$g1->setSalario(5000);

$f1->aumentaSalario(20);

echo "Dados do Funcionario 1: <br/>";
echo "Nome: {$f1->getNome()}<br/>";
echo "Departamento: {$f1->getDepartamento()}<br/>";
echo "Salário: R\${$f1->getSalario()}<br/>";
echo "Bonificação: R\${$f1->getBonificacao()}<br/>";

echo "<hr/>";

echo "Dados do gerente 1: <br/>";
$g1->exibeDados();
echo "Bonificação: R\${$g1->getBonificacao()}<br/>";