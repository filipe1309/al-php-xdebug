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

# add xbug in php.ini
zend_extension=/home/usuario/.asdf/installs/php/7.4.12/lib/php/extensions/no-debug-non-zts-20190902/xdebug.so
```
