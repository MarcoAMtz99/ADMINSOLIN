<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Auth::routes(['verify' => true]);

Route::group(['middleware' => 'auth','verified'], function () {

 	Route::get('/home', 'HomeController@index')->name('home');
	Route::resource('/users','Admin\UserController');
	// Route::get('/cliente', function () {
 //    return view('clientes.dashboard');
	// 	})->middleware('verified');

	Route::get('/cliente/personal','ClienteController@datos_personales')->name('cliente.personal');
	Route::get('/cliente/cotizar','ClienteController@cotizar')->name('cliente.cotizar');
	Route::get('/cliente','ClienteController@index')->name('cliente.index')->middleware('verified');
	// Route::resource('/client','ClienteController');
    Route::delete('/cliente/destroy/{id}', 'ClienteController@destroy')->name('cliente.destroy');
});
