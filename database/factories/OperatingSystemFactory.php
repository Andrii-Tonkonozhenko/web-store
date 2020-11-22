<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\OperatingSystem::class, function (Faker $faker) {
    return [
        'title' => $faker->firstName
    ];
});
