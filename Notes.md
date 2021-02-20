## Var Dump

composer install
vendor/bin/phpunit
vendor/bin/phpunit --filter testBuscaLeiloesNaoFinalizados
php -S localhost:3000

http://localhost:3000/phpinfo.php
http://localhost:3000/var_dump.php

## XDebug

https://xdebug.org/
https://xdebug.org/wizard

```sh
sudo apt-get install php-dev autoconf automake
pecl install xdebug

# add xdebug in php.ini
zend_extension=/home/usuario/.asdf/installs/php/7.4.12/lib/php/extensions/no-debug-non-zts-20190902/xdebug.so
```

php.ini

```ini
[Xdebug]
; xdebug.remote_enable=1
; xdebug.remote_port=9014
; xdebug.remote_autostart=1
; xdebug.idekey=PHPSTORM_XDEBUG
; xdebug.max_nesting_level=1000
; xdebug.remote_host=`/sbin/ip route list match 0/0 |awk '{ print $3 }'` > /usr/local/etc/php/conf.d/xdebug.ini
xdebug.force_display_errors=1
xdebug.force_error_reporting=E_ALL
xdebug.halt_level=E_NOTICE
xdebug.scream=1
xdebug.cli_color=2
; xdebug.var_display_max_children=2 # default 128
xdebug.var_display_max_depth=1 # default 3
xdebug.collect_params=3
xdebug.dump_globals=on
xdebug.dump.SERVER=REQUEST_URI
```

### profiling

https://xdebug.org/docs/profiler
https://www.jetbrains.com/help/phpstorm/profiling-with-xdebug.html#enable-profiling-with-xdebug

```ini
xdebug.mode=profile
xdebug.output_dir=/home/usuario/dev/personal/alura/alura-php-xdebug/profiling
```

#### Read profile files with Xdebug Webgrind

https://github.com/jokkedk/webgrind
git clone git@github.com:jokkedk/webgrind.git
cd webgrind
composer serve
http://localhost:8080/

vendor/bin/phpunit --testsuite=unit

### Simple breakpoint

Exemplo execution VSCode with XDebug Extension
Place the breakpoint
Run "Listen for XDebug"
Run vendor/bin/phpunit --filter testAvaliadorDeveOrdenarOs3Lances

### Conditional breakpoint

Expression: count($leilao->getLances()) == 3 in Avaliador.php>avaliaTresMaioresLances()
vendor/bin/phpunit --filter testAvaliadorDeveRetornarOsMaioresLancesDisponiveis

### Add to Watch

### Add Expression / Evaluate Expression

To calculates values in step debug
$lance2->getValor() - $lance1->getValor();

### Change value in execution time

Set Value
OR
In Debug console
$this->finalizado=false

### Web XDebug

Chrome extension: xdebug helper
Enable remote_host

Ex
Add breakpoint in atualizar-leilao.php
Run "Listen for XDebug"
F5 http://localhost:3000/atualizar-leilao.php

https://jonathansblog.co.uk/remote-debugging-php-in-visual-studio-code-with-xdebug
https://medium.com/@alexcvcoelho/ambiente-de-desenvolvimento-php-com-docker-xdebug-vscode-94bda2b49be9
