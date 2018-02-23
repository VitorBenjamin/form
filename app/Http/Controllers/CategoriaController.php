<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Categoria;
use Intervention\Image\Facades\Image;
class CategoriaController extends Controller
{
	public function index()
	{
		$categoria = Categoria::all('id','nome','descricao','ativo');
		return view('categoria.admin.index',compact('categoria'));
	}
	public function create()
	{
		return view('categoria.admin.create');
	}

	public function editar($id)
	{
		$categoria = Categoria::find($id);
		return view('categoria.admin.editar',compact('categoria'));
	}
	public function mudarEstado($id)
	{
		$categoria = Categoria::find($id);
		if ($categoria->ativo) {
			$categoria->ativo = false;
			$msg ="Categoria ".$categoria->nome." DESATIVADO com Sucesso!!!";
		}else{
			$categoria->ativo = true;
			$msg ="Categoria ".$categoria->nome." ATIVADA com Sucesso!!!";
		}
		$categoria->save();
		Session::flash('flash_message',[
			'msg'=>$msg,
			'class'=>"alert alert-success alert-dismissible"
		]);
		return redirect()->route('categoria.index');
	}

	public function salvar(Request $request)
	{	
		$mimeCapa = $request->file('capa')->getClientMimeType();
		$mimeThumb = $request->file('thumb')->getClientMimeType();
		$data = [
			'nome' => $request->nome,
			'descricao' => $request->descricao ? $request->descricao : null,
		];
		if ($mimeCapa == "image/jpeg" || $mimeCapa == "image/png") {
			$file = Image::make($request->file('capa'));
			$capa_img_64 = (string) $file->encode('data-url');
			$data['capa'] = $capa_img_64;
		}
		if ($mimeThumb == "image/jpeg" || $mimeThumb == "image/png") {
			$file = Image::make($request->file('thumb'));
			$thumb_img_64 = (string) $file->encode('data-url');
			$data['thumb'] = $thumb_img_64;
		}
		$categoria = Categoria::create($data);
		Session::flash('flash_message',[
			'msg'=>"Cadastro da Categoria Realizado com Sucesso!!!",
			'class'=>"alert alert-success alert-dismissible"
		]);
		return redirect()->route('categoria.create');
	}
	public function update(Request $request,$id)
	{	
		$categoria = Categoria::find($id);
		$data = [
			'nome' => $request->nome,
			'descricao' => $request->descricao ? $request->descricao : null,
		];
		if ($request->file('capa')) {
			$mimeCapa = $request->file('capa')->getClientMimeType();
			if ($mimeCapa == "image/jpeg" || $mimeCapa == "image/png") {
				$file = Image::make($request->file('capa'));
				$capa_img_64 = (string) $file->encode('data-url');
				$data['capa'] = $capa_img_64;
			}
		}else{
			$data['capa'] = $categoria->capa;
		}
		
		if ($request->file('thumb')) {
			$mimeThumb = $request->file('thumb')->getClientMimeType();
			if ($mimeThumb == "image/jpeg" || $mimeThumb == "image/png") {
				$file = Image::make($request->file('thumb'));
				$thumb_img_64 = (string) $file->encode('data-url');
				$data['thumb'] = $thumb_img_64;
			}
		}else{
			$data['thumb'] = $categoria->thumb;
		}
		
		$categoria->update($data);

		Session::flash('flash_message',[
			'msg'=>"Categoria Atualizada com Sucesso!!!",
			'class'=>"alert alert-success alert-dismissible"
		]);
		return redirect()->route('categoria.index');
	}
	public function excluir($id)
	{
		$categoria = Categoria::find($id);
		$categoria->delete();

		Session::flash('flash_message',[
			'msg'=>"Cadastro da Categoria Realizado com Sucesso!!!",
			'class'=>"alert alert-success alert-dismissible"
		]);
		return redirect()->route('categoria.index');
	}
}
