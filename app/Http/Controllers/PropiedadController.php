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

class PropiedadController extends Controller
{
	public function listado()
	{
		$data = DB::table('propiedads')
                    ->join('datos', 'propiedads.propiedad_id', '=', 'datos.propiedad_id')
                    ->select('propiedads.*', 'datos.municipio', 'datos.localidad')
                    ->get();

		return view('propiedades.Listado', ['data' => $data]);
	}

    public function addpropiedad()
    {
        return view('propiedades.addPropiedad');
    }

    public function detalles($id)
    {
        $propiedad = Propiedad::find($id);
        $dato = Dato::where('propiedad_id', $propiedad->propiedad_id)->first();
        $dimencion = Dimencion::where('propiedad_id', $propiedad->propiedad_id)->first();
        $ubicacion = Ubicacion::where('propiedad_id', $propiedad->propiedad_id)->first();
        $valor = Valor::where('propiedad_id', $propiedad->propiedad_id)->first();
        $coor = Coordenada::where('propiedad_id', $propiedad->propiedad_id)->get();

    	return view('propiedades.detalles', [
                'propiedad' => $propiedad, 
                'dato' => $dato, 
                'dimencion' => $dimencion, 
                'ubicacion' => $ubicacion, 
                'valor' => $valor,
                'coor' => $coor,
            ]);
    }

    public function pdfIndividual($id)
    {
        $propiedad = Propiedad::find($id);
        $dato = Dato::where('propiedad_id', $propiedad->propiedad_id)->first();
        $dimencion = Dimencion::where('propiedad_id', $propiedad->propiedad_id)->first();
        $ubicacion = Ubicacion::where('propiedad_id', $propiedad->propiedad_id)->first();
        $valor = Valor::where('propiedad_id', $propiedad->propiedad_id)->first();

        $pdf = \PDF::loadView('reportes.individual', [
                'propiedad' => $propiedad, 
                'dato' => $dato, 
                'dimencion' => $dimencion, 
                'ubicacion' => $ubicacion, 
                'valor' => $valor
            ])->setPaper('a4', 'landscape');

        return $pdf->stream('propiedad-individual.pdf');
    }

    ///// Test de coordenadas /////

    public function coords()
    {
        $data = Coordenada::select('propiedad_id', 'lat', 'lng')->get();

        return view('home', compact('data'));

    }

}
