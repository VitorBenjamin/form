@extends('layouts.app_admin')

@section('content')
<div class="container">
	<div class="row">
		<h1 class="center">
			EDITANDO O ARTIGO {{$artigo->titulo}}
		</h1>
		<form action="{{ route('artigo.update',$artigo->id)}}" class="col-md-offset-2 col-md-8 go-right form" method="post" accept-charset="utf-8" enctype="multipart/form-data">
			{{ csrf_field() }}
			{{ method_field('PUT') }}
			<div class="form-group t">
				<input id="titulo" name="titulo" value="{{$artigo->titulo}}" type="text" class="form-control" required>
				<label for="titulo">Título do Artigo</label>
			</div>
			<div class="form-group t">
				<textarea id="resumo" name="resumo" type="text" class="form-control" rows="5" required>{{$artigo->resumo}}</textarea> 
				<label for="resumo">Resumo do Artigo</label>
			</div>
			<div class="form-group">
				<textarea id="bodyField" name="descricao" required>{{$artigo->descricao}}</textarea>
				@ckeditor('bodyField',[])
			</div>
			<div class="form-group">
				<b>Miniatura</b>
				<div class="input-group">
					<span class="input-group-btn">
						<span class="btn btn-default btn-file">
							Carregar… (jpg/png) <input type="file" id="imgInp" name="thumb" accept="image/jpeg, image/png">
						</span>
					</span>
					<input type="text" class="form-control" readonly>
				</div>
				<img id='img-upload' src="{{$artigo->thumb}}" />
			</div>
			<div class="form-group">
				<b>Capa</b>
				<div class="input-group">
					<span class="input-group-btn">
						<span class="btn btn-default btn-file">
							Carregar… (jpg/png) <input type="file" id="imgInp2" name="capa" accept="image/jpeg, image/png">
						</span>
					</span>
					<input type="text" class="form-control" readonly>
				</div>
				<img id="img-upload" class="img-upload" src="{{$artigo->capa}}"/>
			</div>
			<button type="submit" class="enviar hidden"></button>
			<div class="center" style="margin:50px 0">
				<button type="button" class="btn btn-success submit">EDITAR ARTIGO</button>	
			</div>
		</form>
	</div>
</div>
@endsection