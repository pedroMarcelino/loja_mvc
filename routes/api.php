<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', 'APIController@login');
Route::get('login', 'APIController@logout');

Route::group(['middleware' => 'auth.jwt','prefix' => 'v1'], function () {
    Route::get('/vendedores', 'VendedoresController@index');
    Route::get('/vendedores/{id}', 'VendedoresController@show');
    Route::post('/vendedores', 'VendedoresController@store');
    Route::put('/vendedores/{id}', 'VendedoresController@update');
    Route::delete('/vendedores/{id}', 'VendedoresController@destroy');

    Route::get('categorias', 'CategoriasController@indexAPI');
    Route::get('categorias/{id}', 'CategoriasController@showAPI');
    Route::post('categorias', 'CategoriasController@storeViaApi');
    Route::put('categorias/{id}', 'CategoriasController@updateAPI');
    Route::delete('/categorias/{id}', 'CategoriasController@destroyAPI');
});
