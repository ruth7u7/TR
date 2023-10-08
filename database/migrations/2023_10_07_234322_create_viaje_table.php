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
            $table->unsignedBigInteger('id_fecha');
            $table->unsignedBigInteger('id_sede');
            $table->string('numero_trabajadores');
            $table->unsignedBigInteger('id_bus');
            $table->double('costo');
            $table->timestamps();

            //CLAVES FORANEAS
            $table->foreign('id_fecha')->references('id')->on('fecha');
            $table->foreign('id_sede')->references('id')->on('sede');
            $table->foreign('id_bus')->references('id')->on('bus');
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
