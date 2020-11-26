<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propiedad extends Model
{
    protected $fillable = [
    	'origen_id', 
        'tipo', 
    	'granja', 
    	'estatus', 
    	'nombre_corto', 
    	'ultimo_movimiento',
    	'observaciones', 
    	'propietario',
    	'entidad_federativa', 
    	'municipio',
    	'localidad', 
    	'folio_regpub', 
    	'folio_catastral'
    ];
}
