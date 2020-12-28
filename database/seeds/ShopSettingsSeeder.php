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
        \App\ShopSettings::create([
           'key' => 'global_smartphone_title_schema',
           'value' => 'Smartphone {brand} {ram}/{hardwareMemory}Gb {color}',
        ]);
    }
}
