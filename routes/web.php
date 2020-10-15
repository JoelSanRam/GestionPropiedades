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

Route::get('/listado', function () {
    return view('propiedades.Listado');
});
//
Route::get('/', function () {
    return view('index');
});
//

Route::get('/usuarios', function () {
    return view('usuarios.Usuarios');
});
Route::get('/addusuarios', function () {
    return view('usuarios.create');
});

//

Route::get('/reporte', function () {
    return view('reportes.reporte');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/upload', 'UploadController@upload')->name('upload');
Route::get('/create', 'UploadController@create');
