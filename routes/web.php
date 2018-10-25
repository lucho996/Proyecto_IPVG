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
Route::get('/intranet/index', function () {
    return view('intranet.index');
});
//Rutas para el personal
Route::post('/personal/store', 'PersonalController@store');
Route::post('/personal/update/{RUTP}', 'PersonalController@update');
Route::get('/personal/destroy/{RUTP}', 'PersonalController@destroy');
Route::resource('personal', 'PersonalController');

//Rutas para el cliente
Route::post('/clientes/store', 'ClientesController@store');
Route::post('/clientes/update/{RUT_CLIENTE}', 'ClientesController@update');
Route::get('/clientes/destroy/{RUT_CLIENTE}', 'ClientesController@destroy');
Route::resource('clientes', 'ClientesController');

//Rutas para el inventario
Route::post('/inventario/store', 'InventarioController@store');
Route::post('/inventario/update/{ID_INVENTARIO}', 'InventarioController@update');
Route::get('/inventario/destroy/{ID_INVENTARIO}', 'InventarioController@destroy');
Route::resource('inventario', 'InventarioController');

//Rutas para el proveedor
Route::post('/proveedor/store', 'ProveedorController@store');
Route::post('/proveedor/update/{ID_PROVEEDOR}', 'ProveedorController@update');
Route::get('/proveedor/destroy/{ID_PROVEEDOR}', 'ProveedorController@destroy');
Route::resource('proveedor', 'ProveedorController');

//Rutas para el producto
Route::post('/producto/store', 'ProductoController@store');
Route::post('/producto/update/{ID_PRODUCTO}', 'ProductoController@update');
Route::get('/producto/destroy/{ID_PRODUCTO}', 'ProductoController@destroy');
Route::resource('producto', 'ProductoController');

//Rutas para el equipo a utilizar
Route::post('/equipos_internos/store', 'Equipo_internoController@store');
Route::post('/equipos_internos/update/{ID_EH}', 'Equipo_internoController@update');
Route::get('/equipos_internos/destroy/{ID_EH}', 'Equipo_internoController@destroy');
Route::resource('equipos_internos', 'Equipo_internoController');
