<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDamagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('damages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('car_id')->unsigned();
            $table->foreign('car_id')->references('id')->on("cars")->onDelete("cascade");
            $table->integer('damage_type');
            $table->integer('body_part')->nullable();
            $table->integer('hole_type')->nullable();
            $table->integer('hole_number')->nullable();
            $table->integer('hail_damage')->nullable();
            $table->integer('parking_damage')->nullable();
            $table->integer('disassambly')->nullable();


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
        Schema::dropIfExists('damages');
    }
}
