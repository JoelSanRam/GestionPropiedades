<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Valor extends Model
{
    protected $fillable = [
    	'valor_construccion', 
    	'valor_terreno', 
    	'valor_comercial', 
    	'fecha_valor_comercial', 
    	'valor_catastral', 
    	'fecha_valor_catastral'
    ];
}
