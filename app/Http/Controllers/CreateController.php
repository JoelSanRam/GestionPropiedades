<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Dimencion;
use App\Propiedad;
use App\Ubicacion;
use App\Valor;
use App\Coordenada;
use App\Marker;
use App\File;

class CreateController extends Controller
{
    ////// Redirect Form Create ////
    public function createViewPropiedad(){ return view('forms.create.propiedad'); } // p2
    public function createViewUbicacion(){ return view('forms.create.ubicacion'); } // p3
    public function createViewDimencion(){ return view('forms.create.dimencion'); } // p4
    public function createViewValor(){ return view('forms.create.valor'); }         // p5
    public function createViewCoordenada(){ return view('forms.create.coordenada'); } // p6
    public function createViewMarker(){ return view('forms.create.marker'); } // p7
    public function createViewArchivo(){ return view('forms.create.archivo'); }
    public function createViewArchivoFiles(){ return view('forms.create.files'); }

    ////// Action Form Create ////


    public function createPropiedad(Request $request) 
    {
    	$this->validate($request, [
            'propiedad_id' => 'required|unique:propiedads,propiedad_id',
        ]);

    	try {
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
            $propiedad->entidad_federativa = $request->entidad_federativa; 
            $propiedad->municipio = $request->municipio; 
            $propiedad->localidad = $request->localidad; 
            $propiedad->folio_regpub = $request->folio_regpub; 
            $propiedad->folio_catastral = $request->folio_catastral;
            $propiedad->save();
        } catch (\Throwable $th) {
            \Session::flash('message', 'Ocurrio un error por favor verifique los datos');
        }

        return redirect()->route('create-view-ubicacion');
    }

    public function createUbicacion(Request $request) 
    {
    	$this->validate($request, [
            'propiedad_id' => 'required|unique:ubicacions,propiedad_id',
        ]);

        try {
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
        } catch (\Throwable $th) {
            \Session::flash('message', 'Ocurrio un error por favor verifique los datos');
        }

        return redirect()->route('create-view-dimencion');
    }

    public function createDimencion(Request $request) 
    {
    	$this->validate($request, [
            'propiedad_id' => 'required|unique:dimencions,propiedad_id',
        ]);

        try {
            $dimencion =  new Dimencion();
            $dimencion->propiedad_id = $request->propiedad_id;
            $dimencion->superficie_construccion = $request->superficie_construccion;
            $dimencion->superficie_terreno = $request->superficie_terreno;
            $dimencion->frente = $request->frente;
            $dimencion->fondo = $request->fondo;
            $dimencion->capacidad_granja = $request->capacidad_granja;
            $dimencion->save();
        } catch (\Throwable $th) {
            \Session::flash('message', 'Ocurrio un error por favor verifique los datos');
        }

        return redirect()->route('create-view-valor');
    }

    public function createValor(Request $request)
    {
    	$this->validate($request, [
            'propiedad_id' => 'required|unique:valors,propiedad_id',
        ]);

        try {
            $valor = new Valor();
            $valor->propiedad_id = $request->propiedad_id;
            $valor->valor_construccion = $request->valor_construccion;
            $valor->valor_terreno = $request->valor_terreno;
            $valor->valor_comercial = $request->valor_comercial;
            $valor->fecha_valor_comercial = $request->fecha_valor_comercial;
            $valor->valor_catastral = $request->valor_catastral;
            $valor->fecha_valor_catastral = $request->fecha_valor_catastral;
            $valor->save();
        } catch (\Throwable $th) {
            \Session::flash('message', 'Ocurrio un error por favor verifique los datos');
        }

        return redirect()->route('create-view-coordenada');
    }

    public function createCoordenada(Request $request)
    {
        $this->validate($request, [
            'propiedad_id' => 'required',
        ]);

        try {
            $lat = $request->input('lat');
            $lon = $request->input('lon');

            foreach ($request->input('lat') as $key => $value) {
                $coor = new Coordenada();
                $coor->propiedad_id = $request->propiedad_id;
                $coor->lat = floatval($lat[$key]);
                $coor->lng = floatval($lon[$key]);
                $coor->save();
            }
        } catch (\Throwable $th) {
            \Session::flash('message', 'Ocurrio un error por favor verifique los datos');
        }
        
        return redirect()->route('create-view-marker');
    }

    public function createMarker(Request $request)
    {
        $this->validate($request, [
            'propiedad_id' => 'required|unique:markers,propiedad_id',
        ]);

        try {
            $marker = new Marker();
            $marker->propiedad_id = $request->propiedad_id;
            $marker->lat = floatval($request->lat);
            $marker->lng = floatval($request->lon);
            $marker->save();
        } catch (\Throwable $th) {
            \Session::flash('message', 'Ocurrio un error por favor verifique los datos');
        }

        return redirect()->route('create-complete');
    }

    public function createArchivo(Request $request)
    {
        $this->validate($request, [
            'propiedad_id' => 'required|unique:files,propiedad_id',
        ]);

        try {
            $file = new File();
            $file->propiedad_id = $request->propiedad_id;
            $file->pdf = $request->pdf . '.pdf';
            $file->dwg = $request->dwg . '.dwg';
            $file->save();
        } catch (\Throwable $th) {
            \Session::flash('message', 'Ocurrio un error, por favor verifica los datos');
        }

        return redirect()->route('create-view-archivo-files');
    }

    public function createArchivoFiles(Request $request)
    {
        try {

            if ($request->has('pdf')) {

                Storage::putFileAs(
                    'pdf', $request->file('pdf'), $request->file('pdf')->getClientOriginalName()
                );
            }

            if ($request->has('dwg')) {

                Storage::putFileAs(
                    'dwg', $request->file('dwg'), $request->file('dwg')->getClientOriginalName()
                );
            }

        } catch (\Throwable $th) {
            \Session::flash('message', 'Ocurrio un error, por favor verifica los archivos que intentas subir');
        }

        return redirect()->route('create-complete');
    }

}
