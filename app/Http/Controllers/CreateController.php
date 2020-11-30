<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Imports\CoordenadasImport;
use Maatwebsite\Excel\Facades\Excel;
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
    public function createViewPropiedad()
    {
        $id = Propiedad::max('id');
        return view('forms.create.propiedad', compact('id')); 
    }

    public function createViewUbicacion()
    {
        $id = Ubicacion::max('id'); 
        return view('forms.create.ubicacion', compact('id')); 
    }

    public function createViewDimencion()
    {
        $id = Dimencion::max('id');  
        return view('forms.create.dimencion', compact('id')); 
    }

    public function createViewValor()
    {
        $id = Valor::max('id');  
        return view('forms.create.valor', compact('id')); 
    }

    public function createViewCoordenada()
    {
        $id = Propiedad::max('id');
        return view('forms.create.coordenada', compact('id')); 
    }

    public function createViewMarker()
    {
        $id = Propiedad::max('id'); 
        return view('forms.create.marker', compact('id')); 
    }eturn view('forms.create.archivo', compact('id')); 
    }*/

    public function createViewArchivo()
    {
        $id = Propiedad::max('id'); 
        return view('forms.create.files', compact('id')); 
    }

    ////// Action Form Create ////


    public function createPropiedad(Request $request) 
    {
    	$this->validate($request, [
            'tipo' => 'required',
            'estatus' => 'required',
            'nombre_corto' => 'required',
            'propietario' => 'required',
            'entidad_federativa' => 'required',
        ]);

    	try {
            $propiedad = new Propiedad();
            $propiedad->origen_id = $request->origen_id;
            $propiedad->tipo = $request->tipo;
            $propiedad->granja = $request->granja;
            $propiedad->estatus = $request->estatus;
            $propiedad->nombre_corto = $request->nombre_corto;
            $propiedad->ultimo_movimiento = $request->ultimo_movimiento;
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
    	/*$this->validate($request, [
            'propiedad_id' => 'required|unique:ubicacions,propiedad_id',
        ]);*/

        try {
            $ubicacion = new Ubicacion();
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
    	/*$this->validate($request, [
            'propiedad_id' => 'required|unique:dimencions,propiedad_id',
        ]);*/

        try {
            $dimencion =  new Dimencion();
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
    	/*$this->validate($request, [
            'propiedad_id' => 'required|unique:valors,propiedad_id',
        ]);*/

        try {
            $valor = new Valor();
            $valor->valor_construccion = $request->valor_construccion;
            $valor->valor_terreno = $request->valor_terreno;
            $valor->valor_comercial = $request->valor_comercial;
            $valor->fecha_valor_comercial = $request->fecha_valor_comercial;
            $valor->valor_catastral = $request->valor_catastral;
            $valor->fecha_valor_catastral = $request->fecha_valor_catastral;
            $valor->save();

            return redirect()->route('create-view-coordenada');

        } catch (\Throwable $th) {
            \Session::flash('message', 'Ocurrio un error por favor verifique los datos');
            return redirect()->back();
        }

    }

    public function createCoordenada(Request $request)
    {
        $this->validate($request, [
            'coordenadas' => 'required',
        ]);

        try {

            Excel::import(new CoordenadasImport, request()->file('coordenadas'));
            \Session::flash('message', 'Registros Guardados Exitosamente');

            return redirect()->route('create-view-marker');
        } catch (\Throwable $th) {
            \Session::flash('message', 'Ocurrio un error por favor verifique los datos');
            return redirect()->back();
        }
        
    }

    public function createMarker(Request $request)
    {
        $this->validate($request, [
            'propiedad_id' => 'required|unique:markers,propiedad_id',
            'lat' => 'required',
            'lon' => 'required',
        ]);

        try {

            $marker = new Marker();
            $marker->propiedad_id = $request->propiedad_id;
            $marker->lat = floatval($request->lat);
            $marker->lng = floatval($request->lon);
            $marker->save();

            return redirect()->route('create-view-archivo');
        } catch (\Throwable $th) {
            \Session::flash('message', 'Ocurrio un error por favor verifique los datos');
            return redirect()->back();
        }

    }

    public function createArchivo(Request $request)
    {
        $pdfName = '';
        $dwgName = '';

        try {

            if ($request->has('pdf')) {

                $pdfName = uniqid() . $request->file('pdf')->getClientOriginalName(); 

                Storage::putFileAs(
                    'pdf', 
                    $request->file('pdf'), 
                    $pdfName
                );
                
            }

            if ($request->has('dwg')) {

                $dwgName = uniqid() . $request->file('dwg')->getClientOriginalName();

                Storage::putFileAs(
                    'dwg',
                    $request->file('dwg'), 
                    $dwgName
                );
                
            }

            $file = new File();
            $file->propiedad_id = $request->propiedad_id;
            $file->pdf = $pdfName;
            $file->dwg = $dwgName;
            $file->save();

            return redirect()->route('create-complete');

        } catch (\Throwable $th) {
            \Session::flash('message', 'Ocurrio un error, por favor verifica los archivos que intentas subir');
            return redirect()->back();
        }

    }

}
