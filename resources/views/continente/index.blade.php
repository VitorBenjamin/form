@extends('layouts.app')

@section('content')

@include('layouts.menu')

<!-- INCIO SESSÃO TOPO DA VIAGEM -->
<div class="container-fluid topo-padding" style="background: url('{{asset('assets/bg-categoria-continente-norte.jpg')}}') center/cover no-repeat;">
  <div class="container continente">
    <div class="row">
      <div class="col-sm-offset-1 col-sm-10 col-md-offset-1 col-md-10">
        <h1 class="text-center">America do Norte</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6">
        <p>
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12" style="text-align: center;">
        <select>
          <option value="">SELECIONE O DESTINO</option>
          <option value="">Porto Seguro</option>
          <option value="">Salvador</option>
          <option value="">Porto de Galinhas</option>
        </select>
      </div>
    </div>
  </div>
</div>
<!-- FIM SESSÃO TOPO DA VIAGEM -->

<div class="container vertical-container hidden-xs hidden-sm">
  <div class="row">
    <div class="col-sm-1">
      <div class="arrows">
        <button class="up"><i class="material-icons">keyboard_arrow_up</i></button>
        <button class="down"><i class="material-icons">keyboard_arrow_down</i></button>  
      </div>
    </div>
    <div class="col-sm-3 col-md-2">
      <div class="vertical-menu">
        <p class="p">
          <a href="{{route('pagina.exibirCategoria','ski')}}">SKI</a> 
          <br>
          <a href="{{route('pagina.exibirCategoria','tenis')}}">TÊNIS</a>
          <br>
          <a href="{{route('pagina.exibirCategoria','golf')}}">GOLFE</a>
          <br>
          <a href="{{route('pagina.exibirCategoria','spa-saude')}}">SPA DE SAÚDE</a> 
          <br>
          <a href="{{route('pagina.exibirCategoria','honeywood-nandwedding')}}">HONEYMOON NANDWEDDING</a>
          <br>
          <a href="{{route('pagina.exibirCategoria','motociclismo')}}">MOTOCICLISMO</a>
          <br>
          <a href="{{route('pagina.exibirCategoria','windsurf')}}">WINDSURF</a> 
          <br>
          <a href="{{route('pagina.exibirCategoria','surf')}}">SURF</a>
          <br>
          <a href="{{route('pagina.exibirCategoria','boliche')}}">BOLICHE</a>
          <br>
        </p>

      </div>
    </div>
  </div>
</div>



