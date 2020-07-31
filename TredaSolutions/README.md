<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
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

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

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
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).






## Instalación

Programas requeridos para el funcionamiento adecuado del sistema:
- **XAMPP**: Servidor local que contiene PHP en su versión 7.4.8 y MariaDB como base de datos. Se puede descargar a través del siguiente enlace [XAMPP](https://www.apachefriends.org/es/download.html)
- **Composer**: Gestor de dependencias para PHP. Se puede descargar a través del siguiente enlace [Composer](https://getcomposer.org/download/)

**Pasos para ejecutarlo**

1. Descargar o clonar el proyecto en tu computadora:
    Puedes hacer uso de herramientas de git tal como Git Bash para clonar el proyecto o descargarlo como ZIP desde principal de este [proyecto](https://github.com/ISwMF/TredaSolutionsProject/tree/frontend)
2. Ir a la ruta del proyecto de tu computador:
    Usando el ambiente de comandos de tu sistema operativo (como CMD en Windows o el shell en Linux) deberás ubicarte en la ruta donde esté el proyecto.
3. Instalar composer en el proyecto:
    Cuando ya estes en la ruta del proyecto, escribe el comando "composer install" sin comillas y tras presionar enter, deberás esperar a que se installe Composer.
4. Crear una base de datos para el proyecto:
    Deberás iniciar los servicios de base de datos MySQL y Apache haciendo uso de XAMPP. Una vez iniciados deberás ir al enlace http://localhost/phpmyadmin donde se mostrarán las bases de datos que posees y una vez allí crearás una con el nombre que quieras, en mi caso la nombré "tredasolutions" sin comillas.
5. Editar el archivo .env.example y otros archivos:
    Volviendo al proyecto, dentro de el encontrarás un archivo llamado .env.example, modifica su nombre para que solo quede .env, recomiendo hacer una copia de este archivo llamada .env.example.
    
    Abre el archivo .env con un editor de texto y allí encontrarás diferentes variables del sistema de las cuales nos enfocaremos en tres, DB_DATABASE, DB_USERNAME, DB_PASSWORD.
   
   En la primera coloca el nombre de la base de datos que se le dio en el cuarto punto de esta guía.
   
   En la segunda y tercera coloca las credenciales para acceder a phpmyadmin, que si no las has modificado serán "root" y "" que son las credenciales por defecto.
   
   De esta manera estas tres lineas serían:
   
   DB_DATABASE=tredasolutionsaux
   
   DB_USERNAME=root
   
   DB_PASSWORD=
   
   Luego hay que modificar el archivo database.php ubicado en TredaSolutions/config/database.php, allí se encontrarán varios tipos de conexiones. Ubica la que estes usando (en mi caso MySQL) y modifica los campos 'database', 'username' y 'password'.

6. Escribe los siguientes comandos en el entorno de comandos para configurar el proyecto:
    - php artisan key:generate
    - php artisan migrate

7. Rellenar la base de datos: 
    En este enlace encontrarás un archivo SQL en Google Drive el cual deberás descargar e importar en la base de datos [Arhivo SQL](https://drive.google.com/file/d/1wdZrY0mLnN75nhpkTIChVQ-9O2SGUpTG/view?usp=sharing)

8.Inicia el proyecto con el comando "php artisan serve" sin comillas y verifica todas sus funcionalidades a través de la página http://localhost:8000/home
