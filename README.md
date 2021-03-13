# Biblioteca :page_facing_up:

# Tecnologias :rocket:

<code><img height="20" src="https://raw.githubusercontent.com/github/explore/80688e429a7d4ef2fca1e82350fe8e3517d3494d/topics/laravel/laravel.png"></code>
<code><img height="20" src="https://raw.githubusercontent.com/github/explore/80688e429a7d4ef2fca1e82350fe8e3517d3494d/topics/composer/composer.png"></code>
<code><img height="20" src="https://raw.githubusercontent.com/github/explore/80688e429a7d4ef2fca1e82350fe8e3517d3494d/topics/bootstrap/bootstrap.png"></code>

# Configuración del proyecto || Proceso de construcción :wrench:

Nota: Debes de tener instalado las siguientes herramientas o técnologias
a. Apache2 o Laravel Valet

b. Mysql (Puedes instalar el entorno que prefieras)

c. Editor de código (VScode, Atom, Brackets, Sublime, etc)

d. Composer (Gestor de paquetes o dependecias para PHP)

Pasos:

1. Instalar todas las dependecias

```
composer install
```

2. Crear base de datos
   Nota: Puedes crearla con el nombre que gustes, ese nombre se añadira en las variables de entorno, en el archivo .env(raiz del proyecto)
   ̣`.env.example`

```
APP_NAME=Laravel
APP_ENV=local #ENTORNO LOCAL
APP_KEY=base64:BRtuBK6oJj7XA9MrkFsVl6HezGdDo3OgRtCQZOmOKyE=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack

DB_CONNECTION=mysql #CONEXIÓN
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE= #NOMBRE BASE DE DATOS
DB_USERNAME= #NOMBRE DE USUARIO
DB_PASSWORD= #CONTRASEÑA

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
```

2.1 Generar key
```
php artisan key:generate
```

3. Luego de crear la base de datos, migramos los seeds a la base de datos

```
php artisan migrate:fresh --seed
```

4. Finalmente, levanta el servidor

```
php artisan serve
```


Por defecto, redirige a la siguiente url: `http://127.0.0.1:8000`

```
Nota: Credenciales para iniciar sessión : moralesalvaro308@gmail.com | 12345678
```

# Referencias: :memo:

Ver [Laravel](https://laravel.com).
Ver [Base de datos/Seeds](https://laravel.com/docs/8.x/seeding).
Ver [Composer](https://getcomposer.org/).
