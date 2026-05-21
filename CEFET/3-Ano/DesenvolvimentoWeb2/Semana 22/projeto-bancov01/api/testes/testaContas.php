<?php
declare(strict_types=1);
require_once "../modelo/Cliente.php";
require_once "../modelo/Conta.php";

$cliente1 = new Cliente("Rex");
$cliente1->setCpf("123.456.789-10");
$cliente1->setEmail("Rex@email.com");

$cliente2 = new Cliente("Caquinho");
$cliente2->setCpf("987.654.321-00");
$cliente2->setEmail("Caquinho@email.com");

$cliente3 = new Cliente("Tucano");
$cliente3->setCpf("456.789.123-11");
$cliente3->setEmail("Tucano@email.com");

$conta1 = new Conta(1, $cliente1);
$conta2 = new Conta(2, $cliente2);
$conta3 = new Conta(3, $cliente3);

$conta1->depositar(1000);
$conta2->depositar(500);
$conta3->depositar(2000);

$conta1->sacar(200);
$conta2->sacar(100);

$conta1->transferePara($conta3, 300);

// Conta 1: usar apenas exibeDados
echo "<h3>Conta 1:</h3>";
$conta1->exibeDados();

// Conta 2: imprimir número e saldo, e usar exibeDados do titular
echo "<h3>Conta 2:</h3>";
echo "Número: " . $conta2->getNumero() . "<br>";
echo "Saldo: R$ " . $conta2->getSaldo() . "<br>";
echo "Titular:<br>";
$conta2->getTitular()->exibeDados();

// Conta 3: imprimir individualmente cada informação
echo "<h3>Conta 3:</h3>";
echo "Número: " . $conta3->getNumero() . "<br>";
echo "Saldo: R$ " . $conta3->getSaldo() . "<br>";
echo "Nome: " . $conta3->getTitular()->getNome() . "<br>";
echo "CPF: " . $conta3->getTitular()->getCpf() . "<br>";
echo "Email: " . $conta3->getTitular()->getEmail() . "<br>";
?>
