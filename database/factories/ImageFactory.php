<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Image;
use Faker\Generator as Faker;


$factory->define(Image::class, function (Faker $faker) {

    $test = ['iPhone_12.jpg', 'Realme_6_pro.jpg', 'samsung_s10.jpg', 'samsung_s20.jpg' , 'meizu_16.jpg'];

return [
        'src' => Arr::random($test),
        'alt' => $faker->title
    ];
});
