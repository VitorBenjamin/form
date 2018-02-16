@extends('layouts.app_admin')

@section('content')
<div class="container">
	<div class="row">
		<h1 class="center">
			Cadastro da Viagem
		</h1>
		<div class="center">
			<button type="button" class="btn btn-success submit">CADASTRAR VIAGEM</button>
			<h3>Slide do Artigo</h3>
		</div>
		
		<form action="{{ route('viagem.salvar')}}" class="col-md-offset-2 col-md-8 go-right form" method="post" accept-charset="utf-8" enctype="multipart/form-data">
			{{ csrf_field() }}

			<div class="input-group control-group increment" >
				<div class="row">
					<div class="col-sm-6">
						<b>Título Para a Imagem</b>
						<input name="title[]" type="text" class="form-control" style="width:100%" required/>
					</div>
					<div class="col-sm-6">
						<b>Alt Para a Imagem</b>
						<input name="alt[]" type="text" class="form-control" style="width:100%" required/>
					</div>
				</div>
				<input type="file" name="carousel[]" class="form-control">
				<div class="input-group-btn" style="vertical-align:bottom !important"> 
					<button class="btn btn-success add" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
				</div>
			</div>
			<div class="dinamico">
				
			</div>
			<div class="form-group t">
				<input id="titulo" name="titulo" type="text" class="form-control" required>
				<label for="titulo">Título da Viagem</label>
			</div>
			<div class="form-group t">
				<input id="destino" name="destino" type="text" class="form-control" required>
				<label for="destino">Destino</label>
			</div>
			<div class="form-group t">
				<b for="especial">Especial</b>
				<input type="checkbox" name="especial" value="" id="especial">
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
				<textarea id="bodyField" name="descricao" required></textarea>

				@ckeditor('bodyField',[
					'image2_disableResizer' => false,
					'image_prefillDimensions' => false,
					'height' => 700
					])
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-sm-6">
							<b>Título Para a Imagem</b>
							<input name="title_thumb" type="text" class="form-control" required/>
						</div>
						<div class="col-sm-6">
							<b>Alt Para a Imagem</b>
							<input name="alt_thumb" type="text" class="form-control" required/>
						</div>
					</div>
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
					<div class="row">
						<div class="col-sm-6">
							<b>Título Para a Imagem</b>
							<input name="title_capa" type="text" class="form-control" required/>
						</div>
						<div class="col-sm-6">
							<b>Alt Para a Imagem</b>
							<input name="alt_capa" type="text" class="form-control" required/>
						</div>
					</div>
					<b>Enviar imagem da Viagem</b>
					<div class="input-group">
						<span class="input-group-btn">
							<span class="btn btn-default btn-file">
								Carregar… (jpg/png) <input type="file" id="imgInp2" name="capa" accept="image/jpeg, image/png" required>
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