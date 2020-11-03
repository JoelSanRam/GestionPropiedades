<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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
}
