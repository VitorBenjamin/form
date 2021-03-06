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
Route::get('pacote-de-viagens/continente/{contiente}/categoria/{categoria}/', ['uses' => 'PaginasController@exibirContinenteCategoria', 'as' => 'pagina.exibirContinenteCategoria']);
Route::get('todas-viagens', ['uses' => 'PaginasController@exibirTodasViagens', 'as' => 'pagina.exibirTodasViagens']);
Route::get('todos-artigos', ['uses' => 'PaginasController@exibirTodosArtigos', 'as' => 'pagina.exibirTodosArtigos']);

Route::get('pacote-de-viagem/{viagem}/', ['uses' => 'PaginasController@exibirViagem', 'as' => 'pagina.Viagem']);
Route::get('artigo/{artigo}/', ['uses' => 'PaginasController@exibirArtigo', 'as' => 'pagina.artigo']);

Route::post('enviar-contact', ['uses'=>'PaginasController@postContact', 'as' => 'postContact']);
Route::post('search', ['uses'=>'PaginasController@postSearch', 'as' => 'pagina.search']);

Route::post('enviar-reserva', ['uses'=>'PaginasController@postReserva', 'as' => 'postReserva']);
// Route::get('pacote-de-viagens/{categoria}', ['uses' => 'PaginasController@exibirCategoria', 'as' => 'pagina.exibirCategoria']);

