<?php

    namespace Alura\Banco\Modelo\Conta;
    
    class ContaPoupanca extends Conta {
        
        public function tarifaSaque(): float {
            return 0.03;
        }
    
        
        
    }