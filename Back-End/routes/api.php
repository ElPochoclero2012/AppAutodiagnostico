<?php

use App\Http\Controllers\PersonaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth',

], 
    function ($router) {
    Route::get('login', 'AuthController@login');
    Route::get('logout', 'AuthController@logout');
    Route::get('refresh', 'AuthController@refresh');
    Route::get('me', 'AuthController@me');

    // http://localhost:8000/api/auth/register?name=Horacio&email=horaciomateos@gmail.com&password=123456
    // Route::post('login', 'AuthController@login');
    // Route::post('logout', 'AuthController@logout');
    // Route::post('refresh', 'AuthController@refresh');
    // Route::post('me', 'AuthController@me');

});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('todo', 'PersonaController@index');

Route::get('probame', 'PersonaController@anda');
Route::get('apellido', 'PersonaController@apellido');
Route::get('sintomas', 'PersonaController@sintomas');
Route::get('datos', 'PersonaController@datos');
Route::get('/mostrar/{id}', 'PersonaController@mostrarDatosPersonas');




// Esto esta relacionado con los TEST
Route::get('datos/{name}', function ($name) {

    echo "Nombre: ", $name;

});