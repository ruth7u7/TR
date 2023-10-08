<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCiudadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciudad', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_lugar_turistico');
            $table->unsignedBigInteger('id_sede');
            $table->string('nombre');
            $table->timestamps();

            //CLAVES FORANEAS
            $table->foreign('id_lugar_turistico')->references('id')->on('lugar_turistico');
            $table->foreign('id_sede')->references('id')->on('sede');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ciudad');
    }
}
