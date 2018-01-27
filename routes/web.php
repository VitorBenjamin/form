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
Route::get('pacote-de-viagens/continente/{contiente}/', ['uses' => 'PaginasController@exibirContinente', 'as' => 'pagina.exibirContinente']);
Route::get('pacote-de-viagens/categoria/{categoria}/', ['uses' => 'PaginasController@exibirCategoria', 'as' => 'pagina.exibirCategoria']);
// Route::get('pacote-de-viagens/{categoria}', ['uses' => 'PaginasController@exibirCategoria', 'as' => 'pagina.exibirCategoria']);

Route::get('admin', ['uses' => 'Auth\LoginController@showLoginForm']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function() {
	Route::group(['prefix' => 'categoria'], function() {
		Route::get('', ['uses' => 'CategoriaController@index', 'as' => 'categoria.index']);
		Route::get('cadastrar', ['uses' => 'CategoriaController@create', 'as' => 'categoria.create']);
		Route::post('salvar', ['uses' => 'CategoriaController@salvar', 'as' => 'categoria.salvar']);
		Route::get('deletar-categoria/{id}', ['uses' => 'CategoriaController@excluir', 'as' => 'categoria.excluir']);
		Route::get('editar-categoria/{id}', ['uses' => 'CategoriaController@editar', 'as' => 'categoria.editar']);
		Route::put('atualizar-categoria/{id}', ['uses' => 'CategoriaController@update', 'as' => 'categoria.update']);
	});
	Route::group(['prefix' => 'continente'], function() {
		Route::get('', ['uses' => 'ContinenteController@index', 'as' => 'continente.index']);
		Route::get('cadastrar', ['uses' => 'ContinenteController@create', 'as' => 'continente.create']);
		Route::post('salvar', ['uses' => 'ContinenteController@salvar', 'as' => 'continente.salvar']);
		Route::get('deletar-continente/{id}', ['uses' => 'ContinenteController@excluir', 'as' => 'continente.excluir']);
		Route::get('editar-continente/{id}', ['uses' => 'ContinenteController@editar', 'as' => 'continente.editar']);
		Route::put('atualizar-continente/{id}', ['uses' => 'ContinenteController@update', 'as' => 'continente.update']);
	});
	Route::group(['prefix' => 'viagem'], function() {
		Route::get('', ['uses' => 'ViagemController@index', 'as' => 'viagem.index']);
		Route::get('cadastrar', ['uses' => 'ViagemController@create', 'as' => 'viagem.create']);
		Route::post('salvar', ['uses' => 'ViagemController@salvar', 'as' => 'viagem.salvar']);
		Route::get('deletar-viagem/{id}', ['uses' => 'ViagemController@excluir', 'as' => 'viagem.excluir']);
		Route::get('editar-viagem/{id}', ['uses' => 'ViagemController@editar', 'as' => 'viagem.editar']);
		Route::put('atualizar-viagem/{id}', ['uses' => 'ViagemController@update', 'as' => 'viagem.update']);
	});
});
