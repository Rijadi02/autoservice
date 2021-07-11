<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('license');
            $table->integer('chassis');
            $table->integer('body_type');
            $table->integer('brand');
            $table->integer('model');
            $table->string('color');
            $table->integer('year')->nullable();
            $table->string('fuel')->nullable();
            $table->float('weight')->nullable();
            $table->integer('client_id')->unsigned();
            $table->foreign('client_id')->references('id')->on("clients")->onDelete("cascade");

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
        Schema::dropIfExists('cars');
    }
}
