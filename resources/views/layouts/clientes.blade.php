<div class="container-fluid">
  <div class="container select-margin">
    <div class="row" style="margin: 4% 0">
      <div class="col-sm-6 col-md-7">
        <div class="border-left">
          <p class="center" style="color:#161b33">NOSSOS CLIENTES</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12" style="padding: 0">
      <div class="owl-carousel clientes owl-theme">
        @foreach ($clientes as $cli)
        <div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="750">
          <img class="img-responsive" src="{{$cli->imagem}}" alt="">
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>