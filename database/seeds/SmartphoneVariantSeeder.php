<?php

use Illuminate\Database\Seeder;

class SmartphoneVariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\SmartphoneVariant::class, 5)->create();
    }
}
