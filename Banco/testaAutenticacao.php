<?php 

include_once 'autoload.php';

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Diretor};
use Alura\Banco\Service\Autenticador;

$umDiretor = new Diretor(
		'Roberto',
		new CPF('147.258.369-85'),
		5000
		);

$autenticador = new Autenticador();
$autenticador->tentaAutenticar($umDiretor, '1234');
$autenticador->tentaAutenticar($umDiretor, '4321');

?>