<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Viaje extends Model
{


	protected $table = 'viajes';
    protected $fillable = [
    	'id',
       	'fecha_salida',
       	'hora_salida',
       	'fecha_retorno',
       	'hora_retorno',
       	'porte_salida',
       	'porte_regreso',
       	'gastos_viaje',
       	'gastos_mercancia',
       	'pte_usa',
       	'presupuesto_caseta',
       	'transferencia',
       	'lav_caja',
       	'lav_camion',
       	'notificaciones_unidad',
       	'comision',
       	'id_camion',
       	'id_origen_salida',
       	'id_destino_salida',
       	'id_conductor'
    ];


    public function getCamion(){
        return $this->belongsTo('App\Models\Camion','id_camion','id');
    }

    public function getSalida(){
        return $this->belongsTo('App\Models\Lugar','id_origen_salidaid_','id');
    }

    public function getDestino(){
        return $this->belongsTo('App\Models\Lugar','id_destino_salida','id');
    }

    public function getCamion(){
        return $this->belongsTo('App\Models\Conductor','id_conductor','id');
    }


    public function getOtros(){
        return $this->hasMany('App\Models\Otros','id_viaje','id');
    }

    public function getCasetas(){
    	return $this->belongsToMany('App\Models\Caseta','id_caseta','id');
    }

    public function getValesDiesel(){
    	return $this->hasMany('App\Models\ValeDiesel','id_viaje','id');
    }

    public function getRefacciones(){
    	return $this->hasMany('App\Models\Refacciones','id_viaje','id');
    }

}
