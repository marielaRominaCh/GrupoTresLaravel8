<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscripcionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripciones', function (Blueprint $table) {

            $table->increments('idInscripcion');

            $table->unsignedInteger('idBusqueda');
            $table->foreign('idBusqueda')->references('idBusqueda')->on('busquedas');

            $table->date('fecha');
            $table->string('apellido');
            $table->string('nombre');
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
        Schema::dropIfExists('inscripciones');
    }
}
