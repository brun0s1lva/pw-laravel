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
Route::get('/', function () {
    return view('welcome');
});
//Route é um classe, que esta sendo acessado pelo metodo get, que está recebendo dois parametros
Route::get('/categoria','CategoriaController@index');
Route::post('/categoria/inserir','CategoriaController@store');
Route::get('/categoria/{id}','CategoriaController@destroy');

Route::get('/cliente','ClienteController@index');

Route::get('/contato','ContatoController@index');
Route::post('/contato/inserir','ContatoController@store');
Route::get('/contato/{id}','ContatoController@destroy');

Route::get('/pedido','PedidoController@index');


Route::get('/produto','ProdutoController@index');
Route::post('/produto/inserir','ProdutoController@store');
Route::get('/produto/{id}','ProdutoController@destroy');



