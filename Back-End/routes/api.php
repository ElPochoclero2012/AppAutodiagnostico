<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//  RUTAS PÚBLICAS


//  RUTAS PARA AUTNTICACION
Route::group(
    [
        'middleware' => 'api',
        'prefix' => 'auth',
    ],
    function ($router) {
        Route::post('login', 'AuthController@login');
        Route::post('register', 'AuthController@register');
        Route::post('logout', 'AuthController@logout');
        Route::post('refresh', 'AuthController@refresh');
        Route::post('user', 'AuthController@me');
    }
);

//  RUTAS QUE REQUIEREN AUTENTICACION
Route::group(['middleware' => 'auth:api'], function () {

    Route::get('usuario/{id}', 'PersonaController@mostrarDatosPersonas');
    Route::get('usuario/{id}/sintomas', 'PersonaController@mostrarSintomasPersonas');

    Route::post('probame', 'PersonaController@anda');
    Route::post('apellido', 'PersonaController@apellido');
    Route::post('sintomas', 'PersonaController@sintomas');
    Route::post('datos', 'PersonaController@datos');
    Route::post('/mostrar/{id}', 'PersonaController@mostrarDatosPersonas');

    // Esto esta relacionado con los TEST
    Route::get('datos/{name}', function ($name) {
        // TODO: resolver con un controller, no deberian haber funciones en la api
        echo "Nombre: ", $name;
    });
});
