<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_viaje');
            $table->string('duracion_viaje');
            $table->string('modelo');
            $table->string('placa');
            $table->string('estado');
            $table->string('marca');
            $table->timestamps();

            //CLAVES FORANEAS
            $table->foreign('id_viaje')->references('id')->on('viaje');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bus');
    }
}
