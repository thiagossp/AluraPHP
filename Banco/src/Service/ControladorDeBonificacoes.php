<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class ControladorDeBonificacoes {
    private float $totalDeBonificacoes = 0;
    
    public function adicionaBonificacaoDe(Funcionario $funcionario) {
    	$this->totalDeBonificacoes += $funcionario->calculaBonificacao();
    }
    
    public function recuperaBonificacao(): float {
    	return $this->totalDeBonificacoes;
    }
}

?>