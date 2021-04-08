<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeguimientoValor extends Model
{
    protected $fillable = [
    	'propiedad_id',
    	'avaluo_terreno',
    	'estimacion_valor_construccion', 
    	'avaluo_construccion', 
    	'valor_conjunto'
    ];
}
