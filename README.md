# Antes de usar este control de APIs seguir los siguientes pasos

1.Una vez descargado el proyecto desde el repositorio ejecutar el siguiente comando en una terminal dentro del proyecto

composer install
cp .env.example .env
php artisan key:generate

2. Crear en en phpmyadmin una base de datos nueva por ejemplo "appbdd"
3. En el proyecto buscar el archivo ".env" y modificar el siguiente contenido de acuerdo a su conexion de base de datos

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE= appbdd
DB_USERNAME=root
DB_PASSWORD=

4. ejecutar los siguientes comandos

php artisan migrate
php artisan db:seed

# Para actualizaciones de version ejecutar las siguientes lineas de comandos
composer install
composer dump-autoload
php artisan migrate
php artisan migrate:refresh.... cuando da error duplicación de clave primaria(borra toda la información de la base de datos)
php artisan db:seed