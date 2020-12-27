<?php

use Illuminate\Database\Seeder;

class ShopSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\ShopSettings::class, 1)->create();
    }
}
