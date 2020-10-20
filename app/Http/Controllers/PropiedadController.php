<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropiedadController extends Controller
{
    public function index()
    {
        return view('propiedades.addPropiedad');
    }
}
