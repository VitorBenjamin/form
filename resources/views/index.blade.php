@extends('layouts.app')

@section('content')

@include('layouts.menu_black')

<!-- INICIO SESSÃO DO CAROUSEL -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6 hidden-xs"  style="background: #fff center/cover no-repeat;height: 700px">
            <div class="row">
              <div class="col-sm-offset-1 col-sm-10 col-md-9" data-aos="fade-down" data-aos-duration="2500">
                <div class="texto-carousel">
                  <h1 style="margin-top: 40%">Arte Design e Arquitetura</h1>
                  <p class="show-summary">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only ﬁve centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.
                  </p>

                  <div class="row">
                    <div class="col-xs-5 col-md-4">
                      <button type="">VER MAIS</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.23), rgba(0, 0, 0, 0.25)), url('{{ asset('assets/slide-01.jpg') }}') center/cover no-repeat; height: 700px;">
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6 hidden-xs" style="background: #fff center/cover no-repeat;height: 700px">
            <div class="row">
              <div class="col-sm-offset-1 col-sm-10 col-md-9" data-aos="fade-down" data-aos-duration="2500">
                <div class="texto-carousel">
                  <h1 style="margin-top: 40%">Arte Design e Arquitetura</h1>
                  <p class="show-summary">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only ﬁve centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.
                  </p>
                  <div class="row">
                    <div class="col-xs-5 col-md-4">
                      <button type="">VER MAIS</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.23), rgba(0, 0, 0, 0.25)), url('{{ asset('assets/slide-02.jpg') }}') center/cover no-repeat; height: 700px;">
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6 hidden-xs" style="background: #fff center/cover no-repeat;height: 700px">
            <div class="row">
              <div class="col-sm-offset-1 col-sm-10 col-md-9" data-aos="fade-down" data-aos-duration="2500">
                <div class="texto-carousel">
                  <h1 style="margin-top: 40%">Arte Design e Arquitetura</h1>
                  <p data-aos="flip-left" class="show-summary">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only ﬁve centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.
                  </p>

                  <div class="row">
                    <div class="col-xs-5 col-md-4">
                      <button type="">VER MAIS</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-sm-6" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.23), rgba(0, 0, 0, 0.25)), url('{{ asset('assets/slide-03.jpg') }}') center/cover no-repeat; height: 700px;"></div>
        </div>
      </div>
    </div>
  </div>
  <div data-aos="fade-down" class="col-sm-offset-6 col-sm-2 col-md-offset-6 col-md-1 hidden-xs" style="position: absolute; top: 10%; z-index:1000">
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <img class="glyphicon glyphicon-chevron-left" src="{{asset('assets/seta-esq.svg')}}" alt="">
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <img class="glyphicon glyphicon-chevron-right" src="{{asset('assets/seta-dir.svg')}}" alt="">
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!-- FIM SESSÃO DO CAROUSEL -->

<section id="inicio">
  <!-- INCIO SESSÃO DE SELEÇÃO DE VIAGENS -->
  <div class="container-fluid select">
    <div class="container select-margin">
      <div class="row margem-padrao">
        <div class="col-sm-6 col-md-7">
          <div class="border-left">
            <p class="center">VIAGENS</p>
          </div>
        </div>
        <div class="col-sm-6 col-md-5">
          <div class="select-right">
            <select class="destino">
              <option value="">SELECIONE O DESTINO</option>
              @foreach ($categorias as $cat)
              <option value="{{route('pagina.exibirCategoria',$cat->nome)}}">{{$cat->nome}}</option>
              @endforeach
            </select>
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

<!-- <div class="zoom-gallery">
  <a href="{{asset('assets/viagem-6.jpg')}}" data-source="{{asset('assets/viagem-6.jpg')}}" title="teste" style="width:32px;height:32px;">
    <img class="img_popup" src="{{asset('assets/viagem-6.jpg')}}" width="32" height="32">
  </a>
</div>
-->
<!-- INCIO SESSÃO DA VIAGEM EM DESTAQUE -->
<section id="destaque">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12" style="padding: 30px; background: linear-gradient(to bottom, rgba(0, 0, 0, 0.23), rgba(0, 0, 0, 0.25)), url('{{asset('assets/slide-02.jpg')}}') center/cover no-repeat; min-height:550px">
        <div style="padding:150px 0 30px 0; width: 100%; min-height: 550px;border: 3px solid #fff">
          <div class="destaque">
            <div class="row">
              <div class="col-sm-offset-4 col-sm-4 col-md-offset-5 col-md-2 text-center" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="750">
                <a href="#" title="">
                  <span> PACOTE ESPECIAL</span>
                </a>
              </div>
            </div>
            <div class="row">
              <div class="col-md-offset-1 col-md-10">
                <h1 class="text-center" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                  Casa de Uco Mendoza
                </h1>
              </div>
            </div>
            <div class="row">
              <div class="col-md-offset-5 col-md-2">
                <h5 data-aos="fade-up" data-aos-easing="linear" data-aos-duration="750" class="text-center" style="margin-bottom: 150px;">
                  ARGENTINA
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
<!-- FIM SESSÃO DA VIAGEM EM DESTAQUE -->

<!-- INCIO da SESSÃO MONTE SEU ROTERIRO -->
<section id="monte-seu-roteiro">
  <div class="container-fluid" style="background-color: #fff">
    <div class="row" style="margin: 7% 0 5% 0">
      <div class="container">
        <div class="row">
          <div class="col-sm-7 col-md-5">
            <div class="border-left">
              <p class="center" style="color: #161b33;">MONTE O SEU ROTEIRO</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <p class="roteiro-paragrafo" data-aos="fade-down">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only ﬁve centuries, but also the leap into electronic typesetting,
            </p>
          </div>
          <div class="col-md-6">
            <p class="roteiro-paragrafo" data-aos="fade-down">
              remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6" data-aos="fade-down">
            <img class="img-responsive" src="{{asset('assets/avatar-consultora.png')}}" style="float:left;" alt="">
            <img src="{{asset('assets/assinatura-consultora.svg')}}" style="width: 40%; margin: 40px 0 0 0;clear:both" alt="">
          </div>
          <div class="col-md-6" style="margin-top:35px" data-aos="fade-down">
            <img class="roteiro-img" src="{{asset ('assets/icon-email.svg')}}" alt="" style="width:30px">
            <span class="roteiro-span">roteiro@formulaturismo.com.br</span>

            <img class="roteiro-img" src="{{asset('assets/icon-telefone.svg')}}" alt="" style="width:30px">
            <span class="roteiro-span">+55 (21) 2509-4614</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- FIM DA SESSÃO MONTE SEU ROTERIRO -->
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
<section id="about">
  @include('layouts.about')
</section>
<!-- FINAL SESSÃO QUEM SOMOS -->

<!-- INCIO SESSÃO CLIENTES -->
@include('layouts.clientes')
<!-- FINAL SESSÃO CLIENTES -->

<!-- INCIO SESSÃO CLIENTES -->
<section id="contato">
  @include('layouts.footer')
</section>
<!-- FIM SESSÃO CLIENTES -->
@endsection