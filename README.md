# Bookstore
Este e-commerce fue creado por Abraham Bartoloni y Ezequiel Arevalo para la materia Portales y comercio electronico, en la cual se utilizaron las tecnologias: PHP con su Framework Laravel, CSS, JavaScript y Bootstrap 5.
# Instalacion:
## Para poner en marcha este proyecto en tu máquina local, sigue estos pasos:
1. Clona el repositorio: git clone [https://github.com/Bartoloni00/bookstore.git]
2. Navega hasta el directorio del proyecto: 
``` Bash
cd bookstore
``` 
3. Instala todas las dependencias del proyecto (requiere tener instalado composer): 
``` Bash
composer install
```
4. Corre las migraciones y los seeders, generando la base de datos y cargando algunos datos: 
``` Bash
php artisan migrate
```
``` Bash
php artisan migrate:refresh --seed
```
5. es muy importante tener el archivo [.env] con sus credenciales (el archivo [.env.example]) posee algunos ejemplos, Para generar la APP_KEY utiliza: php artisan key:generate
6. Para permitir que el proyecto modifique las imagenes que se cargan al mismo en localhost debemos ir al archivo de [xampp/php/php.ini] aproximadamente en la linea: 930 encontraremos esto:
```
;extension=gd
```
7. Linkeamos el almacenamiento de imagenes:
``` Bash
php artisan storage:link
```
debemos eliminar el punto y coma (;) para que intervention/image pueda manipular las imagenes.
7. _Inicia un servidor de desarrollo PHP local_ o usa el servidor web que prefieras.

# ¿que se utiliza para el manejo de Emails?
usamos: [https://mailtrap.io/] una web que sirve como interceptor de nuestros emails y revisarlos desde ahi
tambien para verificar la compatibilidad de todos los elementos de los emails se puede utilizar [https://caniemail.com/]

# ¿Como se manejan los pagos en el sitio?
Para aceptar los pagos utilizamos checkout Pro de Mercado pago [https://www.mercadopago.com.ar/developers/es/docs/checkout-pro/landing] en su ultima version 3.0.0 para ello necesito la ultima version de xampp o equivalente ya que el mismo esta ligado a la version de PHP.


# Readme de laravel:
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