Route::get('admin', ['uses' => 'Auth\LoginController@showLoginForm']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin','middleware' => 'auth'], function() {
	Route::group(['prefix' => 'categoria'], function() {
		Route::get('', ['uses' => 'CategoriaController@index', 'as' => 'categoria.index']);
		Route::get('cadastrar', ['uses' => 'CategoriaController@create', 'as' => 'categoria.create']);
		Route::post('salvar', ['uses' => 'CategoriaController@salvar', 'as' => 'categoria.salvar']);
		Route::get('deletar-categoria/{id}', ['uses' => 'CategoriaController@excluir', 'as' => 'categoria.excluir']);
		Route::get('editar-categoria/{id}', ['uses' => 'CategoriaController@editar', 'as' => 'categoria.editar']);
		Route::put('atualizar-categoria/{id}', ['uses' => 'CategoriaController@update', 'as' => 'categoria.update']);
		Route::get('mudar-estado-categoria/{id}', ['uses' => 'CategoriaController@mudarEstado', 'as' => 'categoria.mudarEstado']);

	});
	Route::group(['prefix' => 'parceiro'], function() {
		Route::get('', ['uses' => 'ParceiroController@index', 'as' => 'parceiro.index']);
		Route::get('cadastrar', ['uses' => 'ParceiroController@create', 'as' => 'parceiro.create']);
		Route::post('salvar', ['uses' => 'ParceiroController@salvar', 'as' => 'parceiro.salvar']);
		Route::get('deletar-parceiro/{id}', ['uses' => 'ParceiroController@excluir', 'as' => 'parceiro.excluir']);
		Route::get('editar-parceiro/{id}', ['uses' => 'ParceiroController@editar', 'as' => 'parceiro.editar']);
		Route::put('atualizar-parceiro/{id}', ['uses' => 'ParceiroController@update', 'as' => 'parceiro.update']);
		Route::get('mudar-estado-parceiro/{id}', ['uses' => 'ParceiroController@mudarEstado', 'as' => 'parceiro.mudarEstado']);

	});
	Route::group(['prefix' => 'continente'], function() {
		Route::get('', ['uses' => 'ContinenteController@index', 'as' => 'continente.index']);
		Route::get('cadastrar', ['uses' => 'ContinenteController@create', 'as' => 'continente.create']);
		Route::post('salvar', ['uses' => 'ContinenteController@salvar', 'as' => 'continente.salvar']);
		Route::get('deletar-continente/{id}', ['uses' => 'ContinenteController@excluir', 'as' => 'continente.excluir']);
		Route::get('editar-continente/{id}', ['uses' => 'ContinenteController@editar', 'as' => 'continente.editar']);
		Route::put('atualizar-continente/{id}', ['uses' => 'ContinenteController@update', 'as' => 'continente.update']);
		Route::get('mudar-estado-continente/{id}', ['uses' => 'ContinenteController@mudarEstado', 'as' => 'continente.mudarEstado']);

	});
	Route::group(['prefix' => 'viagem'], function() {
		Route::get('', ['uses' => 'ViagemController@index', 'as' => 'viagem.index']);
		Route::get('cadastrar', ['uses' => 'ViagemController@create', 'as' => 'viagem.create']);
		Route::post('salvar', ['uses' => 'ViagemController@salvar', 'as' => 'viagem.salvar']);
		Route::post('salvar-galeria', ['uses' => 'ViagemController@salvarGaleria', 'as' => 'viagem.salvarGaleria']);
		Route::get('exibir-galeria/{id}', ['uses' => 'ViagemController@exibirGaleria', 'as' => 'viagem.exibirGaleria']);
		Route::get('deletar-imagem-galeria/{id}', ['uses' => 'ViagemController@deletarImgGaleria', 'as' => 'viagem.deletarImgGaleria']);
		Route::get('deletar-viagem/{id}', ['uses' => 'ViagemController@excluir', 'as' => 'viagem.excluir']);
		Route::get('editar-viagem/{id}', ['uses' => 'ViagemController@editar', 'as' => 'viagem.editar']);
		Route::put('atualizar-viagem/{id}', ['uses' => 'ViagemController@update', 'as' => 'viagem.update']);
		Route::get('mudar-estado-viagem/{id}', ['uses' => 'ViagemController@mudarEstado', 'as' => 'viagem.mudarEstado']);

		Route::get('mudar-estado-img-galera/{id}', ['uses' => 'ViagemController@mudarEstadoGaleria', 'as' => 'viagem.mudarEstadoGaleria']);

	});
	Route::group(['prefix' => 'artigo'], function() {
		Route::get('', ['uses' => 'ArtigoController@index', 'as' => 'artigo.index']);
		Route::get('cadastrar', ['uses' => 'ArtigoController@create', 'as' => 'artigo.create']);
		Route::post('salvar', ['uses' => 'ArtigoController@salvar', 'as' => 'artigo.salvar']);
		Route::get('deletar-artigo/{id}', ['uses' => 'ArtigoController@excluir', 'as' => 'artigo.excluir']);
		Route::get('editar-artigo/{id}', ['uses' => 'ArtigoController@editar', 'as' => 'artigo.editar']);
		Route::put('atualizar-artigo/{id}', ['uses' => 'ArtigoController@update', 'as' => 'artigo.update']);
		Route::get('mudar-estado-artigo/{id}', ['uses' => 'ArtigoController@mudarEstado', 'as' => 'artigo.mudarEstado']);

	});
	Route::group(['prefix' => 'carousel'], function() {
		Route::get('', ['uses' => 'CarouselController@index', 'as' => 'carousel.index']);
		Route::get('cadastrar/{id}', ['uses' => 'CarouselController@create', 'as' => 'carousel.create']);
		Route::post('salvar', ['uses' => 'CarouselController@salvar', 'as' => 'carousel.salvar']);
		Route::get('deletar-carousel/{id}', ['uses' => 'CarouselController@excluir', 'as' => 'carousel.excluir']);
		Route::get('editar-carousel/{id}', ['uses' => 'CarouselController@editar', 'as' => 'carousel.editar']);
		Route::put('atualizar-carousel/{id}', ['uses' => 'CarouselController@update', 'as' => 'carousel.update']);
		Route::get('mudar-estado-carousel/{id}', ['uses' => 'CarouselController@mudarEstado', 'as' => 'carousel.mudarEstado']);

	});
	Route::group(['prefix' => 'cliente'], function() {
		Route::get('', ['uses' => 'ClienteController@index', 'as' => 'cliente.index']);
		Route::get('cadastrar', ['uses' => 'ClienteController@create', 'as' => 'cliente.create']);
		Route::post('salvar', ['uses' => 'ClienteController@salvar', 'as' => 'cliente.salvar']);
		Route::get('deletar-cliente/{id}', ['uses' => 'ClienteController@excluir', 'as' => 'cliente.excluir']);
		Route::get('editar-cliente/{id}', ['uses' => 'ClienteController@editar', 'as' => 'cliente.editar']);
		Route::put('atualizar-cliente/{id}', ['uses' => 'ClienteController@update', 'as' => 'cliente.update']);
		Route::get('mudar-estado-cliente/{id}', ['uses' => 'ClienteController@mudarEstado', 'as' => 'cliente.mudarEstado']);

	});
	Route::group(['prefix' => 'dica'], function() {
		Route::get('', ['uses' => 'DicaController@index', 'as' => 'dica.index']);
		Route::get('cadastrar', ['uses' => 'DicaController@create', 'as' => 'dica.create']);
		Route::post('salvar', ['uses' => 'DicaController@salvar', 'as' => 'dica.salvar']);
		Route::get('deletar-dica/{id}', ['uses' => 'DicaController@excluir', 'as' => 'dica.excluir']);
		Route::get('editar-dica/{id}', ['uses' => 'DicaController@editar', 'as' => 'dica.editar']);
		Route::put('atualizar-dica/{id}', ['uses' => 'DicaController@update', 'as' => 'dica.update']);
		Route::get('mudar-estado-dica/{id}', ['uses' => 'DicaController@mudarEstado', 'as' => 'dica.mudarEstado']);

	});
});
