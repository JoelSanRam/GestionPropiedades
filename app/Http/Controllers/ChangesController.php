<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Imports\CoordenadasImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Dato;
use App\Dimencion;
use App\Propiedad;
use App\Ubicacion;
use App\Valor;
use App\SeguimientoValor;
use App\Coordenada;
use App\File;
use App\Image;

class ChangesController extends Controller
{
	////// Redirect Form View ////
    public function updateViewPropiedad($id){ $item = Propiedad::find($id); return view('forms.update.propiedad', compact('item')); }
    public function updateViewUbicacion($id){ $item = Ubicacion::find($id); return view('forms.update.ubicacion', compact('item')); }
    public function updateViewDimencion($id){ $item = Dimencion::find($id); return view('forms.update.dimencion', compact('item')); }
    public function updateViewValor($id){ $item = Valor::find($id); return view('forms.update.valor', compact('item')); }

    public function updateViewSeguimientoValor($id){ 
        $item = SeguimientoValor::where('propiedad_id', $id)->first(); 
        return view('forms.update.seguimiento-valor', compact('item', 'id')); 
    }

    public function updateViewArchivo($id)
    { 
        $item = File::where('propiedad_id', $id)->first(); 
        return view('forms.update.files', compact('item', 'id')); 
    }

    public function updateViewCoordenada($id)
    {
        $data = Coordenada::where('propiedad_id', $id)->get();
        return view('forms.update.coordenada', compact('data', 'id')); 
    }

    public function updateViewImage($id)
    {
        $data = Image::where('propiedad_id', $id)->get();
        return view('forms.update.image', compact('data', 'id')); 
    }

    ////// Action Form ////

