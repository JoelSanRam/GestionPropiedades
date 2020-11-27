<?php

namespace App\Http\Controllers;

use App\File;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FileController extends Controller
{

    public function index()
    {
        $files = File::all();
        return view('archivos.index', compact('files'));
    }

    public function uploadViewPDF()
    {
        return view('archivos.pdfs');
    }

    public function uploadViewDWG()
    {
        return view('archivos.dwgs');
    }

    public function uploadPDF(Request $request)
    {
        $this->validate($request, [
            'pdfs' => 'required'
        ]);

        try {

            if ($request->hasfile('pdfs')) {
                foreach ($request->file('pdfs') as $pdf) {
                    Storage::putFileAs(
                        'pdf', $pdf, $pdf->getClientOriginalName()
                    );
                }
            }

            \Session::flash('message', 'Se Cargaron los Archivos PDF Exitosamente');

        } catch (\Throwable $th) {
            \Session::flash('message', 'Ocurrio un error, por favor verifica los archivos que intentas subir');
        }

        return redirect()->back();
    }

    public function uploadDWG(Request $request)
    {
        $this->validate($request, [
            'dwgs' => 'required'
        ]);

        try {

            if ($request->hasfile('dwgs')) {
                foreach ($request->file('dwgs') as $dwg) {
                    Storage::putFileAs(
                        'dwg', $dwg, $dwg->getClientOriginalName()
                    );
                }
            }

            \Session::flash('message', 'Se Cargaron los Archivos DWG Exitosamente');

        } catch (\Throwable $th) {
            \Session::flash('message', 'Ocurrio un error, por favor verifica los archivos que intentas subir');
        }

        return redirect()->back();
    }

    public function downloadPDF($id)
    {
        try {
            $file = File::find($id);
            return response()->download(storage_path("app/pdf/{$file->pdf}"));
        } catch (\Throwable $th) {
            \Session::flash('message', 'Ocurrio un error al descagar, no se encontro el archivo');
            return redirect()->back();
        }
    }

    public function downloadDWG($id)
    { 
        try {
            $file = File::find($id);
            return response()->download(storage_path("app/dwg/{$file->dwg}"));
        } catch (\Throwable $th) {
            \Session::flash('message', 'Ocurrio un error en la descaga, no se encontro el archivo');
            return redirect()->back();
        }
    }

    public function deletePDF($id)
    {
        try {
            $file = File::find($id);
            Storage::delete("pdf/{$file->pdf}");
            DB::table('files')->where('id', $id)->update(['pdf' => ""]);
            \Session::flash('message', 'El archivo se elimino con exito');
        } catch (\Throwable $th) {
            \Session::flash('message', 'Ocurrio un error, no se encontro el archivo');
        }

        return redirect()->back();
    }

    public function deleteDWG($id)
    {
        try {
            $file = File::find($id);
            Storage::delete("dwg/{$file->dwg}");
            DB::table('files')->where('id', $id)->update(['dwg' => ""]);
            \Session::flash('message', 'El archivo se elimino con exito');
        } catch (\Throwable $th) {
            \Session::flash('message', 'Ocurrio un error, no se encontro el archivo');
        }

        return redirect()->back();
    }
}
