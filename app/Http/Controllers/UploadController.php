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
        Excel::import(new TablesImport, request()->file('registros'));
        /*
    	try {
    		Excel::import(new DataImport, request()->file('registros'));
        	\Session::flash('message', 'Registro Guardado');
    	} catch (\Throwable $th) {
            \Session::flash('message', 'Ocurrio un error');
        } */

        return redirect()->back();
    }
}
