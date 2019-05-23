<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTiposYCausantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiposyCausantes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipoCausante_id')->unsigned();
            $table->integer('causante_id')->unsigned();
            $table->string('nombreTipo');
            $table->string('nombreCausante');
            $table->foreign('tipoCausante_id')->references('id')->on('tiposCausantes');
            $table->foreign('causante_id')->references('id')->on('causantes');
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
        Schema::dropIfExists('tiposyCausantes');
    }
}
