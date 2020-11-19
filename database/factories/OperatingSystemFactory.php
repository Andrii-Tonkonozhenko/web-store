<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\OperatingSystem;
use Faker\Generator as Faker;

$factory->define(OperatingSystem::class, function (Faker $faker) {
    return [
        'title' => $faker->firstName
    ];
});