    public function updatePropiedad(Request $request, $id)
    {
        $this->validate($request, [
            'tipo' => 'required',
            'estatus' => 'required',
            'nombre_corto' => 'required', // corregimos bug
            'propietario' => 'required',
            'entidad_federativa' => 'required',
        ]);
        
        try {
            $propiedad = Propiedad::find($id);
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

        return redirect()->route('listado');
    }

    public function updateUbicacion(Request $request, $id)
    {
        $this->validate($request, [
            'codigo_postal' => 'required',
        ]);

        try {
            $ubicacion = Ubicacion::find($id);
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

        return redirect()->route('listado');
    }

    public function updateDimencion(Request $request, $id)
    {
        $this->validate($request, [
            'superficie_terreno' => 'required',
        ]);

        try {
            $dimencion = Dimencion::find($id);
            $dimencion->superficie_construccion = $request->superficie_construccion;
            $dimencion->superficie_terreno = $request->superficie_terreno;
            $dimencion->frente = $request->frente;
            $dimencion->fondo = $request->fondo;
            $dimencion->capacidad_granja = $request->capacidad_granja;
            $dimencion->save();
        } catch (\Throwable $th) {
            \Session::flash('message', 'Ocurrio un error por favor verifique los datos');
        }

        return redirect()->route('listado');
    }

    public function updateValor(Request $request, $id)
    {
        $this->validate($request, [
            'valor_comercial' => 'required',
            'valor_catastral' => 'required',
        ]);

        try {
           $valor = Valor::find($id);
            $valor->valor_construccion = $request->valor_construccion;
            $valor->valor_comercial = $request->valor_comercial;
            $valor->fecha_valor_comercial = $request->fecha_valor_comercial;
            $valor->valor_catastral = $request->valor_catastral;
            $valor->fecha_valor_catastral = $request->fecha_valor_catastral;
            $valor->save(); 
        } catch (\Throwable $th) {
            \Session::flash('message', 'Ocurrio un error por favor verifique los datos');
        }

        return redirect()->route('listado');
    }

    // tabla seguimiento valor
    public function updateSeguimientoValor(Request $request, $id)
    {
        try {
            $seguiminto = SeguimientoValor::find($id);
            $seguiminto->avaluo_terreno = $request->avaluo_terreno;
            $seguiminto->estimacion_valor_construccion = $request->estimacion_valor_construccion;
            $seguiminto->avaluo_construccion = $request->avaluo_construccion;
            $seguiminto->valor_conjunto = $request->valor_conjunto;
            $seguiminto->save(); 
        } catch (\Throwable $th) {
            \Session::flash('message', 'Ocurrio un error por favor verifique los datos');
        }

        return redirect()->route('listado');
    }

    public function updateCoordenada(Request $request)
    { 
        try {
            $lat = $request->input('lat');
            $lon = $request->input('lon');

            foreach ($request->input('id') as $key => $value) {
                $coor = Coordenada::find($value);
                $coor->lat = floatval($lat[$key]);
                $coor->lng = floatval($lon[$key]);
                $coor->save();
            }
        } catch (\Throwable $th) {
            \Session::flash('message', 'Ocurrio un error por favor verifique los datos');
        }
        
        return redirect()->route('listado');
    }

    public function updateExcelCoordenada(Request $request)
    {
        $this->validate($request, [
            'coordenadas' => 'required',
        ]);

        try {

            Excel::import(new CoordenadasImport, request()->file('coordenadas'));
            \Session::flash('message', 'Registros Guardados Exitosamente');
            
            return redirect()->back();

        } catch (\Throwable $e) {
            $errors = $e->validator->customMessages;
            return redirect()->back()->with('errors', $errors);
        }
    }

    public function updateArchivoPDF(Request $request, $id)
    {
        $this->validate($request, [
            'pdf' => 'required',
        ]);

        $pdfName = '';

        try {
            if ($request->has('pdf')) {

                $pdfName = uniqid() . $request->file('pdf')->getClientOriginalName(); 

                Storage::putFileAs(
                    'pdf', 
                    $request->file('pdf'), 
                    $pdfName
                );
            }

            $file = File::find($id);
            $file->pdf = $pdfName;
            $file->save();

            \Session::flash('message', 'Archivo PDF subido con exito');

        } catch (\Throwable $th) {
            \Session::flash('message', 'Ocurrio un error, al subir el archivo PDF');
        }

        return redirect()->back();
    }

    public function updateArchivoDWG(Request $request, $id)
    {
        $this->validate($request, [
            'dwg' => 'required',
        ]);

        $dwgName = '';

        try {
            if ($request->has('dwg')) {

                $dwgName = uniqid() . $request->file('dwg')->getClientOriginalName();

                Storage::putFileAs(
                    'dwg', 
                    $request->file('dwg'), 
                    $dwgName
                );

            }

            $file = File::find($id);
            $file->dwg = $dwgName;
            $file->save();

            \Session::flash('message', 'Archivo DWG subido con exito');

        } catch (\Throwable $th) {
            \Session::flash('message', 'Ocurrio un error, al subir el archivo DWG');
        }

        return redirect()->back();
    }

    public function updateArchivoEscrituras(Request $request, $id)
    {
        $this->validate($request, [
            'escrituras' => 'required',
        ]);

        $escriturasName = '';

        try {
            if ($request->has('escrituras')) {

                $escriturasName = uniqid() . $request->file('escrituras')->getClientOriginalName();

                Storage::putFileAs(
                    'escrituras', 
                    $request->file('escrituras'), 
                    $escriturasName
                );

            }

            $file = File::find($id);
            $file->escrituras = $escriturasName;
            $file->save();

            \Session::flash('message', 'Archivo de escrituras subido con exito');

        } catch (\Throwable $th) {
            \Session::flash('message', 'Ocurrio un error, al subir el archivo DWG');
        }

        return redirect()->back();
    }

    public function updateArchivoPDFAndDWG(Request $request)
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

            return redirect()->back();

        } catch (\Throwable $th) {
            \Session::flash('message', 'Ocurrio un error, por favor verifica los archivos que intentas subir');
            return redirect()->back();
        }
    }

    public function deleteCoordenada($id)
    {
        try{
            $coor = Coordenada::find($id);
            $coor->delete();
            \Session::flash('message', 'Coordenada eliminada');
        } catch (\Throwable $th) {
            \Session::flash('message', 'Error al eliminar el registro');
        }

        return redirect()->back();
    }

    public function deleteImage($id)
    {
        try{
            $img = Image::find($id);
            Storage::delete("public/{$img->filename}");
            $img->delete();
            \Session::flash('message', 'Imagen eliminada');
        } catch (\Throwable $th) {
            \Session::flash('message', 'Error al eliminar la imagen');
        }

        return redirect()->back();
    }

    public function updateMarcador($id)
    {
        $item = Coordenada::find($id);
        $marcador = Coordenada::where([
            ['propiedad_id', $item->propiedad_id], 
            ['marcador', 'si']
        ])->first();

        if ($marcador == null) {

            $nuevo_marcador = Coordenada::find($id);
            $nuevo_marcador->marcador = 'si';
            $nuevo_marcador->save();

        } else {

            $actual_marcador = Coordenada::find($marcador->id);
            $actual_marcador->marcador = null;
            $actual_marcador->save();

            $nuevo_marcador = Coordenada::find($id);
            $nuevo_marcador->marcador = 'si';
            $nuevo_marcador->save();
        }

        return redirect()->back();
    }

}
