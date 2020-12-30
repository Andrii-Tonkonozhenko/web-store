<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Image;
use App\SmartphoneVariantImageMap;
use Faker\Generator as Faker;

$factory->define(SmartphoneVariantImageMap::class, function (Faker $faker) {
    return [
        'image_id' => factory(Image::class)->create()->id,
    ];
});