<!-- INICIO DA SESSÃO DAS VIAGENS COM CAPTION/OVERLAY-->
<section id="inicio">
  <!-- INCIO SESSÃO DE SELEÇÃO DE VIAGENS -->
  <div class="container-fluid select-brown">
    <div class="container select-margin">
      <div class="row margem-padrao">
        <div class="col-xs-12 col-sm-6 col-md-7">
          <div class="border-left white">
            <p class="center">VIAGENS</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- FIM DA SESSÃO DE SELEÇÃO DE VIAGENS -->
  <!-- INICIO DA SESSÃO DAS VIAGENS COM CAPTION/OVERLAY-->
  <div id="dinamico">
    <div class="container-fluid" style="background: #161b33">
      <div class="row">
        <div class="col-sm-4" >
          <div class="row">
            <div class="thumb">
              <img 
              src="{{asset('assets/viagem-1.jpg')}}" data-aos="fade-down" alt="" data-aos-duration="500"class="img-responsive">
              <div class="caption">
                <div class="col-xs-12">
                  <div class="caption-titulo">
                    <p class="show-dots">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </div>
                </div>
                <div class="col-xs-6 col-md-6">
                  <div class="border-top">
                    <hr width="25%">
                    <p>Porto Seguro</p>
                  </div>
                </div>
                <div class="col-xs-6 col-md-6">
                  <div class="button-caption zoom-gallery">
                    <a class="popup-modal a-caption" href="#test-modal">
                      VER MAIS
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="row">
            <div class="thumb">
              <img src="{{asset('assets/viagem-2.jpg')}}" data-aos="fade-down" data-aos-duration="1000" alt="" class="img-responsive">
              <div class="caption">
                <div class="col-xs-12">
                  <div class="caption-titulo">
                    <div class="caption-titulo">
                      <p class="show-dots">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-6 col-md-6">
                  <div class="border-top">
                    <hr width="25%">
                    <p>Porto Seguro</p>
                  </div>
                </div>
                <div class="col-xs-6 col-md-6">
                  <div class="button-caption zoom-gallery">
                    <a class="popup-modal a-caption" href="#test-modal">
                      VER MAIS
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="row">
            <div class="thumb">
              <img src="{{asset('assets/viagem-3.jpg')}}" data-aos="fade-down" data-aos-duration="1500" alt="" class="img-responsive">
              <div class="caption">
                <div class="col-xs-12">
                  <div class="caption-titulo">
                    <div class="caption-titulo">
                      <p class="show-dots">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-6 col-md-6">
                  <div class="border-top">
                    <hr width="25%">
                    <p>Porto Seguro</p>
                  </div>
                </div>
                <div class="col-xs-6 col-md-6">
                  <div class="button-caption zoom-gallery">
                    <a class="popup-modal a-caption" href="#test-modal">
                      VER MAIS
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid" style="background: #161b33">
      <div class="row">
        <div class="col-sm-4">
          <div class="row">
            <div class="thumb">
              <img src="{{asset('assets/viagem-4.jpg')}}" data-aos="fade-down"  alt="" class="img-responsive">
              <div class="caption">
                <div class="col-xs-12">
                  <div class="caption-titulo">
                    <div class="caption-titulo">
                      <p class="show-dots">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                  </div>
                </div>
                <div class="caption-rodape">
                  <div class="col-xs-6 col-md-6">
                    <div class="border-top">
                      <hr width="25%">
                      <p>Porto Seguro</p>
                    </div>
                  </div>
                  <div class="col-xs-6 col-md-6">
                    <div class="button-caption zoom-gallery">
                      <a class="popup-modal a-caption" href="#test-modal">
                        VER MAIS

                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="row">
            <div class="thumb">
              <img src="{{asset('assets/viagem-5.jpg')}}" data-aos="fade-down"  alt="" class="img-responsive">
              <div class="caption">
                <div class="col-xs-12">
                  <div class="caption-titulo">
                    <div class="caption-titulo">
                      <p class="show-dots">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-6 col-md-6">
                  <div class="border-top">
                    <hr width="25%">
                    <p>Porto Seguro</p>
                  </div>
                </div>
                <div class="col-xs-6 col-md-6">
                  <div class="button-caption zoom-gallery">
                    <a class="popup-modal a-caption" href="#test-modal">
                      VER MAIS
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="row">
            <div class="thumb">
              <img src="{{asset('assets/viagem-6.jpg')}}" data-aos="fade-down"  alt="" class="img-responsive">
              <div class="caption">
                <div class="col-xs-12">
                  <div class="caption-titulo">
                    <div class="caption-titulo">
                      <p class="show-dots">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-6 col-md-6">
                  <div class="border-top">
                    <hr width="25%">
                    <p>Porto Seguro Porto Seguro </p>
                  </div>
                </div>
                <div class="col-xs-6 col-md-6">
                  <div class="button-caption zoom-gallery">
                    <a class="popup-modal a-caption" href="#test-modal">
                      VER MAIS
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- FIM  DA SESSÃO DAS VIAGENS COM CAPTION/OVERLAY -->
  <!-- <a class="popup-modal" href="#test-modal">Open modal</a> -->

  <div id="test-modal" class="mfp-hide2 white-popup-block closeOnBgClick ">
    <h1><a class="popup-modal-dismiss" href="#">X</a></h1>
    <img class="img-responsive" src="{{asset('assets/arte-viagem.jpg')}}" alt="">
  </div>
</section>
<!-- FIM  DA SESSÃO DAS VIAGENS COM CAPTION/OVERLAY -->

