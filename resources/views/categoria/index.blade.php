@extends('layouts.app')
@section('content')

@include('layouts.menu_black')

<!-- INCIO SESSÃO TOPO DA VIAGEM -->
<div class="container-fluid" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.70), rgba(0, 0, 0, 0.41)), url('{{$categoria->capa}}') center/cover no-repeat fixed;">
  <div class="container height-80 height-100-mobile categoria">
    <div class="row justify-content-center height-50">
      <div class="col-md-10 align-self-end">
        <h1 class="text-center">{{$categoria->nome}}</h1>
        <p>
          {{$categoria->descricao}}
        </p>
      </div>
    </div>
    <div class="row justify-content-center height-20">
      <div class="col-12 align-self-end" style="text-align: center;">
        <select class="destino">
          <option value="">ESCOLHA UM CONTINENTE</option>}
          @foreach ($continentes as $cont)
          <option value="{{route('pagina.exibirContinente',mb_strtolower($cont->nome))}}">{{$cont->nome}}</option>
          @endforeach
        </select>
      </div>
    </div>
  </div>
</div>
<!-- FIM SESSÃO TOPO DA VIAGEM -->

<!-- INICIO DA SESSÃO DAS VIAGENS COM CAPTION/OVERLAY-->
<section id="destinos">
  <!-- INCIO SESSÃO DE SELEÇÃO DE VIAGENS -->
  
  <!-- SELECT VIAGENS -->
  <div class="container-fluid select">
    <div class="container">
      <div class="row justify-content-between py-5">
        <div class="col-md-7">
          <div class="border-left">
            <p class="center">VIAGENS</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="select-right">
            <select class="destino">
              <option value="">ESCOLHA UM DESTINO</option>
              @foreach ($categorias as $cat)
              <option value="{{route('pagina.exibirCategoria',mb_strtolower($cat->nome))}}">{{$cat->nome}}</option>
              @endforeach
            </select>
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
  <!-- FIM  DA SESSÃO DAS VIAGENS COM CAPTION/OVERLAY -->
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

<!-- INICIO DA SESSÃO DAS VIAGENS -->
@if(count($viagens) > 21)
<div class="container">
  <div class="row">
    <div class="container">
      <div class="row" style="padding: 30px;">
        <div class="col-sm-offset-5 col-sm-2" style="text-align: center;">
          <button id="add" type="button" class="links-vermais">VER MAIS</button>
        </div>
      </div>
    </div>
  </div>
</div>
@endif
<!-- FIM DA SESSÃO DAS VIAGENS -->

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