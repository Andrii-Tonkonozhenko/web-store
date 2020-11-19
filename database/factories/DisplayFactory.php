<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Display;
use Faker\Generator as Faker;

$factory->define(Display::class, function (Faker $faker) {
    return [
        'material' => $faker->firstName,
        'display_width' => $faker->numberBetween(500,1200),
        'display_height' => $faker->numberBetween(1000,2000),
        'diagonal' => $faker->numberBetween(10,20),
        'ghz' => $faker->numberBetween(10,20),
    ];
});
