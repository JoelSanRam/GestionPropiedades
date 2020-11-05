<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Coordenada;
use App\Marker;

class MapController extends Controller
{
    public function mapData()
    {
        $polygons = Coordenada::select('propiedad_id', 'lat', 'lng')->get();
        $markers = Marker::select('propiedad_id', 'lat', 'lng')->get();

        return view('mapa.map', ['polygons' => $polygons, 'markers' => $markers]);
    }

    ///// filtrar poligono y marcadores en el mapa ////
    public function search(Request $request)
    {
        $tipo = $request->get('tipo');
        $entidad = $request->get('entidad');
        $status = $request->get('status');
        $option = $request->get('option');

        // primero consulta a la db sobre datos de las propedades
        $prodiedades = DB::table('propiedads')->where([['tipo', $tipo], ['estatus', $status]])->get();

        // unimos con un subJoin los datos similares
        /*$datos = DB::table('datos')
                    ->where('entidad_federativa', $entidad)
                    // ->joinSub($prodiedades, 'prodiedades', function($join){ // consultamos los datos los ids de las tablas
                    //     $join->on('datos.propiedad_id', '=', 'prodiedades.propiedad_id');
                    // })
                    ->join('coordenadas', 'datos.propiedad_id', '=', 'coordenadas.propiedad_id')
                    ->select('datos.*', 'prodiedades.tipo', 'prodiedades.estatus', 'coordenadas.lat', 'coordenadas.lng')
                    ->get();*/

        $polygons = DB::table('propiedads')
                        ->where([['tipo', $tipo], ['estatus', $status]])
                        ->join('coordenadas', 'propiedads.propiedad_id', '=', 'coordenadas.propiedad_id')
                        ->select('coordenadas.propiedad_id', 'coordenadas.lat', 'coordenadas.lng')
                        ->get();

        return response()->json($polygons);
        //return view('reportes.reporte', compact('datos'));

    }
}
