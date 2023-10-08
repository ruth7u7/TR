<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViajeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viaje', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_cliente')->nullable()->references('id')->on('cliente');//CLAVE FORANEA
            $table->foreignId('id_fecha')->nullable()->references('id')->on('fecha');//CLAVE FORANEA
            $table->foreignId('id_sede')->nullable()->references('id')->on('sede');//CLAVE FORANEA
            $table->foreignId('id_bus')->nullable()->references('id')->on('bus');//CLAVE FORANEA
            $table->string('destino');
            $table->string('duracion_viaje');
            $table->double('costo');
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
        Schema::dropIfExists('viaje');
    }
}
