@extends('layouts.app')
@section('content')

@include('layouts.menu')

<!-- INCIO SESSÃO TOPO DA VIAGEM -->
{{-- <div class="container-fluid topo-padding" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0.35)), url('{{$viagem->thumb}}') center/cover no-repeat fixed;">
  <div class="container categoria">
    <div class="row">
      <div class="col-sm-offset-1 col-sm-10 col-md-offset-1 col-md-10">
        <h1 class="text-center">{{$viagem->titulo}}</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6">
        <p>
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
        </p>
      </div>
    </div>
  </div>
</div> --}}
<!-- FIM SESSÃO TOPO DA VIAGEM -->

<!-- INCIO SESSÃO TOPO DA VIAGEM -->
<div class="container-fluid topo-padding" style="background: url('{{$viagem->capa}}') center/cover no-repeat;">
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
                  @foreach ($categorias as $cat)
                  <a href="{{route('pagina.exibirContinenteCategoria',[mb_strtolower($cont->nome),mb_strtolower($cat->nome)])}}">{{$cat->nome}}</a> 
                  <br>
                  @endforeach
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-11 col-sm-9 col-md-offset-1 col-md-8">
        <h1 class="text-right">{{$viagem->titulo}}</h1>
        <p>{{$cont->nome}}</p>
      </div>      
    </div>
  </div>
</div>
<!-- FIM SESSÃO TOPO DA VIAGEM -->

<section>
  <div class="container" style="margin-top:50px">
    <div class="row">
      <div class="col-md-offset-1 col-md-10 artigo">
        <section class="content">

          <div id="thumbGallery"
          class="thumbGallery"
          data-thumbGallery="true"
          data-nav_effect="slide_horizontal"
          data-nav_delay="100"
          data-nav_timing="1000"
          data-nav_show="true"
          data-nav_delay_inverse="1"
          data-nav_pagination="6"
          data-gallery_cover="true"
          data-gallery_effect="slide_horizontal"
          data-gallery_fullscreenw="90%"
          data-gallery_fullscreenh="100%"
          >
          @foreach ($viagem->imgs as $img)
          <img src="http://via.placeholder.com/1920x1080" data-highres="http://via.placeholder.com/1920x1080" data-caption="Parturient Bibendum Malesuada Etiam"/>
          <img src="{{$img->imagem}}" data-highres="{{$img->imagem}}"/>
          <img src="http://via.placeholder.com/1920x1080" data-highres="http://via.placeholder.com/1920x1080" data-caption="Parturient Bibendum Malesuada Etiam"/>
          @endforeach
        </div>

      </section>
      {!!$viagem->descricao!!}
      
    </div>
  </div>
</div>
<div class="row margem-padrao">
  <div class="col-xs-12 col-md-offset-2 col-md-8">
    <div class="row">
      <form action="{{route('postReserva')}}" method="post" class="form">
        {{ csrf_field() }}
        <input id="viagem" name="viagem" type="hidden" value="{{$viagem->titulo}}" placeholder="Nome" required>
        <div class="col-md-4">
          <input id="nome" name="nome" type="text" placeholder="Nome" required>
        </div>
        <div class="col-md-5">
          <input id="email" name="email" type="email" placeholder="E-mail" required>
          <label class="nao-aparece">Se você não é um robô, deixe em branco.</label>
          <input type="text" class="nao-aparece" name="leaveblank">
          <label class="nao-aparece">Se você não é um robô, não mude este campo.</label>
          <input type="text" class="nao-aparece" name="dontchange" value="http://">
        </div>
        <div class="col-md-3">
          <div>
            <button type="submit" style="margin-top:0; width: 100% !important;">RESERVAR</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</section>


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

@endsection