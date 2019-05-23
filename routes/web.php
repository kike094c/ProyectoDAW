<?php
use App\Compania;
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
Auth::routes();
Route::get('/home', 'HomeController@index');
//rutas para técnicos
//Incidencias tecnicos
//insertar
Route::get('tecnico/insertar/incidencia', 'incidenciasController@getCreateTecnico')->middleware('auth', 'role:user');
Route::post('tecnico/insertar/incidencia', 'incidenciasController@postCreateTecnico')->middleware('auth', 'role:user');
//listar
Route::get('tecnico/listar/incidencia', 'incidenciasController@getIndexTecnico')->middleware('auth', 'role:user');

Route::get('tecnico/insertar/incidencia/{id}','incidenciasController@getHandling')->middleware('auth', 'role:user');
Route::get('tecnico/insertar/incidencia/causante/{id}','incidenciasController@getCausante')->middleware('auth', 'role:user');
Route::get('tecnico/insertar/incidencia/tipo/{id}','incidenciasController@getTipoCausante')->middleware('auth', 'role:user');

//Rustas para coordinador

//Incidencias
Route::get('/coordinador/insertar/incidencia', function () {
    return view('/coordinador/insertincidencias');
})->middleware('auth', 'role:admin');

//handlings Coordinador
//insertar
Route::get('coordinador/insertar/handling', 'HandlingsController@getCreate')->middleware('auth', 'role:admin');
Route::post('coordinador/insertar/handling', 'HandlingsController@postCreate')->middleware('auth', 'role:admin');
//listar
Route::get('coordinador/listar/handling', 'HandlingsController@getIndex')->middleware('auth', 'role:admin');
//Deshabilitar
Route::put('coordinador/deshabilitar/handling/{id}', 'HandlingsController@putDisable')->middleware('auth', 'role:admin');
//Habilitar
Route::put('coordinador/habilitar/handling/{id}', 'HandlingsController@putEnable')->middleware('auth', 'role:admin');
//Modificar
Route::get('coordinador/modificar/handling/{id}', 'HandlingsController@getEdit')->middleware('auth', 'role:admin');
Route::put('coordinador/modificar/handling/{id}', 'HandlingsController@putEdit')->middleware('auth', 'role:admin');

//Compañias Coordinador
//insertar
Route::get('coordinador/insertar/compania', 'companiasController@getCreate')->middleware('auth', 'role:admin');
Route::post('coordinador/insertar/compania', 'companiasController@postCreate')->middleware('auth', 'role:admin');
//listar
Route::get('coordinador/listar/compania', 'companiasController@getIndex')->middleware('auth', 'role:admin');
//Deshabilitar
Route::put('coordinador/deshabilitar/compania/{id}', 'companiasController@putDisable')->middleware('auth', 'role:admin');
//Habilitar
Route::put('coordinador/habilitar/compania/{id}', 'companiasController@putEnable')->middleware('auth', 'role:admin');
//Modificar
Route::get('coordinador/modificar/compania/{id}', 'companiasController@getEdit')->middleware('auth', 'role:admin');
Route::put('coordinador/modificar/compania/{id}', 'companiasController@putEdit')->middleware('auth', 'role:admin');

//Tipos Causantes Coordinador
//insertar
Route::get('coordinador/insertar/tipo', 'TiposCausantesController@getCreate')->middleware('auth', 'role:admin');
Route::post('coordinador/insertar/tipo', 'TiposCausantesController@postCreate')->middleware('auth', 'role:admin');
//listar
Route::get('coordinador/listar/tipo', 'TiposCausantesController@getIndex')->middleware('auth', 'role:admin');
//Deshabilitar
Route::put('coordinador/deshabilitar/tipo/{id}', 'TiposCausantesController@putDisable')->middleware('auth', 'role:admin');
//Habilitar
Route::put('coordinador/habilitar/tipo/{id}', 'TiposCausantesController@putEnable')->middleware('auth', 'role:admin');
//Modificar
Route::get('coordinador/modificar/tipo/{id}', 'TiposCausantesController@getEdit')->middleware('auth', 'role:admin');
Route::put('coordinador/modificar/tipo/{id}', 'TiposCausantesController@putEdit')->middleware('auth', 'role:admin');

//Causantes Coordinador
//insertar
Route::get('coordinador/insertar/causante', 'CausantesController@getCreate')->middleware('auth', 'role:admin');
Route::post('coordinador/insertar/causante', 'CausantesController@postCreate')->middleware('auth', 'role:admin');
//listar
Route::get('coordinador/listar/causante', 'CausantesController@getIndex')->middleware('auth', 'role:admin');
//Deshabilitar
Route::put('coordinador/deshabilitar/causante/{id}', 'CausantesController@putDisable')->middleware('auth', 'role:admin');
//Habilitar
Route::put('coordinador/habilitar/causante/{id}', 'CausantesController@putEnable')->middleware('auth', 'role:admin');
//Modificar
Route::get('coordinador/modificar/causante/{id}', 'CausantesController@getEdit')->middleware('auth', 'role:admin');
Route::put('coordinador/modificar/causante/{id}', 'CausantesController@putEdit')->middleware('auth', 'role:admin');
//Relacionar
Route::get('coordinador/relacionar/causante', 'CausantesController@getRelation')->middleware('auth', 'role:admin');
Route::post('coordinador/relacionar/causante', 'CausantesController@postRelation')->middleware('auth', 'role:admin');
Route::get('coordinador/listar/relacion/causante', 'CausantesController@getIndexRelation')->middleware('auth', 'role:admin');


//Incidencias Coordinador
//insertar
Route::get('coordinador/insertar/incidencia', 'incidenciasController@getCreate')->middleware('auth', 'role:admin');
Route::post('coordinador/insertar/incidencia', 'incidenciasController@postCreate')->middleware('auth', 'role:admin');
//listar
Route::get('coordinador/listar/incidencia', 'incidenciasController@getIndex')->middleware('auth', 'role:admin');
//Eliminar
Route::post('coordinador/eliminar/incidencia/{id}', 'incidenciasController@destroy')->middleware('auth', 'role:admin');

Route::get('coordinador/insertar/incidencia/{id}','incidenciasController@getHandling')->middleware('auth', 'role:admin');
Route::get('coordinador/insertar/incidencia/causante/{id}','incidenciasController@getCausante')->middleware('auth', 'role:admin');
Route::get('coordinador/insertar/incidencia/tipo/{id}','incidenciasController@getTipoCausante')->middleware('auth', 'role:admin');
//Usuarios
Route::get('coordinador/insertar/usuario','UserController@getCreate')->middleware('auth', 'role:admin');
Route::post('coordinador/insertar/usuario','UserController@create')->middleware('auth', 'role:admin');
//listar
Route::get('coordinador/listar/usuario', 'UserController@getIndex')->middleware('auth', 'role:admin');
//Deshabilitar
Route::put('coordinador/deshabilitar/usuario/{id}', 'UserController@putDisable')->middleware('auth', 'role:admin');
//Habilitar
Route::put('coordinador/habilitar/usuario/{id}', 'UserController@putEnable')->middleware('auth', 'role:admin');
//Modificar
Route::get('coordinador/modificar/usuario/{id}', 'UserController@getEdit')->middleware('auth', 'role:admin');
Route::put('coordinador/modificar/usuario/{id}', 'UserController@putEdit')->middleware('auth', 'role:admin');
