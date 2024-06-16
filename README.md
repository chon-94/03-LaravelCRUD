# 03-LaravelCRUD
 crud

# Instalar 

## antes del proyecto:


### composer
 Composer es una herramienta que facilita la gestion 
 de las depencias en proyectos PHP.

       sudo pacman -S composer

### node
 Es un gestor de paquetes que ayuda a compartir y reutilizar codigo 
 tambien puede automatizar tareas comunes de desarrollo.

       sudo pacman -S npm
 
### mysql
 bueno usaremos mariadb y punto... creo que es la parte as "dificil"
 debemos de instalar y configurar la base de datos mariadb y el proyecto
 en *.env* ademas deporque no haceralgunos otrs asjustos cuando 
 es la primera vez que lo haces

       sudo pacman -S mariadb


 Inicia y habilita el servicio de MariaDB para que se inicie automáticamente
 al arrancar el sistema:

       sudo systemctl start mysqld
       sudo systemctl enable mysqld


 MariaDB incluye un script para mejorar la seguridad predeterminada de la instalación. 
 Durante este proceso, se te pedirá que configures una contraseña para el usuario root de MariaDB,
 elimines usuarios anónimos, deshabilites el inicio de sesión remoto root y elimines la base de datos de prueba.

       sudo mysql_secure_installation


 Ahora necesitamos crear una base de datos para eso debemos ingresar con root y usar la clave que elegimos

       sudo mysql -u root -p

       CREATE DATABASE nombre_de_tu_base_de_datos;

       CREATE USER 'nombre_usuario'@'localhost' IDENTIFIED BY 'contraseña';
       GRANT ALL PRIVILEGES ON nombre_de_tu_base_de_datos.* TO 'nombre_usuario'@'localhost';
       FLUSH PRIVILEGES;
       

 Ahora si es posible que tengamos mas errores jeje pues lo que tenemos que hacer es lo siguiente       

        sudo nano /etc/php/php.ini

        extension=mysqli
        extension=pdo_mysql

        sudo systemctl restart httpd


 de aca ya podemos programar y para ello  debemos de continuar con el proyecto 
 en el archivo ,env debemos de  configurar 

        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=
        DB_USERNAME=
        DB_PASSWORD=




## Durante

       composer create-project --prefer-dist laravel/laravel proyecto-0 "10.*"

       composer require laravel/breeze --dev
     
       php artisan breeze:install -h

       php artisan breeze:install blade --dark

## Proyecto






