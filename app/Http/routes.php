<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/contas', "ContasPagarController@listar");
Route::get('/contas/cadastro', "ContasPagarController@cadastro");
Route::post('/contas/salvar', "ContasPagarController@salvar");
Route::get('/contas/editar/{id}', "ContasPagarController@editar");
Route::get('/contas/apagar/{id}', "ContasPagarController@apagar");
Route::post('/contas/update/{id}', "ContasPagarController@update");
