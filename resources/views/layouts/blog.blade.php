<div class="container-fluid" style="background-color:#efefef">
  <div class="container">
    <div class="row">
      <div class="col-sm-7 col-md-5 pt-5 mb-5">
        <div class="border-left">
          <p class="center" style="color: #161b33;">BLOG</p>
        </div>
      </div>
    </div>
    <div class="row justify-content-between text-center">
      @foreach($artigos as $artigo)
      <div class="col-12 col-md-4 text-center artigo">
        <img src="http://via.placeholder.com/480x240" alt="" class="img-fluid">
        <div class="container-fluid" style="background-color:#fff">
          <div class="row justify-content-center">
            <div class="col-11 text-left pt-3">
              <a href="{{route('pagina.artigo', $artigo->titulo)}}" title=""><h1 class="mb-4">{{$artigo->titulo}}</h1></a>
              <p>{{$artigo->resumo}}</p>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="row justify-content-center py-5">
      <a class="artigo-vermais" href="{{route('pagina.exibirTodosArtigos')}}" title="">VER MAIS</a>
    </div>
  </div>
</div>