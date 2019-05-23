<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCausantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('causantes', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('nombre');
            $table->enum('tipo',['hdw','sfw','usr']);
            $table->enum('estado',['e','d']);
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
        Schema::dropIfExists('causantes');
    }
}
