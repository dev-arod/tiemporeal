![Real time App](https://r2dev-consulting.tech/gallery/image.php?twg_album=&twg_type=small&twg_show=realtime_logo.jpg&twg_rot=-1)
<hr>

<h3> Esta es una aplicación para administrar datos en tiempo real en una aplicación Laravel V8 usando Pusher, Echo y Alpine JS. Es una aplicación sencilla de tareas pendientes que muestra los cambios de datos en todos los dispositivos conectados.</h3>

![Badge en Desarollo](https://img.shields.io/badge/STATUS-COMPLETADO-green)
![GitHub](https://img.shields.io/github/languages/code-size/dev-arod/tiemporeal)
![GitHub](https://img.shields.io/github/last-commit/dev-arod/tiemporeal)
![GitHub](https://img.shields.io/github/downloads/dev-arod/tiemporeal/total?style=plastic)
![Badge Main Framework](https://img.shields.io/badge/Main%20Framework-Laravel%20-orange)

## Instalación y uso

* Descarga o clona el proyecto.
* Dentro del proyecto:
    - composer install
    - npm install
    - npm run dev

* Crea el archivo .env y coloca los valores de tu Base de datos, usuario y contraseña.
* En este punto, se recomienda ver la primera parte del video para instalar y configurar Pusher.
* Ejecuta las migraciones:
    - php artisan migrate
* Corre el servidor o, si usas Laragon o Wamp, dirigete al host.

Las rutas son:
* http://tiemporeal.test/task/create    -> Para crear nuevas tareas
* http://tiemporeal.test/task           -> Para mostrar todas las tareas, actualizadas en tiempo real
    
Se recomienda tener abiertas las rutas al mismo tiempo para mostrar la ejecución en tiempo real.

## Creación del proyecto desde cero :sparkling_heart:

En el siguiente video se te indica como llevar a cabo el proyecto de inicio a fin. O puedes usarlo solo para configurar Pusher.

[![r2dev Tutorial](https://r2dev-consulting.tech/gallery/image.php?twg_album=&twg_type=small&twg_show=real-time-laravel-with-socket-io-1.jpg&twg_rot=-1)](https://cdrive.page.link/h4ZzJ4YcMCVHLo2p9)

## Tecnología utilizadas

* Laravel
* Pusher
* Echo
* Alpine
* Axios

