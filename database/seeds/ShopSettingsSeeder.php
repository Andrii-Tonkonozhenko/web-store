<?php

use Illuminate\Database\Seeder;
use App\ShopSettings;

class ShopSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ShopSettings::create([
           'key' => 'global_smartphone_title_schema',
           'value' => 'Smartphone {brand} {ram}/{hardwareMemory}Gb {color}',
        ]);
    }
}
