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
		$categoria = Categoria::all();
		return view('categoria.admin_index',compact('categoria'));
	}
	public function create()
	{
		return view('categoria.create');
	}

	public function editar($id)
	{
		$categoria = Categoria::find($id);
		return view('categoria.editar',compact('categoria'));
	}

	public function salvar(Request $request,$id)
	{	
		$mimeCapa = $request->file('capa')->getClientMimeType();
		$mimeThumb = $request->file('thumb')->getClientMimeType();
		$data = ['nome' => $request->nome];
		if ($mimeCapa == "image/jpeg" || $mimeCapa == "image/png") {
			$file = Image::make($request->file('capa'));
			$capa_img_64 = (string) $file->encode('data-url');
			$data['capa'] = $capa_img_64;
		}
		if ($mimeThumb == "image/jpeg" || $mimeThumb == "image/png") {
			$file = Image::make($request->file('capa'));
			$thumb_img_64 = (string) $file->encode('data-url');
			$data['thumb'] = $thumb_img_64;
		}
		$categoria = Categoria::create($data);
		Session::flash('flash_message',[
			'msg'=>"Cadastro do Categoria Realizado com Sucesso!!!",
			'class'=>"alert bg-green alert-dismissible"
		]);
		return redirect()->route('categoria.admin_index');
	}
	public function update(Request $request,$id)
	{	
		$categoria = Categoria::find($id);
		$mimeCapa = $request->file('capa')->getClientMimeType();
		$mimeThumb = $request->file('thumb')->getClientMimeType();
		$data = ['nome' => $request->nome];
		if ($request->file('capa')) {
			if ($mimeCapa == "image/jpeg" || $mimeCapa == "image/png") {
				$file = Image::make($request->file('capa'));
				$capa_img_64 = (string) $file->encode('data-url');
				$data['capa'] = $capa_img_64;
			}
		}else{
			$data['capa'] = $categoria->capa;
		}
		
		if ($request->file('thumb')) {
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
			'msg'=>"Cadastro do Categoria Realizado com Sucesso!!!",
			'class'=>"alert bg-green alert-dismissible"
		]);
		return redirect()->route('categoria.admin_index');
	}
	public function excluir($id)
	{
		$categoria = Categoria::find($id);
		$categoria->delete();

		Session::flash('flash_message',[
			'msg'=>"Cadastro do Categoria Realizado com Sucesso!!!",
			'class'=>"alert bg-green alert-dismissible"
		]);
		return view('categoria.admin_index');
	}
}
