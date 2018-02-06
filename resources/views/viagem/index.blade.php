@extends('layouts.app')
@section('content')

@include('layouts.menu')

<!-- INCIO SESSÃO TOPO DA VIAGEM -->
<div class="container-fluid topo-padding" style="background: url('{{$viagem->thumb}}') center/cover no-repeat fixed;">
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
</div>
<!-- FIM SESSÃO TOPO DA VIAGEM -->

<section>
  <div class="container">
    <div class="row">
      <div class="col-md-offset-2 col-md-8 artigo">
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

          <img src="http://via.placeholder.com/1900x1080" data-highres="http://via.placeholder.com/1900x1080" data-caption="Parturient Bibendum Malesuada Etiam"/>
          <img src="http://via.placeholder.com/200x200" data-highres="http://via.placeholder.com/1900x1080" />
          <img src="http://via.placeholder.com/200x200" data-highres="http://via.placeholder.com/1900x1080" data-caption="Adipiscing Inceptos Ornare Cursus"/>
          <img src="http://via.placeholder.com/200x200" data-highres="http://via.placeholder.com/1900x1080" data-caption="Etiam Purus Sollicitudin Fusce"/>
          <img src="http://via.placeholder.com/200x200" data-highres="http://via.placeholder.com/1900x1080" data-caption="Parturient Bibendum Malesuada Etiam"/>
          <img src="http://via.placeholder.com/200x200" data-highres="http://via.placeholder.com/1900x1080" data-caption="Magna Pharetra Inceptos"/>
          <img src="http://via.placeholder.com/200x200" data-highres="http://via.placeholder.com/1900x1080" data-caption="Lorem ipsum dolor sit amet, consectetur adipiscing elit"/>
          <img src="../dist/img/LR/08.jpg" data-highres="../dist/img/HR/08.jpg" data-caption="Venenatis Purus Parturient"/>
        </div>

      </section>
      {{-- {!!$viagem->descricao!!} --}}
    </div>
  </div>
</div>
</section>

@endsection