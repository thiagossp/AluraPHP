<?php

include_once 'autoload.php';

use Alura\Banco\Modelo\{CPF, Funcionario};
use Alura\Banco\Service\ControladorDeBonificacoes;

$umFuncionario = new Funcionario(
    'Thiago Silva', 
    new CPF('123.456.789-10'),
    'Desenvolvedor',
    1000
);

$umaFuncionaria = new Funcionario(
    'Patricia',
    new CPF('987.654.321-10'),
    'Gerente',
    3000
    );
    
$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);

echo $controlador->recuperaBonificacao();
?>