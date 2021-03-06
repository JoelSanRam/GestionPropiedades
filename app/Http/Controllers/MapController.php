<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Coordenada;

class MapController extends Controller
{
    public function mapData()
    {
        $polygons = Coordenada::select('propiedad_id', 'lat', 'lng')->where('marcador', null)->get();

        $markers = DB::table('coordenadas')
                    ->where('marcador', 'si')
                    ->join('propiedads', 'coordenadas.propiedad_id', '=', 'propiedads.id')
                    ->select('coordenadas.propiedad_id', 'coordenadas.lat', 'coordenadas.lng', 'propiedads.nombre_corto')
                    ->get();

        $propietarios = DB::table('propiedads')->select('propietario')->distinct()->get();
        $status = DB::table('propiedads')->select('estatus')->distinct()->get();

        return view('mapa.map', compact('polygons', 'markers', 'propietarios', 'status'));
    }

    ///// filtrar poligono y marcadores en el mapa ////
    public function search(Request $request)
    {
        $granja = $request->get('granja');
        $propietario = $request->get('propietario');
        $estatus = $request->get('status');

        $polygons = DB::table('propiedads')
                    ->when($granja, function ($query, $granja) {
                        return $query->where('granja', $granja);
                    })
                    ->when($propietario, function ($query, $propietario) {
                        return $query->where('propietario', $propietario);
                    })
                    ->when($estatus, function ($query, $estatus) {
                        return $query->where('estatus', $estatus);
                    })
                    ->join('coordenadas', function ($join) {
                        $join->on('propiedads.id', '=', 'coordenadas.propiedad_id')
                            ->where('coordenadas.marcador', '=', null);
                    })
                    ->select('coordenadas.propiedad_id', 'coordenadas.lat', 'coordenadas.lng')
                    ->get();

        $markers = DB::table('propiedads')
                    ->when($granja, function ($query, $granja) {
                        return $query->where('granja', $granja);
                    })
                    ->when($propietario, function ($query, $propietario) {
                        return $query->where('propietario', $propietario);
                    })
                    ->when($estatus, function ($query, $estatus) {
                        return $query->where('estatus', $estatus);
                    })
                    ->join('coordenadas', function ($join) {
                        $join->on('propiedads.id', '=', 'coordenadas.propiedad_id')
                            ->where('coordenadas.marcador', '=', 'si');
                    })
                    ->select('coordenadas.propiedad_id', 'coordenadas.lat', 'coordenadas.lng', 'propiedads.nombre_corto')
                    ->get();

        $propietarios = DB::table('propiedads')->select('propietario')->distinct()->get();
        $status = DB::table('propiedads')->select('estatus')->distinct()->get();

        return view('mapa.map', compact('polygons', 'markers', 'propietarios', 'status'));
    }
}
