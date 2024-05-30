<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

$router->get('/ingresos', 'IngresoController@index');
$router->post('/ingresos', 'IngresoController@store');
$router->get('/ingresos/{id}', 'IngresoController@show');
$router->put('/ingresos/{id}', 'IngresoController@update');
$router->delete('/ingresos/{id}', 'IngresoController@destroy');

/*Route::get('/ingresos', 'IngresoController@index');
Route::post('/ingresos', 'IngresoController@store');
Route::get('/ingresos/{id}', 'IngresoController@show');
Route::put('/ingresos/{id}', 'IngresoController@update');
Route::delete('/ingresos/{id}', 'IngresoController@destroy');*/

Route::get('/programas', 'ProgramaController@index');
Route::get('/salas', 'SalaController@index');
Route::get('/responsables', 'ResponsableController@index');