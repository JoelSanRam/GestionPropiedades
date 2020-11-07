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
        //return view('', compact('files'))
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

        /*try {

        } catch (\Throwable $th) {
            \Session::flash('message', 'Ocurrio un error, por favor verifica los archivos que intentas subir');
        }*/

        return redirect()->back();
    }


}
