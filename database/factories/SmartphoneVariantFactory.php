<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;

$factory->define(\App\SmartphoneVariant::class, function (Faker $faker) {
    return [
        'smartphone_id' => factory(\App\Smartphone::class)->create()->id,
        'color_id' => factory(\App\Color::class)->create()->id,
        'ram' => $faker->numberBetween(1,16),
        'price' => $faker->numberBetween(350,1200),
        'hardware_memory' => $faker->numberBetween(2,32),
        'battery' => $faker->numberBetween(1000,4200),
        'title_schema' => null,
    ];
});
