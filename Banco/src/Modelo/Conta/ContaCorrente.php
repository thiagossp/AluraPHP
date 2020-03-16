<?php

namespace Alura\Banco\Modelo\Conta;

class ContaCorrente extends Conta {
    
    public function transfere(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }
        
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }
    
    public function tarifaSaque(): float{
        return 0.05;
    }
}