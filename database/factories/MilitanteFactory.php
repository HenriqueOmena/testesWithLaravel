<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Militante;
use Faker\Generator as Faker;

$factory->define(Militante::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'num_regional' => $faker->numberBetween(10000, 50000)
    ];
});
