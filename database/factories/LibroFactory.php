<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Libro;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Libro::class, function (Faker $faker) {
    return [
        'isbn' => Str::random(15),
        'titulo' => $faker->lastName,
        'autor' => $faker->name,
        'editorial' => $faker->name,
        'estado' => '1',
        'categoria_id' => $faker->numberBetween($min = 1, $max = 10),
        'curso_id' => $faker->numberBetween($min = 1, $max = 10),
    ];
});
