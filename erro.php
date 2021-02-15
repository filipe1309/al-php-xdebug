<?php

require __DIR__ . '/vendor/autoload.php';

use Alura\Leilao\Model\Usuario;
use Alura\Leilao\Model\Leilao;
use Alura\Leilao\Model\Lance;

ini_set('xdebug.dump_globals', 'on');
ini_set('xdebug.dump.GET', '*');
ini_set('xdebug.show_local_vars', 'on');

$leilao = new Leilao('Um objeto muito legal');
// $leilao->finaliza();
$usuario = new Usuario('Filipe Leuch');
$lance = new Lance($usuario, 1000);
$lance2 = new Lance($usuario, 1500);

$leilao->recebeLance($lance);
$leilao->recebeLance($lance2);

var_dump($usuario, $leilao);
