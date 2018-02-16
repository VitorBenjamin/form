<!-- INCIO SESSÃO DA VIAGEM EM DESTAQUE -->
@if ($especial)
<section id="destaque">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12" style="padding: 30px; background: linear-gradient(to bottom, rgba(0, 0, 0, 0.23), rgba(0, 0, 0, 0.25)), url('{{$especial->capa}}') center/cover no-repeat; min-height:550px">
        <div style="padding:150px 0 30px 0; width: 100%; min-height: 550px;border: 3px solid #fff">
          <div class="destaque">
            <div class="row">
              <div class="col-sm-offset-4 col-sm-4 col-md-offset-5 col-md-2 text-center" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="750">
                <a href="{{route('pagina.Viagem',$especial->titulo)}}" title="">
                  <span> PACOTE ESPECIAL</span>
                </a>
              </div>
            </div>
            <div class="row">
              <div class="col-md-offset-1 col-md-10">
                <h1 class="text-center" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                  {{$especial->titulo}}
                </h1>
              </div>
            </div>
            <div class="row">
              <div class="col-md-offset-5 col-md-2">
                <h5 data-aos="fade-up" data-aos-easing="linear" data-aos-duration="750" class="text-center" style="margin-bottom: 150px;">
                  {{$especial->destino}}
                </h5>
              </div>
            </div>
            <div class="row">
              <div class="col-md-offset-4 col-md-4">
                <img class="img-responsive" style="margin:auto" src="{{ asset('assets/logo-formula-turismo-branca.png') }}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endif
<!-- FIM SESSÃO DA VIAGEM EM DESTAQUE -->