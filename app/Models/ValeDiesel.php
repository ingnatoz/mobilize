<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ValeDiesel extends Model
{
    protected $table = 'vales_diesel';
    protected $fillable = [
    	'id',
       	'monto',
       	'id_viaje'
    ];


    public function getViaje(){
        return $this->belongsTo('App\Models\Viaje','id_viaje','id');
    }
}
