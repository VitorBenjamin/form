@extends('layouts.app')
@section('content')

@include('layouts.menu_black')

<!-- INCIO SESSÃO TOPO DA VIAGEM -->
<div class="container-fluid topo-padding" style="background: url('{{ asset('assets/bg-pesquisa.jpg') }}') center center/cover no-repeat;">
  <div class="container continente">
    <div class="row height-60 height-60-mobile justify-content-center">
      <div class="col-md-4 align-self-center text-center">
        <h1>{{$busca}}</h1>
        <h4>Resultados...</h4>
      </div>      
    </div>
  </div>
</div>
<!-- FIM SESSÃO TOPO DA VIAGEM -->

<!-- INCIO SESSÃO RESULTADO -->
<section style="margin: 5% 0 7% 0">
  <div class="container busca">
    <div class="row justify-content-center">
      <div class="col-md-10">
        @if(count($viagens) > 0 || count($conts) > 0 || count($cats) > 0)
        @foreach ($viagens as $v)
        <a href="{{route('pagina.Viagem',$v->titulo)}}" title="">
          <h1 style="color:#000">{{$v->titulo}}</h1>
          <h6 style="color:#000">{{$v->destino}}</h6>
          <img src="{{$v->thumb}}" alt="" width="200" height="100">
        </a>
        @endforeach
        @foreach ($conts as $c)
        <a href="{{route('pagina.exibirContinente',$c->nome)}}" title="">
          <h1>{{$c->nome}}</h1>
          <img src="{{$c->capa}}" alt="" width="250" height="150">
        </a>
        @endforeach
        @foreach ($cats as $ca)
        <a href="{{route('pagina.exibirCategoria',$ca->nome)}}" title="">
          <h1>{{$ca->nome}}</h1>
          <img src="{{$ca->thumb}}" alt="" width="250" height="150">
        </a>
        @endforeach
        @endif
      </div>
    </div>
  </div>
</section>
<!-- FIM SESSÃO RESULTADO -->


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