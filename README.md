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

2. Crear base de datos Nota: Puedes crearla con el nombre que gustes, ese nombre se añadira en las variables de entorno.

3. Luego de crear la base de datos, migramos los seeds a la base de datos

```
php artisan migrate:fresh --seed
```

4. Finalmente, levanta el servidor

```
php artisan serve
```

Por defecto, redirige a la siguiente url: `http://127.0.0.1:8000`

# Referencias: :memo:

Ver [Laravel](https://laravel.com).
Ver [Base de datos/Seeds](https://laravel.com/docs/8.x/seeding).
Ver [Composer](https://getcomposer.org/).
