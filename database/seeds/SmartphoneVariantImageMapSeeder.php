<?php

use Illuminate\Database\Seeder;
use App\SmartphoneVariantImageMap;

class SmartphoneVariantImageMapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(SmartphoneVariantImageMap::class, 5)->create();
    }
}
