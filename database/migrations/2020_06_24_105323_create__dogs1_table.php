<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDogs1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_dogs1', function (Blueprint $table) {
            $table->id();
            $table->foreign('_owners1_id')->references('id')->on('_owners1');
            $table->timestamps();
            $table->string('name');
            $table->string('description');
            $table->string('owner');
            $table->string('race');
            $table->integer('age');
            $table->string('allergies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_dogs1');
    }
}
