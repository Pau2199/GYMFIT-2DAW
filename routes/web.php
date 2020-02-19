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

Route::get('/mostrarProductos/{categoria}', 'ProductController@peticionAjax');
Route::get('/eliminarProducto/{id}', 'ProductController@destroy');
Route::get('/obtenerImagenes/{id}', 'ImageController@obtenerRutas');

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/perfil','UserController@perfil');
Route::get('/perfil/rellenarPerfil','UserController@verPerfil');
Route::get('/perfil/rellenarDireccion/{datosDireccion}','AdressController@crearDireccion');