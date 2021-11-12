<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelControlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel_controls', function (Blueprint $table) {
            $table->id();
            $table->string("place", 50);
            $table->string("country", 100);
            $table->text("description");
            $table->smallInteger("price")->unsigned();
            $table->text("image_url");
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
        Schema::dropIfExists('travel_controls');
    }
}
