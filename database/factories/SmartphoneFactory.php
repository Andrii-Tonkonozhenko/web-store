<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Smartphone::class, function (Faker $faker) {
    return [
        'model' => $faker->firstName,
        'description' => $faker->sentence(25),
        'title_schema' => null,
        'operating_system_id' => factory(\App\OperatingSystem::class)->create()->id,
        'display_id' => factory(\App\Display::class)->create()->id,
        'front_camera_id' => factory(\App\FrontCamera::class)->create()->id,
        'main_camera_id' => factory(\App\MainCamera::class)->create()->id,
        'processor_id' => factory(\App\Processor::class)->create()->id,
        'brand_id' => factory(\App\Brand::class)->create()->id,
        'country_id' => factory(\App\Country::class)->create()->id,
    ];
});
