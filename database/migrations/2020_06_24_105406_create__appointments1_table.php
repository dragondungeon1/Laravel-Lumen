<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointments1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_appointments1', function (Blueprint $table) {
            $table->id();
            $table->foreign('_dogs1_id')->references('id')->on('_dogs1');
            $table->foreign('_walkers1_id')->references('id')->on('_walkers1');
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
