<?php

use Illuminate\Support\Facades\Route;


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

Route::get('/', 'App\Http\Controllers\HomeController');



Route::prefix('/config')->group(function(){

    Route::get('/', 'App\Http\Controllers\ConfigController@index');
    Route::get('info', 'App\Http\Controllers\ConfigController@info');
    Route::get('permissoes', 'App\Http\Controllers\ConfigController@permissoes');

});



Route::prefix('/produtos')->group(function(){

    Route::get('/', 'App\Http\Controllers\ProdutosController@getAll');
    Route::get('novo', 'App\Http\Controllers\ProdutosController@create');
    Route::post('novo','App\Http\Controllers\ProdutosController@store')->name('registra_produtos');
    Route::get('ver/{id}', 'App\Http\Controllers\ProdutosController@showId');
    Route::get('editar/{id}', 'App\Http\Controllers\ProdutosController@edit');
    Route::post('editar/{id}', 'App\Http\Controllers\ProdutosController@update')->name('alterar_produto');
    Route::get('excluir/{id}', 'App\Http\Controllers\ProdutosController@delete');
    Route::post('excluir/{id}', 'App\Http\Controllers\ProdutosController@destroy')->name('excluir_produto');
    
});


Route::fallback(function(){

    return view('404');

});
