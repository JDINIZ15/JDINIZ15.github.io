<?php
namespace cefet\banco\modelo;
class AtualizadorDeContas{
    private float $taxaDeAtualizacao;
    private float $saldoTotalDasContasAtualizadas=0.0;

    public function __construct(float $taxaDeAtualizacao)
    {
        $this->taxaDeAtualizacao = $taxaDeAtualizacao;
    }

    public function atualizaConta(Conta $c):void{
        echo "<hr/>Saldo antes de atualizar: R\${$c->getSaldo()}<br/>";
        echo "Atualizando a conta n° {$c->getNumero()}... <br/>";
        $c->atualiza($this->taxaDeAtualizacao);
        echo "Saldo depois de atualizar: R\${$c->getSaldo()}<br/>";
        $this->saldoTotalDasContasAtualizadas += $c->getSaldo();
    }

    public function getSaldoTotalDasContasAtualizadas():float{
        return $this->saldoTotalDasContasAtualizadas;
    }
}
