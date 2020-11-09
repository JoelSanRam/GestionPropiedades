<?php

namespace App\Http\Controllers;

use App\File;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\FilesImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{

    public function index()
    {
        $files = File::all();
        return view('archivos.index', compact('files'));
    }

    public function edit($id)
    {
        $file = File::find($id);
        return view('archivos.edit', compact('file'));
    }

    public function update(Request $request, $id)
    {

        try {
            $file = File::find($id);
            $file->pdf = $request->pdf;
            $file->dwg = $request->dwg;
            $file->save();
        } catch (\Throwable $th) {
            \Session::flash('message', 'Ocurrio un error, por favor verifica los datos');
        }

        return redirect()->route('files');
    }

    public function uploadExcelView()
    {
        return view('archivos.excel');
    }

    public function uploadFilesView()
    {
        return view('archivos.files');
    }

    public function uploadExcel(Request $request)
    {
        try {
            Excel::import(new FilesImport, request()->file('archivos'));
            \Session::flash('message', 'Registros del Excel Guardados Exitosamente');
        } catch (\Throwable $th) {
            \Session::flash('message', 'Ocurrio un error, por favor verifica los datos del archivo excel');
        }

        return redirect()->route('file-view-files');
    }

    public function uploadFiles(Request $request)
    {
        $this->validate($request, [
            'pdfs' => 'required',
            'dwgs' => 'required'
        ]);

        try {

            if ($request->has('pdfs') || $request->has('dwgs')) {
                foreach ($request->file('pdfs') as $pdf) {
                    Storage::putFileAs(
                        'pdf', $pdf, $pdf->getClientOriginalName()
                    );
                }

                foreach ($request->file('dwgs') as $dwg) {
                    Storage::putFileAs(
                        'dwg', $dwg, $dwg->getClientOriginalName()
                    );
                }
            }

        } catch (\Throwable $th) {
            \Session::flash('message', 'Ocurrio un error, por favor verifica los archivos que intentas subir');
        }

        return redirect()->back();
    }

    public function downloadPDF($id)
    {
        $file = File::find($id);
        return response()->download(storage_path("app/pdf/{$file->pdf}"));
    }

    public function downloadDWG($id)
    {
        $file = File::find($id);
        return response()->download(storage_path("app/dwg/{$file->dwg}"));
    }
}