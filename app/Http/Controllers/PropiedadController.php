<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function detalle()
    {
    	return view('propiedades.detalle');
    }
}
