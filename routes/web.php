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

Route::redirect('/', '/listado');

Route::middleware('auth')->group(function () {


	Route::get('/listado', 'PropiedadController@listado')->name('listado');

    Route::get('/detalles/{id}', 'PropiedadController@detalles')->name('detalles');

    ///// usuarios //////
	Route::resource('/usuarios', 'UserController');

	// change password
	Route::get('/usuarios/view-password/{id}', 'UserController@change')->name('view-password');
	Route::post('/usuarios/change-password/{id}', 'UserController@password')->name('change-password');

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
Route::get('/pdf', 'ReportController@pdf')->name('pdf-report'); // ruta report pdf tes


Route::get('/search', 'ReportController@search')->name('search'); // busqueda

// rouests generate pdf
Route::get('/pdf-propiedades', 'ReportController@pdf')->name('pdf-report'); // ruta report pdf test
Route::get('/pdf-individual/{id}', 'PropiedadController@pdfIndividual')->name('pdf-individual'); // ruta report pdf test