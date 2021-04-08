<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Dato;
use App\Dimencion;
use App\Propiedad;
use App\Ubicacion;
use App\Valor;
use App\SeguimientoValor;
use App\Coordenada;
use App\File;
use App\Image;

class PropiedadController extends Controller
{
	public function listado()
	{
		$data = DB::table('propiedads')
                    ->join('ubicacions', 'propiedads.id', '=', 'ubicacions.id')
                    ->select('propiedads.*', 'ubicacions.*')
                    ->get();

		return view('propiedades.Listado', ['data' => $data]);
	}

    public function detalles($id)
    {
        $propiedad = Propiedad::find($id);
        $dimencion = Dimencion::find($id);
        $ubicacion = Ubicacion::find($id);
        $valor = Valor::find($id);
        $seguimiento = SeguimientoValor::where('propiedad_id', $id)->first();
        $marker = Coordenada::where([['propiedad_id', $id], ['marcador', 'si']])->first();
        $polygon = Coordenada::where([['propiedad_id', $id], ['marcador', null]])->get();
        $archivo = File::where('propiedad_id', $id)->first();
        $images = Image::where('propiedad_id', $id)->get();

    	return view('propiedades.detalles', [
                'propiedad' => $propiedad, 
                'dimencion' => $dimencion, 
                'ubicacion' => $ubicacion, 
                'valor' => $valor,
                'seguimiento' => $seguimiento,
                'polygon' => $polygon,
                'marker' => $marker,
                'archivo' => $archivo,
                'images' => $images
            ]);
    }
    
}
