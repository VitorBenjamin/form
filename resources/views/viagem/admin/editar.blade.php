@extends('layouts.app_admin')

@section('content')
<div class="container">
	<div class="row">
		<h1 class="center">
			EDITANDO A VIAGEM {{$viagem->titulo}}
		</h1>
		<form action="{{ route('viagem.update',$viagem->id)}}" class="col-md-offset-2 col-md-8 go-right form" method="post" accept-charset="utf-8" enctype="multipart/form-data">
			{{ csrf_field() }}
			{{ method_field('PUT') }}
			<div class="form-group t">
				<input id="titulo" name="titulo" value="{{$viagem->titulo}}" type="text" class="form-control" required>
				<label for="titulo">Título do Produto</label>
			</div>
			<div class="form-group t">
				<input id="destino" name="destino" type="text" value="{{$viagem->destino}}" class="form-control" required>
				<label for="destino">Destino</label>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<b>Selecione uma Categoria</b>
					<select name="categorias_id" class="form-control" required>
						@foreach ($categorias as $cat)
						<option value="{{$cat->id}}" {{$cat->id == $viagem->categoria->id ? 'selected' : ''}}>{{$cat->nome}}</option>}
						@endforeach
					</select>
				</div>
				<div class="col-sm-6">
					<b>Selecione um Continente</b>
					<select name="continentes_id" class="form-control" required> 
						@foreach ($continentes as $cont)
						<option value="{{$cont->id}}" {{$cont->id == $viagem->continente->id ? 'selected' : ''}}>{{$cont->nome}}</option>}
						@endforeach
					</select>
				</div>
			</div>
			<div class="form-group t">
				<b for="especial">Especial</b>
				<input type="checkbox" name="especial" value="1" {{$viagem->especial == 1 ? 'checked' : '' }} id="especial">
			</div>
			<div class="form-group">
				<textarea id="bodyField" name="descricao" required>{{$viagem->descricao}}</textarea>
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
				<img id='img-upload' src="{{$viagem->thumb}}" />
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
				<img id="img-upload" class="img-upload" src="{{$viagem->capa}}"/>
			</div>
			<button type="submit" class="enviar hidden"></button>
			<div class="center" style="margin:50px 0">
				<button type="button" class="btn btn-success submit">EDITAR VIAGEM</button>	
			</div>
		</form>
	</div>
</div>
@endsection