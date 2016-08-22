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

Route::get('/', 'FrontController@index');
Route::get('contacto', 'FrontController@contacto');
Route::get('reviews', 'FrontController@reviews');
Route::get('admin', 'FrontController@admin');


Route::get('pruebas', function(){
	return view('login');
});
Route::resource('usuario', 'UsuarioController');


Route::get('prueba', function(){
	return view('prueba');
});