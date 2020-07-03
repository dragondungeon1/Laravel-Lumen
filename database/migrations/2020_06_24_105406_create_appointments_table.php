<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dogs_id');
            $table->unsignedBigInteger('walkers_id');
            $table->foreign('dogs_id')->references('id')->on('dogs');
            $table->foreign('walkers_id')->references('id')->on('walkers');
            $table->timestamps();
            $table->dateTime('startdate');
            $table->dateTime('enddate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointment');
    }
}
