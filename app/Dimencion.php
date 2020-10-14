<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dimencion extends Model
{
    protected $fillable = [
    	'propiedad_id', 'superficie_construccion', 'superficie_terreno', 'frente', 'fondo', 'capacidad_granja',
    ];
}
