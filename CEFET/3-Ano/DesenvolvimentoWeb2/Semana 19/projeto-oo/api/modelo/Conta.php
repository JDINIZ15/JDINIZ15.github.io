<?php

    class Conta{
        public int $numero;
        public string $titular;
        public float $saldo = 0;
  

        public function saca(float $valor):bool{
            if($valor <=0 || $valor > $this->saldo)
              return false;
            $this->saldo -= $valor;
            return true;
        }

        public function deposita(float $valor):bool{
            if($valor<=0)
                return false;
            $this->saldo += $valor;
            return true;
        }

        public function transferePara(Conta $contaDestino, float $valor):bool{
            if($this->saca($valor))
                return $contaDestino->deposita($valor);
            return false;
        }
    }
?>