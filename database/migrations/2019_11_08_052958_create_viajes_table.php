<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viajes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha_salida');
            $table->time('hora_salida');
            $table->date('fecha_retorno');
            $table->time('hora_retorno');
            $table->double('porte_salida',9,2);
            $table->double('porte_regreso',9,2);
            $table->double('gastos_viaje',9,2);
            $table->double('gastos_mercancia',9,2);
            $table->double('pte_usa',9,2);
            $table->double('presupuesto_caseta',9,2);
            $table->double('transferencia',9,2);
            $table->double('lav_caja',9,2);
            $table->double('lav_camion',9,2);
            $table->text('notificaciones_unidad');
            $table->double('comision',9,2);
            $table->unsignedBigInteger('id_camion')->nullable();
            $table->unsignedBigInteger('id_origen_salida')->nullable();
            $table->unsignedBigInteger('id_destino_salida')->nullable();
            $table->unsignedBigInteger('id_conductor')->nullable();
            $table->timestamps();

            $table->foreign('id_camion')->references('id')->on('camiones')->onDelete('set null');
            $table->foreign('id_origen_salida')->references('id')->on('lugares')->onDelete('set null');
            $table->foreign('id_destino_salida')->references('id')->on('lugares')->onDelete('set null');
            $table->foreign('id_conductor')->references('id')->on('conductores')->onDelete('set null');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('viajes');
    }
}
