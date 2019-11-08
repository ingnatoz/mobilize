<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Refacciones extends Model
{
    protected $table = 'refacciones';
    protected $fillable = [
    	'id',
       	'monto',
       	'descripcion',
       	'id_viaje'
    ];


    public function getViaje(){
        return $this->belongsTo('App\Models\Viaje','id_viaje','id');
    }
}
