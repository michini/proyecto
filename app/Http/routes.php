<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => ['web']], function () {
    Route::auth();
    Route::group(['middleware'=>'role:admin'],function(){
        Route::get('home', 'HomeController@index');
        Route::get('api','EventoController@api');
        Route::get('apiLugar','EventoController@SearchPlace');
        Route::resource('user','UserController');
        Route::resource('evento','EventoController');
        Route::resource('cliente','ClienteController');
        Route::resource('contrato','ContratoController');
    });
});

Route::get('hora','EventoController@date');

