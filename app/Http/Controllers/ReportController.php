<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Dato;

class ReportController extends Controller
{
    public function report()
    {
    	$datos = DB::table('datos')
    				//->where('entidad_federativa', 'QUINTANA ROO')
    				->join('dimencions', 'datos.propiedad_id', '=', 'dimencions.propiedad_id')
    				->join('valors', 'datos.propiedad_id', '=', 'valors.propiedad_id')
            		->select('datos.*', 'dimencions.superficie_terreno', 'valors.valor_comercial','valors.valor_catastral')
            		->get();

    	return response()->json($datos);
    }

    public function pdf()
    {
        $datos = DB::table('datos')
                    ->join('dimencions', 'datos.propiedad_id', '=', 'dimencions.propiedad_id')
                    ->join('valors', 'datos.propiedad_id', '=', 'valors.propiedad_id')
                    ->select('datos.*', 'dimencions.superficie_terreno', 'valors.valor_comercial','valors.valor_catastral')
                    ->get();

        $pdf =   \PDF::loadView('reportes.pdf', ['data' => $datos])->setPaper('a4', 'landscape');

        return $pdf->stream('propiedades.pdf');
        //return response()->json($datos);
    }
}
