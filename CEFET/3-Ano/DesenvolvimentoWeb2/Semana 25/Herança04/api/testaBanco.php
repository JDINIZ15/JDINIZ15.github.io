<?php
declare(strict_types=1);

use cefet\banco\modelo\Banco;
use cefet\banco\modelo\Conta;
use cefet\banco\modelo\ContaCorrente;
use cefet\banco\modelo\ContaPoupanca;
use cefet\banco\modelo\AtualizadorDeContas;

require_once 'autoload.php';

$banco = new Banco();

// Criando contas
$c1 = new Conta(1, "Fulano");
$c2 = new ContaCorrente(2, "Beltrano");
$c3 = new ContaPoupanca(3, "Ciclano");

// Inserindo no banco
$banco->adiciona($c1);
$banco->adiciona($c2);
$banco->adiciona($c3);

// Atualizador
$atualizador = new AtualizadorDeContas(0.01);

// Percorrendo com foreach
foreach ($banco->getContas() as $conta) {
    $atualizador->atualizaConta($conta);
}

echo "<hr>Saldo total atualizado: R\${$atualizador->getSaldoTotalDasContasAtualizadas()}<br>";
