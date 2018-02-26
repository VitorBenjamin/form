@extends('layouts.app')

@section('content')

@include('layouts.menu_black')

<!-- INICIO SESSÃO DO CAROUSEL -->
<section id="inicio">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
      @foreach ($carousels as $i => $car)
      <div class="item {{$i == 0 ? 'active' :''}}">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6 hidden-xs"  style="background: #fff center/cover no-repeat;height: 700px">
              <div class="row">
                <div class="col-sm-offset-1 col-sm-10 col-md-9">
                  <div class="texto-carousel">
                    <h1 style="margin-top: 45%">{{$car->nome}}</h1>
                    <p class="show-summary">{{$car->descricao}}</p>
                    <div class="row">
                      <div class="col-xs-5 col-md-4">
                        <div class="zoom-gallery">
                          <a href="{{route('pagina.Viagem',$car->viagem->titulo)}}">
                            VER MAIS
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0.35)), url('{{ $car->imagem }}') center/cover no-repeat; height: 700px;">
              <div class="row visible-xs">
                <div class="col-sm-offset-1 col-sm-10 col-md-9">
                  <div class="texto-carousel-mobi">
                    <h1 style="margin-top: 40%">{{$car->titulo}}</h1>
                    <p data-aos="flip-left" class="show-summary-mobile">{{$car->descricao}}</p>

                    <div class="row">
                      <div class="col-xs-5 col-md-4">
                        <div class="zoom-gallery">
                          <a href="{{route('pagina.Viagem',$car->viagem->titulo)}}">
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
      </div>
      @endforeach
    </div>
    <div class="col-sm-offset-6 col-sm-2 col-md-offset-6 col-md-1 hidden-xs" style="position: absolute; top: 10%; z-index:1000">
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
</section>
<!-- FIM SESSÃO DO CAROUSEL -->

<section id="destinos">
  <!-- INCIO SESSÃO DE SELEÇÃO DE VIAGENS -->
  <div class="container-fluid select">
    <div class="container select-margin">
      <div class="row margem-padrao">
        <div class="col-sm-4">
          <div class="border-left">
            <p class="center">VIAGENS</p>
          </div>
        </div>
        {{-- <div class="col-sm-5">
          <div class="select-right">
            <select class="destino">
              <option value="">ESCOLHA O DESTINO</option>
              @foreach ($categorias as $cat)
              <option value="{{route('pagina.exibirCategoria',$cat->nome)}}">{{$cat->nome}}</option>
              @endforeach
            </select>
          </div>
        </div> --}}
        <div class="col-sm-offset-4 col-sm-4">
          <form class="search" action="{{route('pagina.search')}}" method="post">
            {{ csrf_field() }}
            <input type="search" name="search" placeholder="Buscar..">
            <button type="submit"><i class="material-icons pesquisa">search</i></button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- FIM DA SESSÃO DE SELEÇÃO DE VIAGENS -->

  <!-- INICIO DA SESSÃO DAS VIAGENS COM CAPTION/OVERLAY-->
  @if(count($viagens) > 5)
  <div id="dinamico">
    @for ($i = 0; $i < 6; $i++) 
    @if ($i/2 == 0 || $i ==0 )
    <div class="container-fluid" style="background: #161b33">
      <div class="row">
        @endif
        <div class="col-sm-4" >
          <div class="row">
            <div class="thumb" style="background: url('{{$viagens[$i]->thumb}}') center/cover no-repeat;">
              <!--  <img src="{{$viagens[$i]->thumb}}" data-aos="fade-down" alt="" data-aos-duration="500" class="img-responsive"> -->
              <div class="caption">
                <div class="col-xs-12">
                  <div class="caption-titulo">
                    <p class="show-dots">{{$viagens[$i]->titulo}}</p>
                  </div>
                </div>
                <div class="col-xs-6 col-md-6">
                  <div class="border-top">
                    <hr width="25%">
                    <p>{{$viagens[$i]->destino}}</p>
                  </div>
                </div>
                <div class="col-xs-6 col-md-6">
                  <div class="button-caption zoom-gallery">
                    <a class="a-caption" href="{{route('pagina.Viagem',$viagens[$i]->titulo)}}">VER MAIS</a>
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
  <!-- FIM  DA SESSÃO DAS VIAGENS COM CAPTION/OVERLAY -->
</section>

<!-- INICIO DA SESSÃO DAS VIAGENS -->
@if(count($viagens) > 5)
<div class="container">
  <div class="row">
    <div class="col-md-offset-1 col-md-10">
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
    <div class="container">
      <div class="row" style="padding: 30px;">
        <div class="col-sm-offset-5 col-sm-2" style="text-align: center;">
          <a href="{{route('pagina.exibirTodasViagens')}}" class="links-vermais">VER TODAS</a>
        </div>
      </div>
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
@include('layouts.especial')
<!-- FIM DA SESSÃO DE ROTEIRO-->

<!-- INICIO SESSÃO DE ROTEIRO-->
@include('layouts.roteiro')
<!-- FIM DA SESSÃO DE ROTEIRO-->

<!-- INCIO SESSÃO CATEGORIAS -->
@include('layouts.categorias')
<!-- FIM LISTAGENS CATEGORIAS -->

<!-- INCIO SESSÃO NEWS LATTER -->
@include('layouts.newslatter')
<!-- FIM SESSÃO NEWS LATTER -->

<!-- INCIO SESSÃO CHECK IN E DICAS -->
@include('layouts.checkin_dicas')

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