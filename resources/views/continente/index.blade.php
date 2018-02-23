@extends('layouts.app')

@section('content')

@include('layouts.menu')

<!-- INCIO SESSÃO TOPO DA VIAGEM -->
<div class="container-fluid topo-padding" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.41), rgba(0, 0, 0, 0.41)), url('{{$continente->capa}}') center/cover no-repeat;">
  <div class="container continente">
    <div class="row">
      <div class="col-xs-11 col-sm-3 hidden-xs hidden-sm">
        <div class="container vertical-container">
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
                  @foreach ($catConti as $cat)
                  <a href="{{route('pagina.exibirContinenteCategoria',[mb_strtolower($continente->nome),mb_strtolower($cat->nome)])}}">{{$cat->nome}}</a> 
                  <br>
                  @endforeach
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-11 col-sm-9 col-md-offset-1 col-md-8">
        <h1 class="text-right">{{$continente->nome}}</h1>
        <p>{{$continente->descricao}}</p>
      </div>      
    </div>
  </div>
</div>
<!-- FIM SESSÃO TOPO DA VIAGEM -->

<!-- INICIO DA SESSÃO DAS VIAGENS COM CAPTION/OVERLAY-->
<section id="destinos">
  <!-- INCIO SESSÃO DE SELEÇÃO DE VIAGENS -->
  <div class="container-fluid select-brown">
    <div class="container select-margin">
      <div class="row margem-padrao">
        <div class="col-sm-4">
          <div class="border-left white">
            <p class="center">VIAGENS</p>
          </div>
        </div>
        <div class="col-md-offset-4 col-sm-4">
          <div class="select-right">
            {{-- <select class="destino">
              <option value="">SELECIONE O CONTINENTE</option>
              @foreach ($continentes as $cont)
              <option value="{{route('pagina.exibirContinente',mb_strtolower($cont->nome))}}">{{$cont->nome}}</option>
              @endforeach
            </select> --}}
            <form class="search" action="{{route('pagina.search')}}" method="post">
              {{ csrf_field() }}
              <input type="search" name="search" placeholder="Buscar..">
              <button type="submit"><i class="material-icons pesquisa">search</i></button>
            </form>
          </div>
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
</section>
<!-- FIM  DA SESSÃO DAS VIAGENS COM CAPTION/OVERLAY -->

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
    <div class="container">
      <div class="row" style="padding: 30px;">
        <div class="col-sm-offset-5 col-sm-2" style="text-align: center;">
          <button id="add" type="button" class="links-vermais">VER TODAS</button>
        </div>
      </div>
    </div>
  </div>
</div>
@endif
<!-- FIM DA SESSÃO DAS VIAGENS -->

<!-- INICIO SESSÃO DE ROTEIRO-->
{{-- @include('layouts.especial') --}}
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