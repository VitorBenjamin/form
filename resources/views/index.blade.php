@extends('layouts.app')

@section('content')
<!-- Carousel -->

<div class="navbar-wrapper">
  <div class="container">
    <nav class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/logo-formula-turismo-branca.png') }}" class="img-responsive" alt="">
          </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
                {{-- <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li> --}}
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li role="separator" class="divider"></li>
                      <li class="dropdown-header">Nav header</li>
                      <li><a href="#">Separated link</a></li>
                      <li><a href="#">One more separated link</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6 hidden-xs" style="background: #fff center/cover no-repeat;height: 700px">
                </div>
                <div class="col-sm-6" style="background: url({{ asset('assets/slide-01.jpg') }}) center/cover no-repeat; height: 700px;"></div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6 hidden-xs" style="background: #fff center/cover no-repeat;height: 700px">
                </div>
                <div class="col-sm-6" style="background: url({{ asset('assets/slide-02.jpg') }}) center/cover no-repeat; height: 700px;"></div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6 hidden-xs" style="background: #fff center/cover no-repeat;height: 700px">
                </div>
                <div class="col-sm-6" style="background: url({{ asset('assets/slide-03.jpg') }}) center/cover no-repeat; height: 700px;"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-3 col-sm-offset-1 col-sm-2 col-md-offset-6 col-md-1" style="position: absolute; top: 10%; z-index:1000">
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
                  <div class="col-xs-12">
                    <div class="caption-titulo">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                  </div>
                  <div class="col-xs-6 col-md-6">
                    <div class="border-top">
                      <hr width="25%">
                      <p>Porto Seguro</p>
                    </div>
                  </div>
                  <div class="col-xs-6 col-md-6">
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
                  <div class="col-xs-12">
                    <div class="caption-titulo">
                      <div class="caption-titulo">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-6 col-md-6">
                    <div class="border-top">
                      <hr width="25%">
                      <p>Porto Seguro</p>
                    </div>
                  </div>
                  <div class="col-xs-6 col-md-6">
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
                  <div class="col-xs-12">
                    <div class="caption-titulo">
                      <div class="caption-titulo">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-6 col-md-6">
                    <div class="border-top">
                      <hr width="25%">
                      <p>Porto Seguro</p>
                    </div>
                  </div>
                  <div class="col-xs-6 col-md-6">
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
                  <div class="col-xs-12">
                    <div class="caption-titulo">
                      <div class="caption-titulo">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                      </div>
                    </div>
                  </div>
                  <div class="caption-rodape">
                    <div class="col-xs-6 col-md-6">
                      <div class="border-top">
                        <hr width="25%">
                        <p>Porto Seguro</p>
                      </div>
                    </div>
                    <div class="col-xs-6 col-md-6">
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
                  <div class="col-xs-12">
                    <div class="caption-titulo">
                      <div class="caption-titulo">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-6 col-md-6">
                    <div class="border-top">
                      <hr width="25%">
                      <p>Porto Seguro</p>
                    </div>
                  </div>
                  <div class="col-xs-6 col-md-6">
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
                  <div class="col-xs-12">
                    <div class="caption-titulo">
                      <div class="caption-titulo">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-6 col-md-6">
                    <div class="border-top">
                      <hr width="25%">
                      <p>Porto Seguro Porto Seguro </p>
                    </div>
                  </div>
                  <div class="col-xs-6 col-md-6">
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