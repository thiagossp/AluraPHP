<?php 

namespace Alura\Banco\Modelo;

abstract class Pessoa {
    
    protected CPF $cpf;
    protected string $nome;
    
    public function __construct(string $nome, CPF $cpf) {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }
    
    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }
    
    public function recuperaNome(): string
    {
        return $this->nome;
    }
    
    protected function validaNome(string $nome)
    {
        if (strlen($nome) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
    
    
}

?>