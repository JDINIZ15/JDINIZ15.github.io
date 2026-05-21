<?php
declare(strict_types=1); 

require_once "../modelo/Cliente.php";


$cliente1 = new Cliente("Azaghal");
$cliente1->setCpf("123.456.789-10");
$cliente1->setEmail("davePazos@email.com");

$cliente2 = new Cliente("JovemNerd");
$cliente2->setCpf("987.654.321-00");
$cliente2->setEmail("JovemNerd@email.com");


$cliente1->exibeDados();


echo "<br>Cliente 2:<br>";
echo "Nome: " . $cliente2->getNome() . "<br>";
echo "CPF: " . $cliente2->getCpf() . "<br>";
echo "Email: " . $cliente2->getEmail() . "<br>";
?>
