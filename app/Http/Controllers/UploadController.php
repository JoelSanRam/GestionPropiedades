<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\TablesImport;
use Maatwebsite\Excel\Facades\Excel;

class UploadController extends Controller
{
    public function create()
	{
		return view('upload');
	}

    public function upload(Request $request)
    {
    	try {
            Excel::import(new TablesImport, request()->file('registros'));
        	\Session::flash('message', 'Registros Guardados Exitosamente');
    	} catch (\Throwable $th) {
            \Session::flash('message', 'Ocurrio un error, por favor verifica los datos del archivo excel');
        } 

        return redirect()->back();
    }
}