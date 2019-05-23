<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncidenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidencias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('causante_id')->unsigned();
            $table->integer('handling_id')->unsigned();
            $table->integer('usuario_id')->unsigned();
            $table->foreign('causante_id')->references('id')->on('causantes');
            $table->foreign('handling_id')->references('id')->on('handlings');
            $table->foreign('usuario_id')->references('id')->on('users');
            $table->string('fechaHoraInicio');
            $table->string('fechaHoraFin');
            $table->string('ubicacion');
            $table->string('compania');
            $table->string('handling');
            $table->string('tipoIncidencia');
            $table->string('causante');
            $table->string('tipoCausante');
            $table->integer('nTarjeta');
            $table->string('observaciones');
            $table->string('solucion');
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
        Schema::dropIfExists('incidencias');
    }
}
