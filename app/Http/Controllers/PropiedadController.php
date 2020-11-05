<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Dato;
use App\Dimencion;
use App\Propiedad;
use App\Ubicacion;
use App\Valor;
use App\Coordenada;
use App\Marker;

class PropiedadController extends Controller
{
	public function listado()
	{
		$data = Propiedad::all();

		return view('propiedades.Listado', ['data' => $data]);
	}

    public function detalles($id)
    {
        $propiedad = Propiedad::where('propiedad_id', $id)->first();
        $dimencion = Dimencion::where('propiedad_id', $id)->first();
        $ubicacion = Ubicacion::where('propiedad_id', $id)->first();
        $valor = Valor::where('propiedad_id', $id)->first();
        $marker = Marker::where('propiedad_id', $id)->first();
        $polygon = Coordenada::where('propiedad_id', $id)->get();

    	return view('propiedades.detalles', [
                'propiedad' => $propiedad, 
                'dimencion' => $dimencion, 
                'ubicacion' => $ubicacion, 
                'valor' => $valor,
                'marker' => $marker,
                'polygon' => $polygon,
            ]);
    }
    
}
