<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dato extends Model
{
    protected $fillable = [
    	'propiedad_id', 'entidad_federativa', 'municipio',
    	'localidad', 'folio_regpub', 'folio_catastral'
    ];
}
