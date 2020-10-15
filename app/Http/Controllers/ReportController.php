<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function report()
    {
    	$datos = DB::table('datos')
    				->where('entidad_federativa', 'QUINTANA ROO')
    				->join('dimencions', 'datos.propiedad_id', '=', 'dimencions.propiedad_id')
    				->join('valors', 'datos.propiedad_id', '=', 'valors.propiedad_id')
            		->select('datos.*', 'valors.valor_comercial', 'valors.valor_catastral', 'dimencions.superficie_terreno')
            		->get();

    	return response()->json($datos);
    }
}
