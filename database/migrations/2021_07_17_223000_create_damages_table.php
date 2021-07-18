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

            $table->integer('part_id')->unsigned()->nullable();
            $table->foreign('part_id')->references('id')->on("parts")->onDelete("cascade");

            $table->integer('type_id')->unsigned()->nullable();
            $table->foreign('type_id')->references('id')->on("types")->onDelete("cascade");

            $table->integer('number_id')->unsigned()->nullable();
            $table->foreign('number_id')->references('id')->on("numbers")->onDelete("cascade");

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
