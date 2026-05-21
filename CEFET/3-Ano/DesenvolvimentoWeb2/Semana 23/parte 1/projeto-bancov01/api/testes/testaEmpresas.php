<?php
declare(strict_types=1); 

require_once "../modelo/Empresa.php";

$novaEmpresa = new Empresa("CBCORP", "1234567890");


$funcionario1 = new Funcionario("Cid Cidoso", "Não Salvo", 10000, "12", "09", "1980");

$funcionario2 = new Funcionario("Luide", "Não Salvo", 5000, "10", "05", "1990");

$novaEmpresa->adicionaEmpregado(($funcionario2));

$novaEmpresa->adicionaEmpregado(($funcionario1));

$array = array();


$funcionario3 = new Funcionario("Brian Rizzo", "Não Salvo", 10000, "12", "09", "1980");

$funcionario4 = new Funcionario("Igor Seco", "Não Salvo", 5000, "10", "05", "1990");

array_push($array, $funcionario3, $funcionario4);

$novaEmpresa->addVariosFuncionarios($array);

$novaEmpresa->removeEmpregado($funcionario3);

$novaEmpresa->verificaFuncionario($funcionario3);

$novaEmpresa->getEmpregados();