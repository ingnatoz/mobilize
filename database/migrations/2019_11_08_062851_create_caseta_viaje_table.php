<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasetaViajeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caseta_viaje', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_caseta');
            $table->unsignedBigInteger('id_viaje');
            $table->timestamps();

            $table->foreign('id_viaje')->references('id')->on('viajes')->onDelete('cascade');
            $table->foreign('id_caseta')->references('id')->on('casetas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('caseta_viaje');
    }
}
