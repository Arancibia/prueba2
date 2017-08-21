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


//LOGIN
Route::resource('/','LoginController');
Route::resource('login','LoginController@store');
Route::resource('logout','LoginController@logout');

//errores
Route::get('error',function(){
	abort(404);
});

//CREAR ADMINISTRADORES
Route::resource("administrador","AdministradorController");

//USUARIOS
Route::resource("usuario","UsuarioController");

//SISTEMA INTEGRAL DE MONITOREO
Route::get("sistema_integral_monitoreo","ReportesController@sistema_integral_monitoreo");
Route::get("sistema_integral_monitoreo_busqueda/{fecha_inicio}/{fecha_fin}/{id_tecnico}","ReportesController@sistema_integral_monitoreo_busqueda");

//HOJA DE VERIFICACION
Route::get("hoja_de_verificacion","ReportesController@hoja_de_verificacion");
Route::get("hoja_de_verificacion_busqueda/{fecha_inicio}/{fecha_fin}/{id_tecnico}","ReportesController@hoja_de_verificacion_busqueda");

//MANTENIMIENTO - MAQUINA TWIN SHOT
Route::get("maquina_twin_shot","ReportesController@maquina_twin_shot");
Route::get("maquina_twin_shot_busqueda/{fecha_inicio}/{fecha_fin}/{id_tecnico}","ReportesController@maquina_twin_shot_busqueda");

//MANTENIMIENTO - MAQUINA SPRAVAC
Route::get("maquina_spravac","ReportesController@maquina_spravac");
Route::get("maquina_spravac_busqueda/{fecha_inicio}/{fecha_fin}/{id_tecnico}","ReportesController@maquina_spravac_busqueda");

//MANTENIMIENTO - MAQUINA ZOOTEC
Route::get("maquina_zootec","ReportesController@maquina_zootec");
Route::get("maquina_zootec_busqueda/{fecha_inicio}/{fecha_fin}/{id_tecnico}","ReportesController@maquina_zootec_busqueda");