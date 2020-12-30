<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Color;
use App\Smartphone;
use App\SmartphoneVariant;
use Faker\Generator as Faker;

$factory->define(SmartphoneVariant::class, function (Faker $faker) {
    return [
        'smartphone_id' => factory(Smartphone::class)->create()->id,
        'color_id' => factory(Color::class)->create()->id,
        'ram' => $faker->numberBetween(1,16),
        'price' => $faker->numberBetween(350,1200),
        'hardware_memory' => $faker->numberBetween(2,32),
        'battery' => $faker->numberBetween(1000,4200),
        'title_schema' => null,
    ];
});

$factory->afterCreating(SmartphoneVariant::class, function ($smartphoneVariant, $faker) {

    factory(App\SmartphoneVariantImageMap::class)->create([
        'type' => 'main',
        'smartphone_variant_id' => $smartphoneVariant->id,
    ]);

    factory(App\SmartphoneVariantImageMap::class, 3)->create([
        'type' => 'minor',
        'smartphone_variant_id' => $smartphoneVariant->id,
    ]);
});
