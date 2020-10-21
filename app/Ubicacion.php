<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    protected $fillable = [
    	'propiedad_id', 'ejido', 'parcela', 'solar', 'tablaje', 'finca', 'direccion', 'colonia', 'ejido_manzana', 'urbana_manzana', 'lote', 'codigo_postal'
    ];
}
