<?php
namespace cefet\banco\modelo;

class Banco {

    private array $contas = [];

    public function adiciona(Conta $c): void {
        $this->contas[] = $c;
    }

    public function getConta(int $posicao): Conta {
        return $this->contas[$posicao];
    }

    public function getTotalDeContas(): int {
        return count($this->contas);
    }

    /** Retorna todas as contas — útil para o foreach */
    public function getContas(): array {
        return $this->contas;
    }
}
