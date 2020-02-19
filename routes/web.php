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


Route::get('/', function(){
    return view('index');
});

Route::get('/formAgregarProducto', 'ProductController@create');
Route::post('/agregarProducto', 'ProductController@store');
//Route::get('/MostrarProducto/{id}', 'ProductController@show');
Route::get('/mostrar', function(){
    return view('crudProductos');
});

Route::get('/mostrarProductos/{categoria}', 'ProductController@productosCategoria');
Route::get('/mostrarProductos/{subCategoria}', 'ProductController@productosSubCategoria');

Route::get('/eliminarProducto/{id}', 'ProductController@destroy');
Route::get('/modificarProducto/{id}/{columna}/{datoNuevo}', 'ProductController@edit');
Route::get('/obtenerMasInfo/{id}', 'ImageController@obtenerMasInfo');
Route::get('/modificarDatosStock/{id}/{datoNuevo}/{columna}', 'StockController@modificarDatosStock');

Route::get('/categoria/{ropa}', 'ProductController@vistaProductos');


Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();