<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\MainCamera::class, function (Faker $faker) {
    return [
        'megapixels' => $faker->numberBetween(20, 50)
    ];
});
