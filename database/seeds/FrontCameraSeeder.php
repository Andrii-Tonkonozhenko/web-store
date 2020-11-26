<?php

use Illuminate\Database\Seeder;

class FrontCameraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\FrontCamera::class, 5)->create();
    }
}
