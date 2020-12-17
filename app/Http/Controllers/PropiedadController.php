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
use App\File;

class PropiedadController extends Controller
{
	public function listado()
	{
		$data = Propiedad::all();

		return view('propiedades.Listado', ['data' => $data]);
	}

    public function detalles($id)
    {
        $propiedad = Propiedad::find($id);
        $dimencion = Dimencion::find($id);
        $ubicacion = Ubicacion::find($id);
        $valor = Valor::find($id);
        $marker = Coordenada::where([['propiedad_id', $id], ['marcador', 'si']])->first();
        $polygon = Coordenada::where([['propiedad_id', $id], ['marcador', null]])->get();
        $archivo = File::where('propiedad_id', $id)->first();

    	return view('propiedades.detalles', [
                'propiedad' => $propiedad, 
                'dimencion' => $dimencion, 
                'ubicacion' => $ubicacion, 
                'valor' => $valor,
                'polygon' => $polygon,
                'marker' => $marker,
                'archivo' => $archivo,
            ]);
    }
    
}
