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
            $table->integer('cars_id')->unsigned();
            $table->foreign('cars_id')->references('id')->on("cars")->onDelete("cascade");
            $table->integer('damage_type');

            $table->integer('body_part')->unsigned()->nullable();
            $table->foreign('body_part')->references('id')->on("body_parts")->onDelete("cascade");

            $table->integer('hole_type')->unsigned()->nullable();
            $table->foreign('hole_type')->references('id')->on("hole_types")->onDelete("cascade");

            $table->integer('hole_number')->unsigned()->nullable();
            $table->foreign('hole_number')->references('id')->on("hole_numbers")->onDelete("cascade");

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
