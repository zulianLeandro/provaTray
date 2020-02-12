<?php

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

/* Route Vendedor */
Route::get('/vendedor', 'VendedorController@index');

Route::get('/vendedor/create', 'VendedorController@create');
Route::post('/vendedor/create', 'VendedorController@inserirVendedor');


Route::post('/vendedor/update/{id}', 'VendedorController@update');
Route::get('/vendedor/{id}/editarVendedor', 'VendedorController@editarVendedor');

Route::get('/vendedor/{id}/destroy', 'VendedorController@destroy');


/*Route Vendas*/
Route::get('/venda/{id}/pedido', 'VendaController@pedido');

Route::get('/venda/{id}/venda', 'VendaController@venda');
Route::post('/venda/{id}/venda', 'VendaController@inserirPedido');

/* Route Email */
Route::get('/venda/mail', 'VendaController@mail');
