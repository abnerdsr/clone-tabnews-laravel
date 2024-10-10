# clone-tabnews-laravel

Implementação do https://www.tabnews.com.br para o https://curso.dev em Laravel

## Requerimentos

PHP 8.3

Composer 2.8

Docker (Para os microsserviços como Banco de Dados)

## Instalação Local

Se quiser instalar o PHP com o Composer
```sh
make dependencies
```

Instalar a aplicação e suas dependencias
```sh
make install
```

Agora suba o servidor
```sh
php artisan octane:frankenphp
```

Basta acessar a aplicação
```text
http://localhost:8000
```