<?php

require __DIR__ . '/vendor/autoload.php';

use Alura\Leilao\Model\Usuario;
use Alura\Leilao\Model\Leilao;

$usuario = new Usuario('Filipe Leuch');
$leilao = new Leilao('Fiat 147 0km');

var_dump($usuario, $leilao);
