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

    public function downloadEscrituras($id)
    {
        try {
            $file = File::find($id);
            return response()->download(storage_path("app/escrituras/{$file->escrituras}"));
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
