<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/listado');

Auth::routes();

Route::middleware('auth')->group(function () {

    Route::get('/mapa', 'MapController@mapData')->name('map');

    Route::get('/search-map', 'MapController@search')->name('search-map'); // busqueda

	Route::get('/listado', 'PropiedadController@listado')->name('listado');

	Route::get('/add', 'PropiedadController@addpropiedad')->name('add');

    Route::get('/detalles/{id}', 'PropiedadController@detalles')->name('detalles');

    Route::get('/reporte', 'ReportController@reporte');


    ///// routes views form create /////
    Route::get('/create/view/propiedad', 'CreateController@createViewPropiedad')->name('create-view-propiedad');
    Route::get('/create/view/ubicacion', 'CreateController@createViewUbicacion')->name('create-view-ubicacion');
    Route::get('/create/view/dimencion', 'CreateController@createViewDimencion')->name('create-view-dimencion');
    Route::get('/create/view/valor', 'CreateController@createViewValor')->name('create-view-valor');
    Route::get('/create/view/coordenada', 'CreateController@createViewCoordenada')->name('create-view-coordenada');
    Route::get('/create/view/archivo', 'CreateController@createViewArchivo')->name('create-view-archivo');
    Route::get('/create/view/image', 'CreateController@createViewImage')->name('create-view-image');

    ///// routes post form create /////
    Route::post('/create/save/propiedad', 'CreateController@createPropiedad')->name('create-propiedad');
    Route::post('/create/save/ubicacion', 'CreateController@createUbicacion')->name('create-ubicacion');
    Route::post('/create/save/dimencion', 'CreateController@createDimencion')->name('create-dimencion');
    Route::post('/create/save/valor', 'CreateController@createValor')->name('create-valor');
    Route::post('/create/save/coordenada', 'CreateController@createCoordenada')->name('create-coordenada');
    Route::post('/create/save/archivo', 'CreateController@createArchivo')->name('create-archivo');
    Route::post('/create/save/image', 'CreateController@createImage')->name('create-image');


    ////// routes update view ///////
    Route::get('/update/view/dimencion/{id}', 'ChangesController@updateViewDimencion')->name('update-view-dimencion');
    Route::get('/update/view/propiedad/{id}', 'ChangesController@updateViewPropiedad')->name('update-view-propiedad');
    Route::get('/update/view/ubicacion/{id}', 'ChangesController@updateViewUbicacion')->name('update-view-ubicacion');
    Route::get('/update/view/valor/{id}', 'ChangesController@updateViewValor')->name('update-view-valor');
    Route::get('/update/view/coordenada/{id}', 'ChangesController@updateViewCoordenada')->name('update-view-coordenada');
    Route::get('/update/view/archivo/{id}', 'ChangesController@updateViewArchivo')->name('update-view-archivo');
    // update marcador
    Route::get('/update/view/marcador/{id}', 'ChangesController@updateMarcador')->name('update-view-marcador');

    ////// route update save ////
    Route::put('/update/save/dimencion/{id}', 'ChangesController@updateDimencion')->name('update-dimencion');
    Route::put('/update/save/propiedad/{id}', 'ChangesController@updatePropiedad')->name('update-propiedad');
    Route::put('/update/save/ubicacion/{id}', 'ChangesController@updateUbicacion')->name('update-ubicacion');
    Route::put('/update/save/valor/{id}', 'ChangesController@updateValor')->name('update-valor');
    Route::put('/update/save/coordenada', 'ChangesController@updateCoordenada')->name('update-coordenada');
    Route::put('/update/save/coordenada/excel', 'ChangesController@updateExcelCoordenada')->name('update-excel-coordenada');
    Route::put('/update/save/archivo/pdf/and/dwg', 'ChangesController@updateArchivoPDFAndDWG')->name('update-archivo');
    Route::put('/update/save/archivo/pdf/{id}', 'ChangesController@updateArchivoPDF')->name('update-view-archivo-pdf');
    Route::put('/update/save/archivo/dwg/{id}', 'ChangesController@updateArchivoDWG')->name('update-view-archivo-dwg');

    ///// route delete coordenada and image ////
    Route::get('/delete/coordenada/{id}', 'ChangesController@deleteCoordenada')->name('delete-coordenada'); 
    Route::get('/delete/image/{id}', 'ChangesController@deleteCoordenada')->name('delete-coordenada'); 



    ///// users //////
	Route::resource('/usuarios', 'UserController');

	// change password
	Route::get('/usuarios/view-password/{id}', 'UserController@change')->name('view-password');
	Route::post('/usuarios/change-password/{id}', 'UserController@password')->name('change-password');

    // routes generate pdf individual
    Route::get('/pdf-propiedades', 'ReportController@pdf')->name('pdf-report'); // ruta report pdf
    Route::get('/pdf-individual/{id}', 'ReportController@pdfIndividual')->name('pdf-individual'); // ruta report pdf 

    Route::post('/initial/data/excel/upload', 'UploadController@upload')->name('upload'); // controlador insersion datos
    Route::get('/cargar-excel', 'UploadController@create')->name('view-upload'); // ruta formulario insercion de datos
    Route::get('/search', 'ReportController@search')->name('search'); // busqueda

    Route::get('create/complete', function () {
        return view('forms.create.complete');
    })->name('create-complete');



    ///// downloads documents //////
    Route::get('/downloads/pdf/doc-pdf/{id}', 'FileController@downloadPDF')->name('doc-pdf');
    Route::get('/downloads/dwg/doc-dwg/{id}', 'FileController@downloadDWG')->name('doc-dwg');

    ///// downloads documents //////
    Route::get('/delete/pdf/doc-pdf/{id}', 'FileController@deletePDF')->name('delete-pdf');
    Route::get('/delete/dwg/doc-dwg/{id}', 'FileController@deleteDWG')->name('delete-dwg');

});





