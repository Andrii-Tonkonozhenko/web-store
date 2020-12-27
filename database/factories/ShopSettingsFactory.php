<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\ShopSettings::class, function (Faker $faker) {
    return [
        'key' => 'global_smartphone_title_schema',
        'value' => 'Smartphone {brand} {ram}/{hardwareMemory}Gb {color}'
    ];
});
