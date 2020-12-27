<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmartphoneVariantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smartphone_variants', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('smartphone_id');
            $table->bigInteger('color_id');
            $table->integer('ram');
            $table->float('price');
            $table->integer('hardware_memory');
            $table->integer('battery');
            $table->string('title_schema')->nullable();
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
        Schema::dropIfExists('smartphone_variants');
    }
}
