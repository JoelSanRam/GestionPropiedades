<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    protected $fillable = [
    	'ejido', 
    	'parcela',
        'lote', 
    	'solar', 
    	'tablaje', 
    	'finca', 
    	'direccion',
    	'ejido_manzana',
    	'codigo_postal'
    ];
}
