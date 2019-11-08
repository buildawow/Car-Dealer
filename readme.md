# Car Dealer System

Sistema para la gestion de venta de vehiculos.

## Comenzando 🚀

git clone https://github.com/buildawow/Car-Dealer.git

Mira **Deployment** para conocer como desplegar el proyecto.


### Pre-requisitos 📋

- Ubuntu Server 16.04 a 18.04
- Apache2
- Mysql
- PHP 7.0  >

### Instalación 🔧

```
cd var/www/html/project
git clone https://github.com/buildawow/Car-Dealer.git project
cd project
composer install project
cp .example.env .env
//edit the .env file
nano .env
php artisan key:generate
chmod 777 -R storage
php artisan migrate
```
Ve al navegador

## Ejecutando las pruebas ⚙️

Dentro de la raiz del proyecto:

```php
vendor/bin/phpunit
```

### Analice las pruebas end-to-end 🔩

No se utilizo Telescope en este proyecto.
tampoco se probaron endpoints con Postman.

### Y las pruebas de estilo de codificación ⌨️

El codigo fue escrito segun los estandares PSR-2 Y PSR-4 y la guia de estilo oficial de Laravel.

Paso las pruebas de CodeSniffer para PSR-2

## Deployment 📦

Pendiente...

## Construido con 🛠️

* [Laravel](https://laravel.com/docs/6.x) - El framework web
* [Composer](https://getcomposer.org/) - Manejador de Dependencias
* [Mysql](https://www.mysql.com/) - Motor de Base de Datos
* [Bootstrap](https://getbootstrap.com/docs/4.3/getting-started/introduction/) - Framework CSS

## Contribuyendo 🖇️

Por favor lee el [CONTRIBUTING.md](https://gist.github.com/buildawow/xxxxxx) para detalles de nuestro código de conducta, y el proceso para enviarnos pull requests.

## Wiki 📖

Para mas informacion escribir al email de soporte [email](support@buildawow.com)

## Versionado 📌

Usamos [SemVer](http://semver.org/) para el versionado. Para todas las versiones disponibles, mira los [tags en este repositorio](https://github.com/Car-Dealer/tags).

## Autores ✒️

* **Ariel SalvadorDev** - *Trabajo Inicial* - [ArielSalvadorDev](https://github.com/ArielSalvadorDev)

También puedes mirar la lista de todos los [contribuyentes](https://github.com/Car-Dealer/contributors) quíenes han participado en este proyecto. 

## Licencia 📄

Este proyecto está bajo la Licencia (Reservado) - mira el archivo [LICENSE.md](LICENSE.md) para detalles

## Expresiones de Gratitud 🎁

* Este proyecto es toda una plataforma lista para subir a cualquier servidor 📢
* Se acepta una 🍺 . 
* Gracias a Christian Saravia por invitarme a participar en este proyecto 🤓.



---
⌨️ con ❤️ por [Buildawow](https://github.com/buildawow) 😊
