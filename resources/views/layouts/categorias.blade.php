<div class="container-fluid select">
  <div class="row" style="margin: 10% 0 5% 0">
    <div class="container" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
      <div class="row">
        <div class="col-sm-2 middle">
          <p class="categorias">QUAL ESTILO DE VIAGEM FAZ PARTE DO SEU SONHO?</p>
        </div>
        <div class="col-sm-10">
          <div class="owl-carousel owl-theme">
            @foreach ($categorias as $cat)
            <div>
              <img class="img-responsive" src="{{$cat->thumb}}" alt="">
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</div>