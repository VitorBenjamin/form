@extends('layouts.app')
@section('content')

@include('layouts.menu_black')
<div class="container-fluid topo-padding" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.35)), url('{{$especial == null ? asset('assets/bg-categoria-continente-norte.jpg') : $especial->capa}}') center center/cover no-repeat;">
  <div class="container continente">
    <div class="row height-80 height-100-mobile">
      <div class="col-md-5 d-none d-md-block align-self-center">
        <div class="vertical-menu">
          <p class="p">
            @foreach ($categorias as $cat)
            <a href="{{route('pagina.exibirCategoria',mb_strtolower($cat->nome))}}">{{$cat->nome}}</a> 
            <br>
            @endforeach
          </p>
        </div>
        <div style="position:absolute; bottom:20px;">
          <button class="up"><i class="material-icons">keyboard_arrow_up</i></button>
          <button class="down"><i class="material-icons">keyboard_arrow_down</i></button>  
        </div>
      </div>
      <div class="col-md-7 align-self-center">
        <h1 class="text-right">{{$especial == null ? 'Todas As Viagens' : $especial->titulo}}</h1>
        <p>{{$especial == null ? 'É só escolher e desfrutar' :$especial->categoria->nome}}</p>
      </div> 
    </div>     
  </div>
</div>

<section id="destinos">
  @include('layouts.search')

  <!-- INICIO DA SESSÃO DAS VIAGENS COM CAPTION/OVERLAY-->
  @if(count($viagens) > 5)
  <div id="dinamico">
    @for ($i = 0; $i < count($viagens); $i++) 
    @if ($i/2 == 0 || $i ==0 )
    <div class="container-fluid" style="background: #fff">
      <div class="row">
        @endif
        <div class="col-md-4 height-50 height-50-mobile my-3">
          <div class="thumb height-50 height-50-mobile" style="background: no-repeat url('{{$viagens[$i]->thumb}}') center center/cover scroll;">
            <div class="container-fluid px-0">
              <div class="caption height-50 height-50-mobile px-3">
                <div class="row h-75">
                  <div class="col-12 align-self-center">
                    <div class="caption-titulo">
                      <p class="show-dots">{{$viagens[$i]->titulo}}</p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-7 col-md-7 align-self-center">
                    <div class="border-topo">
                      <hr width="25%">
                      <p>{{$viagens[$i]->destino}}</p>
                    </div>
                  </div>
                  <div class="col-5 col-md-5 align-self-center">
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

<!-- INCIO SESSÃO CATEGORIAS -->
@include('layouts.categorias')
<!-- FIM LISTAGENS CATEGORIAS -->

<!-- INCIO SESSÃO NEWS LATTER -->
@include('layouts.newslatter')
<!-- FIM SESSÃO NEWS LATTER -->

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

@endsection