<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwners1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_owners1', function (Blueprint $table) {
            $table->id()-> primary() ;
            $table->timestamps();
            $table->string('email')->unique();
            $table->integer('phone');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('adress');
            $table->string('postalcode');
            $table->string('residence');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Owners');
    }
}
