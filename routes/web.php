<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí es donde puede registrar rutas web para su aplicación. Estas
| rutas son cargadas por el RouteServiceProvider dentro de un grupo que
| contiene el grupo de middleware "web". ¡Ahora crea algo grandioso!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/nosotros', function () {
    return 'hola';
});

/*Route::get('/paciente', function () {
    return view('index');
});*/

Route::get('/equipos', 'categoriaController@index');
