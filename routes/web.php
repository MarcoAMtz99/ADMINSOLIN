<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes(['register' => false]);
Auth::routes(['verify' => true,'register' => false,]);
Route::get('/registrar','ClienteController@create')->name('cliente.registro');
Route::post('nuevo/cliente','ClienteController@store')->name('cliente.store');
//Rutas de vistas estaticas
Route::get('/inicio','ClienteController@inicio')->name('cliente.inicio');
Route::get('/nosotros','ClienteController@nosotros')->name('cliente.nosotros');
Route::get('/faqs','ClienteController@faqs')->name('cliente.faqs');
Route::get('/rastreo/guia','ClienteController@rastrear')->name('cliente.rastrear');
Route::get('cliente/login','ClienteController@login')->name('cliente.login');
Route::get('/contacto','ClienteController@contacto')->name('cliente.contacto');

//
Route::group(['middleware' => 'auth','verified'], function () {

 	Route::get('/home', 'HomeController@index')->name('home');

	Route::resource('/users','Admin\UserController');
	Route::resource('/cotizaciones','CotizacionController');
    Route::resource('/datosfiscales','DatosFiscalesController');

	Route::get('/cliente/personal','ClienteController@datos_personales')->name('cliente.personal');
    Route::get('/cliente/fiscales','ClienteController@datosfiscales')->name('cliente.fiscales');
	Route::get('/cliente/cotizar','ClienteController@cotizar')->name('cliente.cotizar');
	Route::get('/cliente/rastreo','ClienteController@rastreo')->name('cliente.rastreo');
	Route::get('/cliente/credito','ClienteController@credito')->name('cliente.credito');
	Route::get('/cliente/historial','ClienteController@historial')->name('cliente.historial');
	Route::get('/cliente/direcciones','ClienteController@direcciones')->name('cliente.direcciones');
	Route::get('/cliente','ClienteController@index')->name('cliente.index')->middleware('verified');

	Route::resource('/direccion','DireccionController');
    Route::delete('/cliente/destroy/{id}', 'ClienteController@destroy')->name('cliente.destroy');

    Route::resource('/users','Admin\UserController');
    Route::delete('/users/destroy/{id}', 'Admin\UserController@destroy')->name('users.destroy');
    Route::put('/users/update/{id}', 'Admin\UserController@update')->name('users.update');

    Route::resource('/cotizacion','CotizacionController');

 


    Route::get('/reporteuno',function(){
    	return view('Reportes.reporteuno');
    })->name('reporte.uno');
     Route::get('/reportedos',function(){
    	return view('Reportes.reportedos');
    })->name('reporte.dos');
});
