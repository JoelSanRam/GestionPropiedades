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
    return view('Listado');
});
Route::get('/', function () {
    return view('index');
});

Route::get('/usuarios', function () {
    return view('Usuarios');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
