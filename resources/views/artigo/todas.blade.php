@extends('layouts.app')
@section('content')

@include('layouts.menu_black')

<!-- INCIO SESSÃO TOPO DA VIAGEM -->
<div class="container-fluid topo-padding" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.35)), url('{{asset('assets/bg-categoria-continente-norte.jpg')}}') center/cover no-repeat;">
  <div class="container height-80 height-100-mobile continente">
    <div class="row justify-content-center height-80 height-100-mobile">
      <div class="col-md-6 align-self-center artigo text-center">
        <h1>Todos os Artigos</h1>
      </div>
    </div>      
  </div>
</div>

<!-- FIM SESSÃO TOPO DA VIAGEM -->

<!-- INICIO DA SESSÃO DAS VIAGENS -->

<section id="destinos">
  @include('layouts.search')

  <!-- INICIO DA SESSÃO DAS VIAGENS COM CAPTION/OVERLAY-->
  <div class="container-fluid pb-5" style="background-color:#efefef">
    <div class="container">
      <div class="row">
        <div class="col-sm-7 col-md-5 pt-5 mb-5">
          <div class="border-left">
            <p class="center" style="color: #161b33;">BLOG</p>
          </div>
        </div>
      </div>
      <div class="row justify-content-between text-center">
        @foreach($artigos as $artigo)
        <div class="col-12 col-md-4 text-center artigo">
          <img src="http://via.placeholder.com/480x240" alt="" class="img-fluid">
          <div class="container-fluid" style="background-color:#fff">
            <div class="row justify-content-center">
              <div class="col-11 text-left pt-3">
                <a href="{{route('pagina.artigo', $artigo->titulo)}}" title=""><h1 class="mb-4">{{$artigo->titulo}}</h1></a>
                <p>{{$artigo->resumo}}</p>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>

<!-- FIM DA SESSÃO DAS VIAGENS -->

<!-- INCIO SESSÃO NEWS LATTER -->
@include('layouts.newslatter')
<!-- FIM SESSÃO NEWS LATTER -->

<!-- INCIO SESSÃO QUEM SOMOS -->
<section id="about">
  @include('layouts.about')
</section>
<!-- FINAL SESSÃO QUEM SOMOS -->

<!-- INCIO SESSÃO CLIENTES -->
<section id="contato">
  @include('layouts.footer')
</section>

@endsection