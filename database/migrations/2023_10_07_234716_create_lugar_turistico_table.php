<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLugarTuristicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lugar_turistico', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable();
            $table->string('foto')->nullable();
            $table->string('descripcion')->nullable();
            $table->char('estado_registro')->default('A');
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
        Schema::dropIfExists('lugar_turisticos');
    }
}
