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
	Route::get('/cliente', function () {
    return view('clientes.dashboard');
		})->middleware('verified');

	Route::get('/cliente/personal','ClienteController@datos_personales')->name('cliente.personal');
	// Route::resource('/client','ClienteController');

});