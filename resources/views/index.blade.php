@extends('layouts.app')

@section('content')
<!-- Carousel -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6 hidden-xs" style="background: url('http://via.placeholder.com/1200x800') center/cover no-repeat;height: 700px">
          </div>
          <div class="col-sm-6" style="background: url('http://via.placeholder.com/1200x800') center/cover no-repeat; height: 700px;"></div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6 hidden-xs" style="background: url('http://via.placeholder.com/1200x800') center/cover no-repeat; height: 700px;">
          </div>
          <div class="col-sm-6" style="background: url('http://via.placeholder.com/1200x800') center/cover no-repeat; height: 700px;"></div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6 hidden-xs" style="background: url('http://via.placeholder.com/1200x800') center/cover no-repeat; height: 700px;">
          </div>
          <div class="col-sm-6" style="background: url('http://via.placeholder.com/1200x800') center/cover no-repeat; height: 700px;"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xs-3 col-sm-offset-1 col-sm-2 col-md-offset-6 col-md-1" style="position: absolute; top: 10%">
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!-- FIM Carousel -->


<!-- SELECT VIAGENS -->
<div class="container-fluid select">
  <div class="container select-margin">
    <div class="row">
      <div class="col-sm-6 col-md-7">
        <div class="border-left">
          <p class="center">VIAGENS</p>
        </div>
      </div>
      <div class="col-sm-6 col-md-5">
        <div class="select-right">
          <select name="">
            <option value="">SELECIONE O DESTINO AQUI</option>
            <option value="">Porto Seguro</option>
            <option value="">Salvador</option>
            <option value="">Porto de Galinhas</option>
          </select>
        </div>
      </div>
    </div>
  </div>
</div>
<!--  -->

<!-- VIAGENS CAPTIONS -->
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4">
      <div class="row">
        <div class="thumb">
          <img src="http://via.placeholder.com/1080x720" alt="" class="img-responsive">
          <div class="caption">
            <div class="col-xs-9 col-sm-6 col-md-10">
              <div class="caption-titulo">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              </div>
            </div>
            <div class="col-xs-7 col-md-7">
              <div class="border-top">
                <hr width="25%">
                <p>Porto Seguro</p>
              </div>
            </div>
            <div class="col-xs-5 col-md-5">
              <a href="#" class="a-caption">
                <div class="button-caption">
                  VER MAIS
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="row">
        <div class="thumb">
          <img src="http://via.placeholder.com/1080x720" alt="" class="img-responsive">
          <div class="caption">
            <div class="col-xs-9 col-sm-6 col-md-10">
              <div class="caption-titulo">
                <div class="caption-titulo">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
              </div>
            </div>
            <div class="col-xs-7 col-md-7">
              <div class="border-top">
                <hr width="25%">
                <p>Porto Seguro</p>
              </div>
            </div>
            <div class="col-xs-5 col-md-5">
              <a href="#" class="a-caption">
                <div class="button-caption">
                  VER MAIS
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="row">
        <div class="thumb">
          <img src="http://via.placeholder.com/1080x720" alt="" class="img-responsive">
          <div class="caption">
            <div class="col-xs-9 col-sm-6 col-md-10">
              <div class="caption-titulo">
                <div class="caption-titulo">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
              </div>
            </div>
            <div class="col-xs-7 col-md-7">
              <div class="border-top">
                <hr width="25%">
                <p>Porto Seguro</p>
              </div>
            </div>
            <div class="col-xs-5 col-md-5">
              <a href="#" class="a-caption">
                <div class="button-caption">
                  VER MAIS
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4">
      <div class="row">
        <div class="thumb">
          <img src="http://via.placeholder.com/1080x720" alt="" class="img-responsive">
          <div class="caption">
            <div class="col-xs-9 col-sm-6 col-md-10">
              <div class="caption-titulo">
                <div class="caption-titulo">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
              </div>
            </div>
            <div class="caption-rodape">
              <div class="col-xs-7 col-md-7">
                <div class="border-top">
                  <hr width="25%">
                  <p>Porto Seguro</p>
                </div>
              </div>
              <div class="col-xs-5 col-md-5">
                <a href="#" class="a-caption">
                  <div class="button-caption">
                    VER MAIS
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="row">
        <div class="thumb">
          <img src="http://via.placeholder.com/1080x720" alt="" class="img-responsive">
          <div class="caption">
            <div class="col-xs-9 col-sm-6 col-md-10">
              <div class="caption-titulo">
                <div class="caption-titulo">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
              </div>
            </div>
            <div class="col-xs-7 col-md-7">
              <div class="border-top">
                <hr width="25%">
                <p>Porto Seguro</p>
              </div>
            </div>
            <div class="col-xs-5 col-md-5">
              <a href="#" class="a-caption">
                <div class="button-caption">
                  VER MAIS
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="row">
        <div class="thumb">
          <img src="http://via.placeholder.com/1080x720" alt="" class="img-responsive">
          <div class="caption">
            <div class="col-xs-9 col-sm-6 col-md-10">
              <div class="caption-titulo">
                <div class="caption-titulo">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
              </div>
            </div>
            <div class="col-xs-7 col-md-7">
              <div class="border-top">
                <hr width="25%">
                <p>Porto Seguro</p>
              </div>
            </div>
            <div class="col-xs-5 col-md-5">
              <a href="#" class="a-caption">
                <div class="button-caption">
                  VER MAIS
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- FIM VIAGENS CAPTIONS -->

<!-- VIAGENS LISTAGENS -->
<div class="container">
  <div class="row">
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
    <div class="container">
      <div class="row">
        <div class="col-sm-offset-5 col-sm-2" style="text-align: center;">
          <button type="button" class="links-vermais">VER MAIS</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- FIM VIAGENS LISTAGENS -->

<!-- VIAGENS LISTAGENS -->
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12" style="padding: 0">
      <div style="margin-top: 50px">
        <img src="{{asset('assets/slide-02.jpg')}}" class="img-responsive" alt="">
      </div>
    </div>
  </div>
</div>
<!-- FIM VIAGENS LISTAGENS -->
@endsection