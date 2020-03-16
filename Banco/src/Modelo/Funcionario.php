<?php

namespace Alura\Banco\Modelo;

class Funcionario extends Pessoa {
    
    private string $cargo;
    
    public function __construct($nome, $cpf, $cargo) {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;        
    }
    
    public function alteraNome(string $nome) {
        $this->validaNome($nome);
        $this->nome = $nome;
    }
    
}

?>