<!-- INICIO DA SESSÃO DAS VIAGENS -->
<div class="container">
  <div class="row">
    <!-- <div class="col-sm-4">
      <div class="links-viagens">
        <a href="#" title=""><p>Silversea Tailândia - Soneva Kiri</p></a>

        <a href="#" title=""><p>Tailândia - Soneva Kiri</p></a>

        <a href="#" title=""><p>Azura - Moçambique & Tanzania</p></a>

        <a href="#" title=""><p>Art Basel Miami 2017</p></a>

        <a href="#" title=""><p>Silversea </p></a>

      </div>
    </div>
    <div class="col-sm-4">
      <div class="links-viagens">
        <a href="#" title=""><p>Silversea Tailândia - Soneva Kiri</p></a>

        <a href="#" title=""><p>Tailândia - Soneva Kiri</p></a>

        <a href="#" title=""><p>Azura - Moçambique & Tanzania</p></a>

        <a href="#" title=""><p>Art Basel Miami 2017</p></a>

        <a href="#" title=""><p>Silversea </p></a>

      </div>
    </div>
    <div class="col-sm-4">
      <div class="links-viagens">
        <a href="#" title=""><p>Silversea Tailândia - Soneva Kiri</p></a>

        <a href="#" title=""><p>Tailândia - Soneva Kiri</p></a>

        <a href="#" title=""><p>Azura - Moçambique & Tanzania</p></a>

        <a href="#" title=""><p>Art Basel Miami 2017</p></a>

        <a href="#" title=""><p>Silversea </p></a>

      </div>
    </div> -->
    <div class="container">
      <div class="row" style="padding: 30px;">
        <div class="col-sm-offset-5 col-sm-2" style="text-align: center;">
          <button id="add" type="button" class="links-vermais">VER MAIS</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- FIM DA SESSÃO DAS VIAGENS -->

<!-- INCIO SESSÃO DA VIAGEM EM DESTAQUE -->
<section id="destaque">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12" style="padding: 30px; background: url('{{asset('assets/slide-02.jpg')}}') center/cover no-repeat; min-height:550px">
        <div style="padding:150px 0 30px 0; width: 100%; min-height: 550px;border: 3px solid #fff">
          <div class="container destaque">
            <div class="row">
              <div class="col-sm-offset-2 col-sm-8 col-md-offset-4 col-md-4" style="text-align: center;" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                <a href="#" title="">
                  <span class="text-center">PACOTE ESPECIAL</span>
                </a>

              </div>
            </div>
            <div class="row">
              <div class="col-md-offset-2 col-md-8">
                <h1 class="text-center" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                  Casa de Uco Mendoza
                </h1>
              </div>
            </div>
            <div class="row">
             <div class="col-sm-offset-4 col-sm-4 col-md-offset-5 col-md-2">
              <h5 data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500" class="text-center" style="margin-bottom: 150px;">
                ARGENTINA
              </h5>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-offset-1 col-sm-10 col-md-offset-4 col-md-4">
              <img class="img-responsive" style="margin:auto" src="{{ asset('assets/logo-formula-turismo-branca.png') }}" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<!-- FIM SESSÃO DA VIAGEM EM DESTAQUE -->

<!-- INCIO SESSÃO CATEGORIAS -->
@include('layouts.categorias')
<!-- FIM LISTAGENS CATEGORIAS -->

<!-- INCIO SESSÃO NEWS LATTER -->
@include('layouts.newslatter')
<!-- FIM SESSÃO NEWS LATTER -->

<!-- INCIO SESSÃO CHECK IN E DICAS -->
@include('layouts.checkin_dicas')

@include('modals.modals')
<!-- FINAL SESSÃO CHECK IN E DICAS -->

<!-- INCIO SESSÃO QUEM SOMOS -->
@include('layouts.about')
<!-- FINAL SESSÃO QUEM SOMOS -->

<!-- INCIO SESSÃO CLIENTES -->
@include('layouts.clientes')
<!-- FINAL SESSÃO CLIENTES -->

<!-- INCIO SESSÃO CLIENTES -->
@include('layouts.footer')
<!-- FIM SESSÃO CLIENTES -->

@endsection