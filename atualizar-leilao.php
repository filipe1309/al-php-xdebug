<?php

require __DIR__ . '/vendor/autoload.php';

use Alura\Leilao\Dao\Leilao as LeilaoDao;
use Alura\Leilao\Model\Leilao;

// ini_set('xdebug.dump_globals', 'on');
// ini_set('xdebug.dump.GET', '*');
// ini_set('xdebug.show_local_vars', 'on');

// ini_set('xdebug.mode', 'profile'); # before profiler_enable
ini_set('xdebug.output_dir', '/home/usuario/dev/personal/alura/alura-php-xdebug/profiling'); # before profiler_output_dir

$pdo = new \PDO('sqlite::memory:');
// $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
$pdo->exec('create table leiloes (
    id INTEGER primary key,
    descricao TEXT,
    finalizado BOOL,
    dataInicio TEXT
);');

$leilao = new Leilao('Brasilia amarela');
$leilaoDao = new LeilaoDao($pdo);
$leilao = $leilaoDao->salva($leilao);

$leilao->finaliza();
$leilaoDao->atualiza($leilao);
