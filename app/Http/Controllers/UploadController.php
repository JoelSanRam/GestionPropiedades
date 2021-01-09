<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\InformacionImport;
use Maatwebsite\Excel\Facades\Excel;

class UploadController extends Controller
{
    public function create()
	{
		return view('upload');
	}

    public function upload(Request $request)
    {
        $this->validate($request, [
            'registros' => 'required'
        ]);

        Excel::import(new InformacionImport, request()->file('registros'));
        \Session::flash('message', 'Registros del Excel Guardados Exitosamente');

    	/*try {
            Excel::import(new InformacionImport, request()->file('registros'));
        	\Session::flash('message', 'Registros del Excel Guardados Exitosamente');
            return redirect()->back();
    	} catch (\Throwable $e) {
            //$errors = $e->validator->customMessages;
            //\Session::flash('message', 'Ocurrio un error.');
            //return redirect()->back()->with('errors', $errors);
            return response()->json($e);
        }*/ 
    }
}
