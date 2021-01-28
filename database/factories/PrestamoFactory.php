<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Prestamo;
use Faker\Generator as Faker;

$factory->define(Prestamo::class, function (Faker $faker) {
    return [
        'estudiante_id' => $faker->numberBetween($min = 1, $max = 15),
        'libro_id' => $faker->numberBetween($min = 1, $max = 15),
        'comentario' => $faker->text(),
    ];
});
