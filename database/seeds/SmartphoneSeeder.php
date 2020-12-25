<?php

use Illuminate\Database\Seeder;

class SmartphoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Smartphone::class, 5)->create();
    }
}
