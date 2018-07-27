@extends('layouts.app')
@section('content')
<!-- INICIO SESSÃO DO CAROUSEL -->
<header id="inicio">
  @include('layouts.menu_black')
  <div id="carouselTopo" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
      @foreach ($carousels as $i => $car)
      <div class="carousel-item carousel-item1 {{$i == 0 ? 'active' :''}}" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0.35)), url('{{ $car->imagem }}') center/cover no-repeat;">
        <div class="container-fluid">
          <div class="row justify-content-center height-100 height-100-mobile">
            <div class="col-12 col-md-4 carousel-caption-topo align-self-center text-center">
              <h1>{{$car->nome}}</h1>
              <p>
                {{$car->descricao}}
              </p>
              <a href="{{route('pagina.Viagem',$car->viagem->titulo)}}" title="" class="ver-mais">VER MAIS</a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>

  </div>
  <div class="carousel-caption pt-0">
    <a class="carousel-control-prev" href="#carouselTopo" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselTopo" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!-- <a href="#destinos" class="link"><span></span></a> -->
  </div>
</header>
<!-- FIM SESSÃO DO CAROUSEL -->

<!-- INCIO SESSÃO DE SELEÇÃO DE VIAGENS -->
<section>

  @include('layouts.search')

  <!-- INICIO DA SESSÃO DAS VIAGENS COM CAPTION/OVERLAY-->
  @if(count($viagens) > 5)
  <div id="destinos">
    @for ($i = 0; $i < 6; $i++) 
    @if ($i/2 == 0 || $i ==0 )
    <div class="container-fluid" style="background: #fff">
      <div class="row justify-content-center">
        @endif
        <div class="col-md-4 height-50 height-50-mobile my-3">
          <div class="thumb height-50 height-50-mobile" style="background: no-repeat url('{{$viagens[$i]->thumb}}') center center/cover scroll;">
            <div class="container-fluid px-0">
              <div class="caption height-50 height-50-mobile px-3">
                <div class="row justify-content-center h-75">
                  <div class="col-11 align-self-center">
                    <div class="caption-titulo">
                      <p class="show-dots">{{$viagens[$i]->titulo}}</p>
                    </div>
                  </div>
                </div>
                <div class="row justify-content-center">
                  <div class="col-7 col-md-7 align-self-center">
                    <div class="border-topo">
                      <hr width="25%">
                      <p>{{$viagens[$i]->destino}}</p>
                    </div>
                  </div>
                  <div class="col-5 col-md-4 align-self-center">
                    <div class="button-caption zoom-gallery">
                      <a class="a-caption" href="{{route('pagina.Viagem',$viagens[$i]->titulo)}}">VER MAIS</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @if ($i/2 == 0 && $i>0)
      </div>
    </div>
    @endif
    @endfor
  </div>
  @endif
</section>
<!-- FIM  DA SESSÃO DAS VIAGENS COM CAPTION/OVERLAY -->

<!-- INICIO DA SESSÃO DAS VIAGENS -->
@if(count($viagens) > 5)
<div class="container">
  @if(count($viagens) > 10)
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="links-viagens collumn2">
        <ul class="viagens-lista2">
          @for ($i = 6; $i < count($viagens); $i++)
          <li><a href="{{route('pagina.Viagem',$viagens[$i]->titulo)}}" title=""><p>{{$viagens[$i]->titulo}}</p></a></li>
          @endfor
        </ul>
      </div>
    </div>
    {{-- <div class="col-sm-4">
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
    </div>  --}}
  </div>
  @endif
  <div class="row justify-content-center" style="padding: 30px;">
    <div class="col-md-3" style="text-align: center;">
      <a href="{{route('pagina.exibirTodasViagens')}}" class="links-vermais">VER TODAS</a>
    </div>
  </div>
</div>
@endif
<!-- FIM DA SESSÃO DAS VIAGENS -->

<!-- <div class="zoom-gallery">
  <a href="{{asset('assets/viagem-6.jpg')}}" data-source="{{asset('assets/viagem-6.jpg')}}" title="teste" style="width:32px;height:32px;">
    <img class="img_popup" src="{{asset('assets/viagem-6.jpg')}}" width="32" height="32">
  </a>
</div>
-->
<!-- INICIO SESSÃO DE ROTEIRO-->
@include('layouts.blog')
<!-- FIM DA SESSÃO DE ROTEIRO-->

<!-- INICIO SESSÃO DE ROTEIRO-->
@include('layouts.especial')
<!-- FIM DA SESSÃO DE ROTEIRO-->

<!-- INCIO SESSÃO PREMIO -->
@include('layouts.premio')
<!-- FIM LISTAGENS PREMIO -->

<!-- INICIO SESSÃO DE ROTEIRO-->
@include('layouts.roteiro')
<!-- FIM DA SESSÃO DE ROTEIRO-->

<!-- INCIO SESSÃO CATEGORIAS -->
@include('layouts.parceiros')
<!-- FIM LISTAGENS CATEGORIAS -->

<!-- INCIO SESSÃO NEWS LATTER -->
@include('layouts.newslatter')
<!-- FIM SESSÃO NEWS LATTER -->

<!-- INCIO SESSÃO CATEGORIAS -->
@include('layouts.categorias')
<!-- FIM LISTAGENS CATEGORIAS -->

<!-- INCIO SESSÃO CHECK IN E DICAS -->
<!-- @include('layouts.checkin_dicas') -->

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
@include('modals.modals')
<!-- FINAL SESSÃO CHECK IN E DICAS -->
@endsection