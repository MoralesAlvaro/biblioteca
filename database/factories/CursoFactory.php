<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Curso;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Curso::class, function (Faker $faker) {
    return [
        'titulo' => $faker->name,
        'codigo' => Str::random(10),
    ];
});
