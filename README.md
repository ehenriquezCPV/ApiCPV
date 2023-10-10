1) Clonar repositorio

2) Instalar paquetes
- composer install

3) Base de datos

- crear archivo  .env duplicando el archivo .env.example


- crear una base de datos 

- modificar archivo .env ingresando las credenciales

DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=

- Migrar tablas
php artisan migrate

- Instalar Passport
php artisan passport:install

- generar key laravel
php artisan key:generate

4) crear usuario con tinker
- php artisan tinker

$user = new App\Models\User;
$user->name = 'erwin';
$user->email = 'ehenriquez@clinicapv.cl';
$user->password = Hash::make('ehenriquez@clinicapv.cl');
$user->save();

5) login

- instalar postman 
- levantar servidor
php artisan serve
- probar link mediante post http://localhost:8000/api/authv2/login,  en la pestaña body, seleccionar form-data y agregar estas 2 keys
key       value
email     ehenriquez@clinicapv.cl
password  ehenriquez@clinicapv.cl

copiar token de autenticación generado

- probar link de test mediante get http://localhost:8000/api/authv2/test en la pestaña autorization se debe agregar el bearer token generado y enviar la petición 

la respuesta correcta será 

{"codrespuesta":"201","mensaje":"asdf","respuesta":"Recepción de mensaje correcto"}