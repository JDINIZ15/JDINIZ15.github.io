<?php
declare (strict_types=1);
namespace cefet\banco\modelo;

class GerenciadorDeBonificacoes{
    private float $totalEmBonifcacoes = 0.0;

    public function somaBonificacao(Gerente $f){
        $this->totalEmBonifcacoes += $f->getBonificacao();
    }

    public function getTotalBonificacoes():float{
        return $this->totalEmBonifcacoes;
    }
}