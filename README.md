<h1>PRUEBA TÉCNICA</h1>
prueba técnica para el almacenamiento de tareas.

<h2>Antes de empezar</h2>
debemos instalar: editor de texto (Ej: Visual Studio Code), servidor independiente (Ej: Xampp), Laravel y Composer.

<h2>Usando Git</h2>
El proyecto utiliza control de versiones git, para poder descargar el proyecto antes deberíamos instalar git en nuestro SO.

Lo primero que debemos hacer después de instalar git, es descargar el proyecto. Esto se puede hacer con los mismos comandos de git o lo podemos descargar a mano en el botón "Clone or Download".

Para hacerlo usando git, debemos abrir la consola y dirigirnos a la carpeta en donde queremos descargar el proyecto.
Luego, utilizaremos el comando:

git clone https://github.com/gastonFerre/pruebaTareas.git

una vez que tengamos el proyecto descargado debemos abrir XAMPP y darle "Start" a los módulos de Apache y MySql.
realizamos las migraciones de nuestra base de datos con el comando "php artisan migrate".
luego desde una terminal (Ej: Terminal integrada en tu editor de texto o de tu sistema operativo), utilizamos el comando "php artisan serve", para correr
nuestro proyecto.
Entramos al enlace de nuestro servidor local y tendremos nuestra página web. 
