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

class CreateController extends Controller
{
    ////// Redirect Form Create ////
    public function createViewDato(){ return view('forms.create.dato'); } // p1
    public function createViewPropiedad(){ return view('forms.create.propiedad'); } // p2
    public function createViewUbicacion(){ return view('forms.create.ubicacion'); } // p3
    public function createViewDimencion(){ return view('forms.create.dimencion'); } // p4
    public function createViewValor(){ return view('forms.create.valor'); }         // p5
    public function createViewCoordenada(){ return view('forms.create.coordenada'); } // p6

    ////// Action Form Create ////

    public function createDato(Request $request) 
    {
    	$this->validate($request, [
            'propiedad_id' => 'required',
        ]);

        $dato = new Dato;
        $dato->propiedad_id = $request->propiedad_id;
        $dato->entidad_federativa = $request->entidad_federativa; 
        $dato->municipio = $request->municipio; 
        $dato->localidad = $request->localidad; 
        $dato->folio_regpub = $request->folio_regpub; 
        $dato->folio_catastral = $request->folio_catastral;
        $dato->save();

        return redirect()->route('create-view-propiedad');
    }

    public function createPropiedad(Request $request) 
    {
    	$this->validate($request, [
            'propiedad_id' => 'required',
        ]);

    	$propiedad = new Propiedad();
    	$propiedad->propiedad_id = $request->propiedad_id;
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

        return redirect()->route('create-view-ubicacion');
    }

    public function createUbicacion(Request $request) 
    {
    	$this->validate($request, [
            'propiedad_id' => 'required',
        ]);

    	$ubicacion = new Ubicacion();
    	$ubicacion->propiedad_id = $request->propiedad_id;
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

        return redirect()->route('create-view-dimencion');
    }

    public function createDimencion(Request $request) 
    {
    	$this->validate($request, [
            'propiedad_id' => 'required',
        ]);

    	$dimencion =  new Dimencion();
    	$dimencion->propiedad_id = $request->propiedad_id;
    	$dimencion->superficie_construccion = $request->superficie_construccion;
    	$dimencion->superficie_terreno = $request->superficie_terreno;
    	$dimencion->frente = $request->frente;
    	$dimencion->fondo = $request->fondo;
    	$dimencion->capacidad_granja = $request->capacidad_granja;
    	$dimencion->save();

        return redirect()->route('create-view-valor');
    }

    public function createValor(Request $request)
    {
    	$this->validate($request, [
            'propiedad_id' => 'required',
        ]);

    	$valor = new Valor();
    	$valor->propiedad_id = $request->propiedad_id;
    	$valor->valor_construccion = $request->valor_construccion;
    	$valor->valor_terreno = $request->valor_terreno;
    	$valor->valor_comercial = $request->valor_comercial;
    	$valor->fecha_valor_comercial = $request->fecha_valor_comercial;
    	$valor->valor_catastral = $request->valor_catastral;
    	$valor->fecha_valor_catastral = $request->fecha_valor_catastral;
    	$valor->save();

        return redirect()->route('create-view-coordenada');
    }

    public function createCoordenada(Request $request)
    {
        $this->validate($request, [
            'propiedad_id' => 'required',
        ]);

        $lat = $request->input('lat');
        $lon = $request->input('lon');

        foreach ($request->input('lat') as $key => $value) {
            $coor = new Coordenada();
            $coor->propiedad_id = $request->propiedad_id;
            $coor->lat = floatval($lat[$key]);
            $coor->lng = floatval($lon[$key]);
            $coor->save();
        }

        //return response()->json("ok");
        return redirect()->route('create-complete');
    }

}
