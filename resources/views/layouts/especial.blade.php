<!-- INCIO SESSÃO DA VIAGEM EM DESTAQUE -->
@if ($especial)
<section id="destaque">
  <div class="container-fluid height-80" style="padding: 30px; background: linear-gradient(to bottom, rgba(0, 0, 0, 0.23), rgba(0, 0, 0, 0.25)), url('{{$especial->capa}}') center/cover no-repeat; min-height:550px">
    <div style="padding:150px 0 30px 0; width: 100%; min-height: 550px;border: 3px solid #fff">
      <div class="destaque">
        <div class="row justify-content-center">
          <div class="col-md-2 text-center">
            <a href="{{route('pagina.Viagem',$especial->titulo)}}" title="">
              <span> PACOTE ESPECIAL</span>
            </a>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-10">
            <h1 class="text-center">
              {{$especial->titulo}}
            </h1>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4">
            <h5 class="text-center" style="margin-bottom: 150px;">
              {{$especial->destino}}
            </h5>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-2 px-0 text-center">
            <img class="img-fluid" src="{{ asset('assets/logo-formula-turismo-branca.png') }}" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endif
<!-- FIM SESSÃO DA VIAGEM EM DESTAQUE -->