<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Processor::class, function (Faker $faker) {
    return [
        'title' => $faker->firstName,
        'core_amount' => $faker->numberBetween(1,5),
        'ghz' => $faker->numberBetween(1,5)
    ];
});
