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

Route::get('/', function () {
    return view('inicio');
});
Route::get('/nosotros', function () {
    return view('nosotros');
});
Route::get('/contacto', function () {
    return view('contacto');
});
//Rutas para el personal
Route::post('/personal/store', 'PersonalController@store');
Route::post('/personal/update/{RUTP}', 'PersonalController@update');
Route::get('/personal/destroy/{RUTP}', 'PersonalController@destroy');
Route::resource('personal', 'PersonalController');

//Rutas para el cliente
Route::post('/clientes/store', 'ClientesController@store');
Route::post('/clientes/update/{RUTP}', 'ClientesController@update');
Route::get('/clientes/destroy/{RUTP}', 'ClientesController@destroy');
Route::resource('clientes', 'ClientesController');

//Rutas para el inventario
Route::post('/inventario/store', 'InventarioController@store');
Route::post('/inventario/update/{RUTP}', 'InventarioController@update');
Route::get('/inventario/destroy/{RUTP}', 'InventarioController@destroy');
Route::resource('inventario', 'InventarioController');

//Rutas para el proveedor
Route::post('/proveedor/store', 'ProveedorController@store');
Route::post('/proveedor/update/{RUTP}', 'ProveedorController@update');
Route::get('/proveedor/destroy/{RUTP}', 'ProveedorController@destroy');
Route::resource('proveedor', 'ProveedorController');
