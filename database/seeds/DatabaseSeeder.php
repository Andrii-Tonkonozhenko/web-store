<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *     * @return void
     */
    public function run()
    {
         $this->call([
             BrandSeeder::class,
             ColorSeeder::class,
             CountrySeeder::class,
             DisplaySeeder::class,
             FrontCameraSeeder::class,
             MainCameraSeeder::class,
             OperatingSystemSeeder::class,
             ProcessorSeeder::class,
         ]);
    }
}
