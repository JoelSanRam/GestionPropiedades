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

    	try {
            Excel::import(new InformacionImport, request()->file('registros'));
        	\Session::flash('message', 'Registros del Excel Guardados Exitosamente');
            return redirect()->back();
    	} catch (\Throwable $e) {
            if (isset($e->validator)) {
                $errors = $e->validator->customMessages;
                return redirect()->back()->with('errors', $errors);
            } else {
                \Session::flash('message', 'Ocurrio un error, verifica que tus datos sean correctos en tu archivo excel');
                return redirect()->back();
            }
            
        } 
    }
}
