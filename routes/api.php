<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Aquí es donde puede registrar las rutas de API para su aplicación. Estas
| rutas son cargadas por RouteServiceProvider dentro de un grupo que
| se asigna al grupo de middleware "api". 
|
*/

// Ruta para obtener información del usuario autenticado
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

