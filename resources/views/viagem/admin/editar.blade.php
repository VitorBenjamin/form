@extends('layouts.app_admin')

@section('content')
<div class="container">
	<div class="row">
		<h1 class="center">
			EDITANDO A VIAGEM {{$viagem->titulo}}
		</h1>
		<div class="center">
			<button type="button" class="btn btn-success submit">EDITAR VIAGEM</button>	
		</div>
		
		<form action="{{ route('viagem.update',$viagem->id)}}" class="col-md-offset-2 col-md-8 go-right form" method="post" accept-charset="utf-8" enctype="multipart/form-data">
			{{ csrf_field() }}
			{{ method_field('PUT') }}
			<div class="form-group t">
				<input id="titulo" name="titulo" value="{{$viagem->titulo}}" type="text" class="form-control" required>
				<label for="titulo">Título da Categoria</label>
			</div>
			<div class="form-group t">
				<textarea id="descricao" name="descricao" class="form-control" rows="5" required>{{$viagem->descricao}}</textarea>
				<label for="descricao">Descrição</label>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<b>Selecione uma Categoria</b>
					<select name="categorias_id" class="form-control" required>
						@foreach ($categorias as $cat)
						<option value="{{$cat->id}}" {{$cat->nome == $viagem->categoria->id ? 'selected' : ''}}>{{$cat->nome}}</option>}
						@endforeach
					</select>
				</div>
				<div class="col-sm-6">
					<b>Selecione um Continente</b>
					<select name="continentes_id" class="form-control" required> 
						@foreach ($continentes as $cont)
						<option value="{{$cont->id}}">{{$cont->nome}}</option>}
						@endforeach
					</select>
				</div>
			</div>
			<div class="form-group">
				<b>Enviar uma Miniatura</b>
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
				<b>Enviar Capa para a Categoria</b>
				<div class="input-group">
					<span class="input-group-btn">
						<span class="btn btn-default btn-file">
							Carregar… (jpg/png) <input type="file" id="imgInp2" name="foto" accept="image/jpeg, image/png">
						</span>
					</span>
					<input type="text" class="form-control" readonly>
				</div>
				<img id="img-upload" class="img-upload" src="{{$viagem->foto}}"/>
			</div>
			<button type="submit" class="enviar hidden"></button>
		</form>
	</div>
</div>
@endsection