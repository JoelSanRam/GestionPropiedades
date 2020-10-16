<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('auth')->group(function () {

	Route::get('/listado', function () {
	    return view('propiedades.Listado');
	});
	Route::get('/detalle', function () {
	    return view('propiedades.detalle');
	});

	Route::get('/', function () {
	    return view('index');
	});

	Route::get('/usuarios', function () {
	    return view('usuarios.Usuarios');
	});
	Route::get('/addusuarios', function () {
	    return view('usuarios.create');
	});

});

//

Route::get('/reporte', function () {
    return view('reportes.reporte');
});

Route::get('/mapa', function () {
    return view('mapa.mapa');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/upload', 'UploadController@upload')->name('upload'); // controlador insersion datos
Route::get('/create', 'UploadController@create'); // ruta formulario insercion de datos
Route::get('/report', 'ReportController@report'); // ruta report test
Route::get('/pdf', 'ReportController@pdf')->name('pdf-report'); // ruta report pdf test
