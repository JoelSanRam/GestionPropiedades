<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propiedad extends Model
{
    protected $fillable = [
    	'propiedad_id', 
    	'origen_id', 'tipo', 
    	'granja', 
    	'estatus', 
    	'nombre_corto', 
    	'ultimo_movimiento', 
    	'fecha_alta', 
    	'observaciones', 
    	'propietario',
    	'entidad_federativa', 
    	'municipio',
    	'localidad', 
    	'folio_regpub', 
    	'folio_catastral'
    ];
}
