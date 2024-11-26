# clone-tabnews-laravel

Implementação do https://www.tabnews.com.br para o https://curso.dev em Laravel

## Requerimentos

PHP 8.3 (https://laravel.com/docs/11.x/deployment#server-requirements)

Swoole 5.1 (https://laravel.com/docs/11.x/octane#swoole)

Composer 2.8 (https://getcomposer.org/download/)

Docker (https://www.docker.com/products/docker-desktop/)

## Instalação Local para desenvolvimento

Dependencias
```sh
composer install
```

Suba os microserviços Docker
```sh
composer services:up
```

Arquivos de configuração e migrations
```sh
composer configure
```

Agora suba o servidor
```sh
php artisan octane:start
```

Basta acessar a aplicação
```text
http://localhost:8000
```