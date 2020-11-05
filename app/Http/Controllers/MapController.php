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

        $markers = DB::table('markers')
                    ->join('propiedads', 'markers.propiedad_id', '=', 'propiedads.propiedad_id')
                    ->select('markers.propiedad_id', 'markers.lat', 'markers.lng', 'propiedads.nombre_corto')
                    ->get();

        return view('mapa.map', ['polygons' => $polygons, 'markers' => $markers]);
    }

    ///// filtrar poligono y marcadores en el mapa ////
    public function search(Request $request)
    {
        $tipo = $request->get('tipo');
        $entidad = $request->get('entidad');
        $status = $request->get('status');
        $option = $request->get('option');

        $polygons = DB::table('propiedads')
                    ->where([['tipo', $tipo], ['estatus', $status], ['entidad_federativa', $entidad]])
                    ->join('coordenadas', 'propiedads.propiedad_id', '=', 'coordenadas.propiedad_id')
                    ->select('coordenadas.propiedad_id', 'coordenadas.lat', 'coordenadas.lng')
                    ->get();

        $markers = DB::table('propiedads')
                    ->where([['tipo', $tipo], ['estatus', $status], ['entidad_federativa', $entidad]])
                    ->join('markers', 'propiedads.propiedad_id', '=', 'markers.propiedad_id')
                    ->select('markers.propiedad_id', 'markers.lat', 'markers.lng', 'propiedads.nombre_corto')
                    ->get();

        return view('mapa.map', ['polygons' => $polygons, 'markers' => $markers]);
    }
}
