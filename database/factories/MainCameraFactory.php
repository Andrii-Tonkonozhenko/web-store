<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\MainCamera;
use Faker\Generator as Faker;

$factory->define(MainCamera::class, function (Faker $faker) {
    return [
        'megapixels' => $faker->numberBetween(10,40)
    ];
});
