<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\{Endereco, CPF};
use Alura\Banco\Modelo\Conta\{Titular, ContaPoupanca, ContaCorrente};

$endereco = new Endereco('Bauru', 'Um Bairro', 'Rua do Asfalto', '1-123');
$titular = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias', $endereco);

$poupanca = new ContaPoupanca($titular);
$poupanca->deposita(500);
$poupanca->saca(100);

$corrente = new ContaCorrente($titular);
$corrente->deposita(500);
$corrente->saca(100);

echo "Saldo poupança R$" . $poupanca->recuperaSaldo() . PHP_EOL;
echo "Saldo conta corrente R$" .$corrente->recuperaSaldo() . PHP_EOL;

echo $endereco . PHP_EOL;

echo $endereco->rua;

?>