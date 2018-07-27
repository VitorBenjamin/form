<div class="container-fluid select height-50 height-50-mobile">
  <div class="row justify-content-center height-50 height-50-mobile">
    <div class="col-10 col-sm-3 col-md-2 align-self-center">
      <p class="categorias">QUAL ESTILO DE VIAGEM FAZ PARTE DO SEU SONHO?</p>
    </div>
    <div class="col-10 col-md-8 align-self-end">
      <div class="owl-carousel categoria-slide owl-theme">
        @foreach ($categorias as $cati)
        <div>
          <a href="{{route('pagina.exibirCategoria',$cati->nome)}}" title=""><img class="img-responsive" src="{{$cati->thumb}}" alt=""></a>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>