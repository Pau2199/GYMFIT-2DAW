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


Route::get('/', 'ProductController@indexPag');

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

Route::get('/categoria/{category}','ProductController@index');
Route::get('/categoria/{category}/{numpag}','ProductController@obtenerProductos');


Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/perfil','UserController@perfil');
Route::get('/perfil/rellenarPerfil','UserController@verPerfil');
Route::get('/perfil/crearDireccion/{datosDireccion}','AdressController@crearDireccion');
Route::get('/perfil/modificar/{datoNuevo}/{columna}','AdressController@modificar');
Route::get('/perfil/borrar','UserController@borrar');

Route::get('/carrito', function(){
    return view('vistaCarrito');
});

Route::get('/listaUsuarios', 'UserController@cargarUsuarios');

Route::get('/carrito/mostrar/{id}','ProductController@meterCarrito');

Route::get('/pagar', function(){
    return view('realizarPago');
});


Route::get('/pagar/{datos}','OrderController@pedido');
Route::get('logout',["as" => "logout", "uses" => 'HomeController@logout']);
  