# Repositório de Testes PHP

## Composer, PHPUnit e AspectMock

- https://getcomposer.org/
- https://phpunit.de/
- https://github.com/Codeception/AspectMock

## Instalando composer


    php -r "readfile('https://getcomposer.org/installer');" | php


## Instalando dependências que estão definidadas no composer.json


    ./composer.phar install


## Ajustando autoload


    ./composer.phar dumpautoload -o

    
## Rodando os testes


    vendor/bin/phpunit 


## Atualizando dependências, caso composer.json tenha cido atualizado


    ./composer.phar self-update
    ./composer.phar update

## Para instalar novas dependências pesquisar em: https://packagist.org/


    ./composer.phar require doctrine/orm
