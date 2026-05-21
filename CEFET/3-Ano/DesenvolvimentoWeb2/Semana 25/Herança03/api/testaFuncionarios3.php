<?php
declare(strict_types=1);
require_once ('autoload.php');
use cefet\banco\modelo\Funcionario;
use cefet\banco\modelo\Gerente;
use cefet\banco\modelo\Tesoureiro;
use cefet\banco\modelo\Caixa;
use cefet\banco\modelo\Diretor;

$f1 = new Funcionario("Mariana");
$f1->setSalario(2000);

$g1= new Gerente("Ricardo", 123);
$g1->setDepartamento("Recursos Humanos");
$g1->setSalario(5000);

$g2 = new Gerente("Paulo", 124);
$g2->setSalario(5000);

$t1 = new Tesoureiro("Fulano");
$t1->setSalario(3000);

$c1 = new Caixa("Pedro");
$c1->setSalario(8000);

$d1 = new Diretor ("Beltrano", 123);
$d1->setSalario(8000);

echo "<hr/>Dados do Funcionário 1 :<hr/>";
$f1->exibeDados();
echo "Bonificação: R\${$f1->getBonificacao()}<br/>";

echo "<hr/>Dados do Gerente 1:<hr/>";
$g1->exibeDados();
echo "Bonificação: R\${$g1->getBonificacao()}<br/>";

echo "<hr/>Dados do Gerente 2:<hr/>";
$g2->exibeDados();
echo "Bonificação: R\${$g2->getBonificacao()}<br/>";

echo "<hr/>Dados do Tesoureiro 1:<hr/>";
$t1->exibeDados();
echo "Bonificação: R\${$t1->getBonificacao()}<br/>";

echo "<hr/>Dados do Caixa 1:<hr/>";
$c1->exibeDados();
echo "Bonificação: R\${$c1->getBonificacao()}<br/>";

echo "<hr/>Dados do Diretor 1:<hr/>";
$d1->exibeDados();
echo "Bonificação: R\${$d1->getBonificacao()}<br/>";