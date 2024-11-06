## Instalação

```sh
$ composer create-project laravel/laravel <nome-projeto>
```

## Instalação do Breeze no composer do seu projeto

```sh
$ composer require laravel/breeze --dev
```

## Instalação do Breeze no projeto

```sh
$ php artisan breeze:install
```
--------------------------------------------------------

Executando o Seeder criado ao instalar o Breeze, que foi modificado para guardar um usuário
```sh
$ php artisan db:seed --class=DatabaseSeeder
```
