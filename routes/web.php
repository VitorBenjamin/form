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


Route::get('/', ['uses' => 'PaginasController@index', 'as' => 'pagina.index']);
Route::get('viagens/continente/{contiente}', ['uses' => 'PaginasController@exibirContinente', 'as' => 'pagina.exibirContinente']);
Route::get('viagens/categoria/{categoria}', ['uses' => 'PaginasController@exibirCategoria', 'as' => 'pagina.exibirCategoria']);
Route::get('pacote-de-viagens/{categoria}', ['uses' => 'PaginasController@exibirCategoria', 'as' => 'pagina.exibirCategoria']);

Route::get('admin', ['uses' => 'Auth\LoginController@showLoginForm']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
