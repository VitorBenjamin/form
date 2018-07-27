@extends('layouts.app_admin')

@section('content')
<div class="container">
	<div class="row">
		<h1 class="center">
			Cadastro do Artigo
		</h1>
		<form action="{{ route('artigo.salvar')}}" class="col-md-offset-2 col-md-8 go-right form" method="post" accept-charset="utf-8" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="form-group t">
				<input id="titulo" name="titulo" type="text" class="form-control" required>
				<label for="titulo">Título do Artigo</label>
			</div>
			<div class="form-group t">
				<textarea id="resumo" name="resumo" type="text" class="form-control" rows="5" required></textarea> 
				<label for="resumo">Resumo do Artigo</label>
			</div>
			<div class="form-group">
				<textarea id="bodyField" name="descricao" required></textarea>

				@ckeditor('bodyField',[
				'image2_disableResizer' => false,
				'image_prefillDimensions' => false,
				'height' => 350
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
				<b>Miniatura</b>
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
				<b>Imagem do Topo do Artigo</b>
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
			<div class="center" style="margin:50px 0">
				<button type="button" class="btn btn-success submit">CADASTRAR ARTIGO</button>
			</div>
			<button type="submit" class="enviar hidden"></button>
		</form>
	</div>
</div>
@endsection