<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dimencion extends Model
{
    protected $fillable = [
    	'superficie_construccion', 'superficie_terreno', 'frente', 'fondo', 'capacidad_granja',
    ];
}
