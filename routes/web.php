<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/listado');

Auth::routes();

Route::middleware('auth')->group(function () {


	Route::get('/listado', 'PropiedadController@listado')->name('listado');

	Route::get('/add', 'PropiedadController@addpropiedad')->name('add');

    Route::get('/detalles/{id}', 'PropiedadController@detalles')->name('detalles');

    Route::get('/reporte', 'ReportController@reporte');


    ///// routes views form create /////
    Route::get('/create/view/dato', 'CreateController@createViewDato')->name('create-view-dato');
    Route::get('/create/view/propiedad', 'CreateController@createViewPropiedad')->name('create-view-propiedad');
    Route::get('/create/view/ubicacion', 'CreateController@createViewUbicacion')->name('create-view-ubicacion');
    Route::get('/create/view/dimencion', 'CreateController@createViewDimencion')->name('create-view-dimencion');
    Route::get('/create/view/valor', 'CreateController@createViewValor')->name('create-view-valor');
    Route::get('/create/view/coordenada', 'CreateController@createViewCoordenada')->name('create-view-coordenada');

    ///// routes post form create /////
    Route::post('/create/save/dato', 'CreateController@createDato')->name('create-dato');
    Route::post('/create/save/propiedad', 'CreateController@createPropiedad')->name('create-propiedad');
    Route::post('/create/save/ubicacion', 'CreateController@createUbicacion')->name('create-ubicacion');
    Route::post('/create/save/dimencion', 'CreateController@createDimencion')->name('create-dimencion');
    Route::post('/create/save/valor', 'CreateController@createValor')->name('create-valor');
    Route::post('/create/save/coordenada', 'CreateController@createCoordenada')->name('create-coordenada');


    ////// routes update view ///////
    Route::get('/update/view/dato/{id}', 'ChangesController@updateViewDato')->name('update-view-dato');
    Route::get('/update/view/dimencion/{id}', 'ChangesController@updateViewDimencion')->name('update-view-dimencion');
    Route::get('/update/view/propiedad/{id}', 'ChangesController@updateViewPropiedad')->name('update-view-propiedad');
    Route::get('/update/view/ubicacion/{id}', 'ChangesController@updateViewUbicacion')->name('update-view-ubicacion');
    Route::get('/update/view/valor/{id}', 'ChangesController@updateViewValor')->name('update-view-valor');
    Route::get('/update/view/coordenada/{id}', 'ChangesController@updateViewCoordenada')->name('update-view-coordenada'); 

    ////// route update save ////
    Route::put('/update/save/dato/{id}', 'ChangesController@updateDato')->name('update-dato');
    Route::put('/update/save/dimencion/{id}', 'ChangesController@updateDimencion')->name('update-dimencion');
    Route::put('/update/save/propiedad/{id}', 'ChangesController@updatePropiedad')->name('update-propiedad');
    Route::put('/update/save/ubicacion/{id}', 'ChangesController@updateUbicacion')->name('update-ubicacion');
    Route::put('/update/save/valor/{id}', 'ChangesController@updateValor')->name('update-valor');
    Route::put('/update/save/coordenada', 'ChangesController@updateCoordenada')->name('update-coordenada');

    ///// route delete coordenada ////
    Route::get('/delete/coordenada/{id}', 'ChangesController@deleteCoordenada')->name('delete-coordenada'); 



    ///// users //////
	Route::resource('/usuarios', 'UserController');

	// change password
	Route::get('/usuarios/view-password/{id}', 'UserController@change')->name('view-password');
	Route::post('/usuarios/change-password/{id}', 'UserController@password')->name('change-password');

    // routes generate pdf individual
    Route::get('/pdf-propiedades', 'ReportController@pdf')->name('pdf-report'); // ruta report pdf
    Route::get('/pdf-individual/{id}', 'PropiedadController@pdfIndividual')->name('pdf-individual'); // ruta report pdf 

    Route::post('/upload', 'UploadController@upload')->name('upload'); // controlador insersion datos
    Route::get('/cargar-excel', 'UploadController@create')->name('view-upload'); // ruta formulario insercion de datos
    Route::get('/search', 'ReportController@search')->name('search'); // busqueda

    Route::get('/mapa', function () {
        return view('mapa.mapa');
    });

    Route::get('/crear-predio', function () {
        return view('forms.create.dato');
    })->name('crear-predio');

    Route::get('create/complete', function () {
        return view('forms.create.complete');
    })->name('create-complete');

    Route::get('test/coords-groups', 'PropiedadController@coords');

});





