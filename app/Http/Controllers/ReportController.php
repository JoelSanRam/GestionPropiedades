<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Dato;

class ReportController extends Controller
{
    public function search()
    {
        // primero consulta a la db sobre datos de las propedades
        $prodiedades = DB::table('propiedads')->where([
                        ['tipo', 'PREDIO URBANO'],
                        ['estatus', 'Vendido'],
                    ]);

        // unimos con un subJoin los datos similares
        $datos = DB::table('datos')
                    ->where('entidad_federativa', 'YUCATAN')
                    ->joinSub($prodiedades, 'prodiedades', function($join){ // consultamos los datos los ids de las tablas
                        $join->on('datos.propiedad_id', '=', 'prodiedades.propiedad_id');
                    })
                    ->join('dimencions', 'datos.propiedad_id', '=', 'dimencions.propiedad_id')
                    ->join('valors', 'datos.propiedad_id', '=', 'valors.propiedad_id')
                    ->select('datos.*', 'prodiedades.tipo', 'prodiedades.estatus', 'dimencions.superficie_terreno', 'valors.valor_comercial','valors.valor_catastral')
                    ->get();

        /*$datos = DB::table('datos')
                    //->where('entidad_federativa', 'QUINTANA ROO')
                    ->join('dimencions', 'datos.propiedad_id', '=', 'dimencions.propiedad_id')
                    ->join('valors', 'datos.propiedad_id', '=', 'valors.propiedad_id')
                    ->select('datos.*', 'dimencions.superficie_terreno', 'valors.valor_comercial','valors.valor_catastral')
                    ->get();*/

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

    /*public function report()
    {
        $datos = DB::table('datos')
                    //->where('entidad_federativa', 'QUINTANA ROO')
                    ->join('dimencions', 'datos.propiedad_id', '=', 'dimencions.propiedad_id')
                    ->join('valors', 'datos.propiedad_id', '=', 'valors.propiedad_id')
                    ->select('datos.*', 'dimencions.superficie_terreno', 'valors.valor_comercial','valors.valor_catastral')
                    ->get();

        return response()->json($datos);
    }*/
}
