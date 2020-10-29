<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Dato;
use App\Dimencion;
use App\Propiedad;
use App\Ubicacion;
use App\Valor;
use App\Coordenada;

class ChangesController extends Controller
{
	////// Redirect Form View ////
    public function updateViewDato($id){ $item = Dato::find($id); return view('forms.update.dato', compact('item')); }
    public function updateViewDimencion($id){ $item = Dimencion::find($id); return view('forms.update.dimencion', compact('item')); }
    public function updateViewPropiedad($id){ $item = Propiedad::find($id); return view('forms.update.propiedad', compact('item')); }
    public function updateViewUbicacion($id){ $item = Ubicacion::find($id); return view('forms.update.ubicacion', compact('item')); }
    public function updateViewValor($id){ $item = Valor::find($id); return view('forms.update.valor', compact('item')); }

    public function updateViewCoordenada($id)
    {
        //$coor = Coordenada::find($id);
        $data = Coordenada::where('propiedad_id', $id)->get();
        return view('forms.update.coordenada', compact('data')); 
    }

    ////// Action Form ////

    public function updateDato(Request $request, $id)
    {
        // $this->validate($request, [
        //     'name' => 'required|string',
        //     'phone' => 'required|numeric',
        //     'email' => 'required|string',
        // ]);

        $dato = Dato::find($id);
        // $dato->propiedad_id = $request->propiedad_id;
        $dato->entidad_federativa = $request->entidad_federativa; 
        $dato->municipio = $request->municipio; 
        $dato->localidad = $request->localidad; 
        $dato->folio_regpub = $request->folio_regpub; 
        $dato->folio_catastral = $request->folio_catastral;
        $dato->save();

        return redirect()->route('listado');
    }

    public function updateDimencion(Request $request, $id)
    {
    	$dimencion = Dimencion::find($id);
    	// $dimencion->propiedad_id = $request->propiedad_id;
    	$dimencion->superficie_construccion = $request->superficie_construccion;
    	$dimencion->superficie_terreno = $request->superficie_terreno;
    	$dimencion->frente = $request->frente;
    	$dimencion->fondo = $request->fondo;
    	$dimencion->capacidad_granja = $request->capacidad_granja;
    	$dimencion->save();

        return redirect()->route('listado');
    }

    public function updatePropiedad(Request $request, $id)
    {
    	$propiedad = Propiedad::find($id);
    	// $propiedad->propiedad_id = $request->propiedad_id;
    	$propiedad->origen_id = $request->origen_id;
    	$propiedad->tipo = $request->tipo;
    	$propiedad->granja = $request->granja;
    	$propiedad->estatus = $request->estatus;
    	$propiedad->nombre_corto = $request->nombre_corto;
    	$propiedad->ultimo_movimiento = $request->ultimo_movimiento;
    	$propiedad->fecha_alta = $request->fecha_alta;
    	$propiedad->observaciones = $request->observaciones;
    	$propiedad->propietario = $request->propietario;
    	$propiedad->save();

        return redirect()->route('listado');
    }

    public function updateUbicacion(Request $request, $id)
    {
    	$ubicacion = Ubicacion::find($id);
    	// $ubicacion->propiedad_id = $request->propiedad_id;
    	$ubicacion->ejido = $request->ejido;
    	$ubicacion->parcela = $request->parcela;
    	$ubicacion->solar = $request->solar;
    	$ubicacion->tablaje = $request->tablaje;
    	$ubicacion->finca = $request->finca;
    	$ubicacion->direccion = $request->direccion;
    	$ubicacion->colonia = $request->colonia;
    	$ubicacion->ejido_manzana = $request->ejido_manzana;
    	$ubicacion->urbana_manzana = $request->urbana_manzana;
    	$ubicacion->lote = $request->lote;
    	$ubicacion->codigo_postal = $request->codigo_postal;
    	$ubicacion->save();

        return redirect()->route('listado');
    }

    public function updateValor(Request $request, $id)
    {
    	$valor = Valor::find($id);
    	// $valor->propiedad_id = $request->propiedad_id;
    	$valor->valor_construccion = $request->valor_construccion;
    	$valor->valor_terreno = $request->valor_terreno;
    	$valor->valor_comercial = $request->valor_comercial;
    	$valor->fecha_valor_comercial = $request->fecha_valor_comercial;
    	$valor->valor_catastral = $request->valor_catastral;
    	$valor->fecha_valor_catastral = $request->fecha_valor_catastral;
    	$valor->save();

        return redirect()->route('listado');
    }

    public function updateCoordenada(Request $request)
    { 
        $lat = $request->input('lat');
        $lon = $request->input('lon');

        foreach ($request->input('id') as $key => $value) {
            $coor = Coordenada::find($value);
            $coor->lat = intval($lat[$key]);
            $coor->lon = intval($lon[$key]);
            $coor->save();
        }

        //return response()->json($request);
        return redirect()->route('listado');
    }

    public function deleteCoordenada($id)
    {
        try{
            $coor = Coordenada::find($id);
            $coor->delete();
        } catch (\Throwable $th) {
            \Session::flash('message', 'Error al eliminar el registro');
        }

        return redirect()->back();
    }

}
