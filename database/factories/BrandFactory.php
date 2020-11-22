<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Brand::class, function (Faker $faker) {
    return [
        'title' => $faker->firstName('1')
    ];
});
