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

Route::get('/clientes/destroy/{RUT_CLIENTE}', 'ClientesController@destroy');

Route::get('/clientes/edit/{RUT_CLIENTE}', 'ClientesController@edit');
Route::post('/clientes/edit/{RUT_CLIENTE}', 'ClientesController@edit');

Route::resource('clientes', 'ClientesController');
Route::get('/clientes/show/{RUT_CLIENTE}', 'ClientesController@show');
//Rutas para el inventario
Route::post('/inventario/store', 'InventarioController@store');
Route::post('/inventario/update/{ID_INVENTARIO}', 'InventarioController@update');
Route::get('/inventario/destroy/{ID_INVENTARIO}', 'InventarioController@destroy');
Route::get('/inventario/edit/{ID_INVENTARIO}', 'InventarioController@edit');
Route::post('/inventario/edit/{ID_INVENTARIO}', 'InventarioController@edit');
Route::resource('inventario', 'InventarioController');
Route::get('/inventario/show/{ID_INVENTARIO}', 'InventarioController@show');
//Rutas para el proveedor
Route::post('/proveedor/store', 'ProveedorController@store');
Route::post('/proveedor/update/{RUTP}', 'ProveedorController@update');
Route::get('/proveedor/destroy/{RUTP}', 'ProveedorController@destroy');
Route::resource('proveedor', 'ProveedorController');

