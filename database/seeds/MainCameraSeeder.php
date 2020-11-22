<?php

use Illuminate\Database\Seeder;

class MainCameraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\MainCamera::class, 5)->create();
    }
}
