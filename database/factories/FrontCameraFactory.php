<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\FrontCamera;
use Faker\Generator as Faker;

$factory->define(FrontCamera::class, function (Faker $faker) {
    return [
        'megapixels' => $faker->numberBetween(5,15)
    ];
});
