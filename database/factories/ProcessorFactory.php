<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Processor;
use Faker\Generator as Faker;

$factory->define(Processor::class, function (Faker $faker) {
    return [
        'title' => $faker->firstName,
        'core_amount' => $faker->numberBetween(1,10),
        'ghz' => $faker->numberBetween(1,10)
    ];
});
