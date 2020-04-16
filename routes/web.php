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
    return view('welcome');
});

Route::get('/avisos', function () {
    return view('avisos');
});

Route::get('/page', function () {
    return view('page');
});

Route::get('/store', function () {
    return view('store');
});

Route::get('/pag1', function () {
    return view('authview/pag1');
})->middleware('auth');

Route::get('/pag2', function () {
    return view('authview/pag2');
})->middleware('auth');

Route::get('/pag3', function () {
    return view('authview/pag3');
})->middleware('auth');

Route::group(['prefix'=>'clientes'], function () {
    Route::get('/listar', 'ClientesController@listar')->middleware('auth');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
