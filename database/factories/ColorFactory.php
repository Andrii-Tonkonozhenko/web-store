<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Color::class, function (Faker $faker) {
    return [
        'title' => $faker->colorName
    ];
});
