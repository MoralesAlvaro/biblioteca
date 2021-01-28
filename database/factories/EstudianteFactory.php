<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Estudiante;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Estudiante::class, function (Faker $faker) {
    return [
        'codigo_estudiante' => Str::random(10),
        'nombre' => $faker->name,
        'apellido' => $faker->lastName,
        'foto' => 'http://127.0.0.1:8000/img/user.png',
        'curso_id' => $faker->numberBetween($min = 1, $max = 10),
    ];
});
