## Var Dump

composer install
vendor/bin/phpunit
vendor/bin/phpunit --filter testBuscaLeiloesNaoFinalizados
php -S localhost:3000

## XDebug

https://xdebug.org/
https://xdebug.org/wizard

```sh
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
