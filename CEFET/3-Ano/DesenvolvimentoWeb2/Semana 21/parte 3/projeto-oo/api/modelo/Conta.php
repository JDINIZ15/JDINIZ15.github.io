<?php

    class Conta{
        private int $numero;
        private string $titular;
        private float $saldo = 0;
        //Métodos acessores
        /**
         * @return int $numero
         */
        public function getNumero():int{
            return $this->numero;
        }

        /**
         * @param int $numero
         * @return void 
         */
         public function setNumero(int $numero):void{
            if(! $numero > 0)
                return;//Early return
            $this->numero = $numero;
         }

         /**
          * @return string $titular
          */
          public function getTitular():string{
            return $this->titular;
          }

          /**
           * @param string $titular
           * @return void
           */
          public function setTitular(string $titular):void{
            if(strlen($titular)<3)
                return;//Early return
            $this->titular = $titular; 
          }

          /**
           * @return float $saldo
           */
          public function getSaldo():float{
            return $this->saldo;
          }


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
        public function exibeDados():void{
            echo "Número: {$this->numero}<br/>";
            echo "Titular: {$this->titular}<br/>";
            echo "Saldo: R\${$this->saldo}<br/>";
        }
    }
?>