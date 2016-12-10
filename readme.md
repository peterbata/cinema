Curso de Laravel 5.3 donde aprenderemos a crear una aplicación web dinámica :D

#Cinema

## Instalación

+ Después de descargar el proyecto entramos a este.

        $ cd nombreRepositorio

+ Ejecutamos el siguiente comando, instalamos el composer

        $ composer install

    -En caso contrario podemos instalar el composer de LARAVEL COLLECTIVE:

        $ composer require "laravelcollective/html":"^5.3.0"

+ Modificamos el nombre del archivo __.env.example.__ por __.env__ y agregamos nuestras credenciales.
    -OJO: Cuando subimos al repositorio o cuando en ocasiones se descarga el proyecto de laravel no contiene el .env , para eso
          seguimos la especificaciones de esta linea.

+ Por ultimo solo debemos generar una key para nuestra app(Application Key)

         $ php artisan key:generate

   -Esto aumentara en el 'APP_KEY=' de nuestro .env

+ Para migrar la base de datos (seleccionamos Mysql,Sqlite..etc), migramos.

        $ php artisan migrate

+ Para cargar los datos de los seeders

  $ php artisan db:seed

+ Nota: Para realizar el "migrate" y a la vez procesar los seeders, en un solo paso, tienes como alternativa de lanzar el siguiente comando.

  $ php artisan migrate:refresh --seed

+ Listo ya podemos ejecutar el proyecto Cinema.

        $ php artisan serve

---------------------------------------------------------------------------
DESARROLLADO POR:
Brayan Murphy Crespo Espinoza - Huánuco -Perú

Facebook:
https://www.facebook.com/brayanmurphy.crespoespinoza

GitHub:
https://github.com/BrayanMurphy

Twiter:
BrayanMurphy

 TUTORIAL (youtube):
 https://www.youtube.com/playlist?list=PLIddmSRJEJ0u-5Nv2k6W8Vhe0wUP_7H5W

 DATOS DEL SEEDER PARA INICIAR-SUPERUSUARIO:
 CORREO: BrayanMurphyC@gmail.com'
 PASS:   admin
---------------------------------------------------------------------------
# Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
