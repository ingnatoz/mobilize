<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateValeDieselsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vales_diesel', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('monto',9,2);
            $table->unsignedBigInteger('id_viaje');
            $table->timestamps();

            $table->foreign('id_viaje')->references('id')->on('viajes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vales_diesel');
    }
}
