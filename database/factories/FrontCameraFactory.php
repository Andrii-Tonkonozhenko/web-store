<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\FrontCamera::class, function (Faker $faker) {
    return [
        'megapixels' => $faker->numberBetween(5, 20)
    ];
});
