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
    return view('layouts/app');
});
Route::get('trabajo',function(){
	return view('trabajos.mas');
});

Route::get('inicio',function(){
	return view('layouts/app');
});
Route::get('porco',function(){
	return view('desarrollosof/porco');
});
Route::get('huayna',function(){
	return view('desarrollosof.huayna');
});
Route::get('digitalizacion',function(){
	return view('desarrollosof.digitalizacion');
});
Route::get('camaras',function(){
	return view('instalacion.camaras');
});
Route::get('today',function(){
	return view('camaras.today');
});
Route::get('today1',function(){
	return view('camaras.today1');
});
Route::get('clientes',function(){
	return view('clientes.clientes');
});
Route::get('bio',function(){
	return view('camaras.bio');
});
Route::get('install',function(){
	return view('camaras.install');
});