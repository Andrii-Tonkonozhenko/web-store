<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmartphonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smartphones', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->text('description');
            $table->string('title_schema')->nullable();
            $table->bigInteger('operating_system_id');
            $table->bigInteger('display_id');
            $table->bigInteger('front_camera_id');
            $table->bigInteger('main_camera_id');
            $table->bigInteger('processor_id');
            $table->bigInteger('brand_id');
            $table->bigInteger('country_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('smartphones');
    }
}
