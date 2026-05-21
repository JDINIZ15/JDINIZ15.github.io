<?php
declare(strict_types=1);

use cefet\banco\modelo\AtualizadorDeContas;
use cefet\banco\modelo\Conta;
use cefet\banco\modelo\ContaCorrente;
use cefet\banco\modelo\ContaPoupanca;

require_once('autoload.php');

$atualizador = new AtualizadorDeContas(0.01);

$c  = new Conta(1, "Fulano");
$cc = new ContaCorrente(2, "Beltrano");
$cp = new ContaPoupanca(3, "Ciclano");

$atualizador->atualizaConta($c);
$atualizador->atualizaConta($cc);
$atualizador->atualizaConta($cp);

echo "Saldo total das contas atualizadas: R\${$atualizador->getSaldoTotalDasContasAtualizadas()}";
