<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Display::class, function (Faker $faker) {
    return [
        'material' => $faker->firstName,
        'display_width' => $faker->numberBetween(100, 1000),
        'display_height' => $faker->numberBetween(100, 1000),
        'diagonal' => $faker->numberBetween(1, 6),
        'ghz' =>    $faker->numberBetween(1, 6)
    ];
});
