@extends('layouts.app_admin')

@section('content')


<div class="container">
	<div class="row">
		<h1 class="center">
			Cadastro de Viagem
		</h1>
		<div class="center">
			<button type="button" class="btn btn-success submit">ENVIAR</button>	
		</div>
		
		<form action="{{ route('viagem.salvar')}}" class="col-md-offset-2 col-md-8 go-right form" method="post" accept-charset="utf-8" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="form-group t">
				<input id="titulo" name="titulo" type="text" class="form-control" required>
				<label for="titulo">Titulo da Viagem</label>
			</div>
			<div class="form-group t">
				<textarea id="descricao" name="descricao" class="form-control" required></textarea>
				<label for="descricao">Descreva essa Viagem</label>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<b>Selecione uma Categoria</b>
					<select name="continente" class="form-control" required>
						<option value="">KIT</option>
						<option value="">SURF</option>
						<option value="">WIND SURF</option>
						<option value="">WEDDING</option>
					</select>
				</div>
				<div class="col-sm-6">
					<b>Selecione um Continente</b>
					<select name="categoria" class="form-control" required> 
						<option value="">KIT</option>
						<option value="">SURF</option>
						<option value="">WIND SURF</option>
						<option value="">WEDDING</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<b>Enviar uma miniatura</b>
				<div class="input-group">
					<span class="input-group-btn">
						<span class="btn btn-default btn-file">
							Carregar… (jpg/png) <input type="file" id="imgInp" name="thumb" required>
						</span>
					</span>
					<input type="text" class="form-control" readonly>
				</div>
				<img id='img-upload'/>
			</div>
			<div class="form-group">
				<b>Enviar imagem de conteúdo da Viagem</b>
				<div class="input-group">
					<span class="input-group-btn">
						<span class="btn btn-default btn-file">
							Carregar… (jpg/png) <input type="file" id="imgInp2" name="capa" required>
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