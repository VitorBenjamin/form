@extends('layouts.app_admin')

@section('content')
<div class="container">
	<div class="row">
		<h1 class="center">
			Cadastro da Viagem
		</h1>
		<div class="center">
			<button type="button" class="btn btn-success submit">CADASTRAR VIAGEM</button>	
		</div>
		
		<form action="{{ route('viagem.salvar')}}" class="col-md-offset-2 col-md-8 go-right form" method="post" accept-charset="utf-8" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="form-group">
				<textarea id="bodyField"></textarea>

				@ckeditor('bodyField',[])
			</div>
			<div class="form-group t">
				<input id="titulo" name="titulo" type="text" class="form-control" required>
				<label for="titulo">Título da Viagem</label>
			</div>
			<div class="form-group t">
				<textarea id="descricao" name="descricao" class="form-control" required></textarea>
				<label for="descricao">Descrição</label>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<b>Selecione uma Categoria</b>
					<select name="categorias_id" class="form-control" required>
						@foreach ($categoria as $cat)
						<option value="{{$cat->id}}">{{$cat->nome}}</option>}
						@endforeach
					</select>
				</div>
				<div class="col-sm-6">
					<b>Selecione um Continente</b>
					<select name="continentes_id" class="form-control" required> 
						@foreach ($continente as $cont)
						<option value="{{$cont->id}}">{{$cont->nome}}</option>}
						@endforeach
					</select>
				</div>
			</div>
			<div class="form-group">
				<b>Enviar uma miniatura</b>
				<div class="input-group">
					<span class="input-group-btn">
						<span class="btn btn-default btn-file">
							Carregar… (jpg/png) <input type="file" id="imgInp" name="thumb" accept="image/jpeg, image/png" required>
						</span>
					</span>
					<input type="text" class="form-control" readonly>
				</div>
				<img id='img-upload'/>
			</div>
			<div class="form-group">
				<b>Enviar imagem da Viagem</b>
				<div class="input-group">
					<span class="input-group-btn">
						<span class="btn btn-default btn-file">
							Carregar… (jpg/png) <input type="file" id="imgInp2" name="foto" accept="image/jpeg, image/png" required>
						</span>
					</span>
					<input type="text" class="form-control" readonly>
				</div>
				<img id="img-upload" class="img-upload" />
			</div>

			<button type="submit" class="enviar hidden"></button>
		</form>

	</div>
</div>
@endsection