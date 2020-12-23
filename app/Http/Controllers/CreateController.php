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
use App\File;
use App\Image;

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

    public function createViewArchivo()
    {
        $id = Propiedad::max('id'); 
        return view('forms.create.files', compact('id')); 
    }

    public function createViewImage()
    {
        $id = Image::max('id'); 
        return view('forms.create.image', compact('id')); 
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
            'codigo_postal' => 'required',
        ]);

        try {
            $ubicacion = new Ubicacion();
            $ubicacion->ejido = $request->ejido;
            $ubicacion->parcela = $request->parcela;
            $ubicacion->lote = $request->lote;
            $ubicacion->solar = $request->solar;
            $ubicacion->tablaje = $request->tablaje;
            $ubicacion->finca = $request->finca;
            $ubicacion->direccion = $request->direccion;
            $ubicacion->ejido_manzana = $request->ejido_manzana;
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
            'superficie_terreno' => 'required',
            'frente' => 'required',
            'fondo' => 'required',
        ]);

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
    	$this->validate($request, [
            'valor_comercial' => 'required',
            'valor_catastral' => 'required',
        ]);

        try {
            $valor = new Valor();
            $valor->valor_construccion = $request->valor_construccion;
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

            return redirect()->route('create-view-image');

        } catch (\Throwable $th) {
            \Session::flash('message', 'Ocurrio un error, por favor verifica los archivos que intentas subir');
            return redirect()->back();
        }

    }

    public function createImage(Request $request)
    {
        $this->validate($request, [
            'images' => 'required',
        ]);

        try {
            
            if ($request->hasfile('images')) {

                foreach ($request->file('images') as $file) {

                    $path = public_path() . '/pics';
                    $filename = uniqid() . $file->getClientOriginalName();
                    $file->move($path, $filename);
                    
                    $image = new Image();
                    $image->propiedad_id = $request->propiedad_id;
                    $image->filename = $filename;
                    $image->save(); 
                }
            }

            return redirect()->route('create-complete');

        } catch (Exception $e) {
            \Session::flash('message', 'Ocurrio un error, al subir las imagenes');
            return redirect()->back();
        }

    }
}
