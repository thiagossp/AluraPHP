<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\{Pessoa, CPF};

abstract class Funcionario extends Pessoa {
    
    private float $salario;
    
    public function __construct(string $nome, CPF $cpf, float $salario) {
        parent::__construct($nome, $cpf);       
        $this->salario = $salario;
    }
    
    public function alteraNome(string $nome) {
        $this->validaNome($nome);
        $this->nome = $nome;
    }
    
    public function recuperaSalario(): float {
        return $this->salario;
    }
    
    public function calculaBonificacao(): float {
        return $this->salario * 0.1;
    }
    
}

?>