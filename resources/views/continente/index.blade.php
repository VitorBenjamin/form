@extends('layouts.app')

@section('content')

@include('layouts.menu')

<!-- INCIO SESSÃO TOPO DA VIAGEM -->
<div class="container-fluid topo-padding" style="background: url('{{$continente->capa}}') center/cover no-repeat fixed;">
  <div class="container continente">
    <div class="row">
      <div class="col-sm-offset-1 col-sm-10 col-md-offset-1 col-md-10">
        <h1 class="text-center">{{$continente->nome}}</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6">
        <p>
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12" style="text-align: center;">
        <select class="destino">
          <option value="">ESCOLHA UM DESTINO</option>}
         @foreach ($continentes as $cont)
         <option value="{{route('pagina.exibirContinente',$cont->nome)}}">{{$cont->nome}}</option>
         @endforeach
       </select>
     </div>
   </div>
 </div>
</div>
<!-- FIM SESSÃO TOPO DA VIAGEM -->


<!-- INICIO DA SESSÃO DAS VIAGENS COM CAPTION/OVERLAY-->
<section id="inicio">
  <!-- INCIO SESSÃO DE SELEÇÃO DE VIAGENS -->
  
  <!-- SELECT VIAGENS -->
  <div class="container-fluid select">
    <div class="container select-margin">
      <div class="row margem-padrao">
        <div class="col-sm-6 col-md-7">
          <div class="border-left">
            <p class="center">VIAGENS</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- FIM DA SESSÃO DE SELEÇÃO DE VIAGENS -->
  
  <!-- INICIO DA SESSÃO DAS VIAGENS COM CAPTION/OVERLAY-->
  <div id="dinamico">
    <div class="container-fluid" style="background: #161b33">
      <div class="row">
        <div class="col-sm-4" >
          <div class="row">
            <div class="thumb">
              <img 
              src="{{asset('assets/viagem-1.jpg')}}" data-aos="fade-down" alt="" data-aos-duration="500"class="img-responsive">
              <div class="caption">
                <div class="col-xs-12">
                  <div class="caption-titulo">
                    <p class="show-dots">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </div>
                </div>
                <div class="col-xs-6 col-md-6">
                  <div class="border-top">
                    <hr width="25%">
                    <p>Porto Seguro</p>
                  </div>
                </div>
                <div class="col-xs-6 col-md-6">
                  <div class="button-caption zoom-gallery">
                    <a class="popup-modal a-caption" href="#test-modal">
                      VER MAIS
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
              <img src="{{asset('assets/viagem-2.jpg')}}" data-aos="fade-down" data-aos-duration="1000" alt="" class="img-responsive">
              <div class="caption">
                <div class="col-xs-12">
                  <div class="caption-titulo">
                    <div class="caption-titulo">
                      <p class="show-dots">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
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
                  <div class="button-caption zoom-gallery">
                    <a class="popup-modal a-caption" href="#test-modal">
                      VER MAIS
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
              <img src="{{asset('assets/viagem-3.jpg')}}" data-aos="fade-down" data-aos-duration="1500" alt="" class="img-responsive">
              <div class="caption">
                <div class="col-xs-12">
                  <div class="caption-titulo">
                    <div class="caption-titulo">
                      <p class="show-dots">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
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
                  <div class="button-caption zoom-gallery">
                    <a class="popup-modal a-caption" href="#test-modal">
                      VER MAIS
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid" style="background: #161b33">
      <div class="row">
        <div class="col-sm-4">
          <div class="row">
            <div class="thumb">
              <img src="{{asset('assets/viagem-4.jpg')}}" data-aos="fade-down"  alt="" class="img-responsive">
              <div class="caption">
                <div class="col-xs-12">
                  <div class="caption-titulo">
                    <div class="caption-titulo">
                      <p class="show-dots">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
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
                    <div class="button-caption zoom-gallery">
                      <a class="popup-modal a-caption" href="#test-modal">
                        VER MAIS

                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="row">
            <div class="thumb">
              <img src="{{asset('assets/viagem-5.jpg')}}" data-aos="fade-down"  alt="" class="img-responsive">
              <div class="caption">
                <div class="col-xs-12">
                  <div class="caption-titulo">
                    <div class="caption-titulo">
                      <p class="show-dots">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
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
                  <div class="button-caption zoom-gallery">
                    <a class="popup-modal a-caption" href="#test-modal">
                      VER MAIS
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
              <img src="{{asset('assets/viagem-6.jpg')}}" data-aos="fade-down"  alt="" class="img-responsive">
              <div class="caption">
                <div class="col-xs-12">
                  <div class="caption-titulo">
                    <div class="caption-titulo">
                      <p class="show-dots">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
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
                  <div class="button-caption zoom-gallery">
                    <a class="popup-modal a-caption" href="#test-modal">
                      VER MAIS
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- FIM  DA SESSÃO DAS VIAGENS COM CAPTION/OVERLAY -->
  <!-- <a class="popup-modal" href="#test-modal">Open modal</a> -->

  <div id="test-modal" class="mfp-hide2 white-popup-block closeOnBgClick ">
    <h1><a class="popup-modal-dismiss" href="#">X</a></h1>
    <img class="img-responsive" src="{{asset('assets/arte-viagem.jpg')}}" alt="">
  </div>
</section>
<!-- FIM  DA SESSÃO DAS VIAGENS COM CAPTION/OVERLAY -->

<!-- INICIO DA SESSÃO DAS VIAGENS -->
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
<!-- FIM DA SESSÃO DAS VIAGENS -->

<!-- INCIO SESSÃO DA VIAGEM EM DESTAQUE -->
<section id="destaque">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12" style="padding: 30px; background: url('{{asset('assets/slide-02.jpg')}}') center/cover no-repeat; width: 100%; min-height:550px">
        <div style="padding:150px 0 30px 0; min-height: 550px;border: 3px solid #fff">
          <div class="container destaque">
            <div class="col-sm-offset-2 col-sm-8 col-md-offset-4 col-md-4" style="text-align: center;" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
              <a href="#" title="">
                <span class="text-center">PACOTE ESPECIAL</span>
              </a>
            </div>
            <div class="col-md-offset-2 col-md-8">
              <h1 class="text-center" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                Casa de Uco Mendoza
              </h1>
            </div>
            <div class="col-sm-offset-4 col-sm-4 col-md-offset-5 col-md-2">
              <h5 data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500" class="text-center" style="margin-bottom: 150px;">
                ARGENTINA
              </h5>
            </div>
            <div class="col-sm-offset-1 col-sm-10 col-md-offset-4 col-md-4">
              <img class="img-responsive" style="margin:auto" src="{{ asset('assets/logo-formula-turismo-branca.png') }}" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- FIM SESSÃO DA VIAGEM EM DESTAQUE -->

<!-- INICIO DO CAROUSEL DAS CATEGORIAS -->
<div class="container-fluid select">
  <div class="row" style="margin: 10% 0">
    <div class="container">
      <div class="row">
        <div class="col-sm-2 middle">
          <p class="categorias">QUAL ESTILO DE VIAGEM FAZ PARTE DO SEU SONHO?</p>
        </div>
        <div class="col-sm-10">
          <div class="owl-carousel owl-theme">
            <div>
              <img class="img-responsive" src="{{asset('assets/tag-arte-design-arquitetura.svg')}}" alt="">
            </div>
            <div>
              <img class="img-responsive" src="{{asset('assets/tag-aventura.svg')}}" alt="">
            </div>
            <div>
              <img class="img-responsive" src="{{asset('assets/tag-especial-china.svg')}}" alt="">
            </div>
            <div>
              <img class="img-responsive" src="{{asset('assets/tag-arte-design-arquitetura.svg')}}" alt="">
            </div>
            <div>
              <img class="img-responsive" src="{{asset('assets/tag-aventura.svg')}}" alt="">
            </div>
            <div>
              <img class="img-responsive" src="{{asset('assets/tag-especial-china.svg')}}" alt="">
            </div>
            <div>
              <img class="img-responsive" src="{{asset('assets/tag-arte-design-arquitetura.svg')}}" alt="">
            </div>
            <div>
              <img class="img-responsive" src="{{asset('assets/tag-aventura.svg')}}" alt="">
            </div>
            <div>
              <img class="img-responsive" src="{{asset('assets/tag-especial-china.svg')}}" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- FIM LISTAGENS CATEGORIAS -->

<!-- LISTAGENS CATEGORIAS -->
<div class="container-fluid news" style="background: url('{{asset('assets/bg-newsletter.jpg')}}') center/cover no-repeat;">
  <div class="row" style="margin: 7% 0 5% 0">

    <div class="col-sm-6 col-md-offset-1 col-md-5">
      <div class="newsletter">
        <h1>Assine nossa Newsletter</h1>
        <div class="col-sm-6 col-md-11" style="padding: 0">
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been. </p>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="newsletter-form">
        <form action="" method="get" class="form-inline" accept-charset="utf-8">
          <div class="form-group">
            <label class="newslatter-label" for="newslatter-email">E-MAIL</label>
            <input type="email" class="form-control" id="newslatter-email"/>
            <button id="newslatter-submit" type="submit" class="btn btn-default">ENVIAR</button>
          </div>
        </form>    
      </div>
    </div>

  </div>
</div>
<!-- FIM LISTAGENS CATEGORIAS -->

<!-- LISTAGENS CATEGORIAS -->
<div class="container-fluid" style="background: url('{{asset('assets/bg-categoria-continente-norte.jpg')}}') center/cover no-repeat;">
  <div class="row" style="margin: 7% 0 5% 0">

    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-4 dicas" style="padding: 0">

          <h1>Check-in</h1>
          <hr>
          <div class="collumn">
            <ul class="paises-lista">
              <li><a title="" data-toggle="modal" data-target="#eua">Estados Unidos</a></li>
              <li><a title="" data-toggle="modal" data-target="#hol">Holanda</a></li>
              <li><a title="" data-toggle="modal" data-target="#con">Cone Sul</a></li>
              <li><a title="" data-toggle="modal" data-target="#chi">Chile</a></li>
              <li><a title="" data-toggle="modal" data-target="#mex">México</a></li>
              <li><a title="" data-toggle="modal" data-target="#gui">Guiana</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-offset-1 col-md-2 hidden-sm hidden-xs" style="padding: 0">
          <hr class="hr-vertical">
        </div>
        <div class="col-md-offset-1 col-md-4 dicas" style="padding: 0">
          <h1>Dicas de Viagens</h1>
          <hr>
          <div class="collumn">
            <ul class="paises-lista">
              <li><a title="" data-toggle="modal" data-target="#casa">Casa</a></li>
              <li><a title="" data-toggle="modal" data-target="#bolso">Bolso</a></li>
              <li><a title="" data-toggle="modal" data-target="#doc">Documentos</a></li>
              <li><a title="" data-toggle="modal" data-target="#sau">Saúde</a></li>
              <li><a title="" data-toggle="modal" data-target="#seg">Seguro de Viagem</a></li>
              <li><a title="" data-toggle="modal" data-target="#car">Carro</a></li>
              <li><a title="" data-toggle="modal" data-target="#aer">Aéreo</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@include('modals.modals')

<div class="container-fluid" style="background-color: #d8d8d8">
  <div class="row" style="margin: 7% 0 5% 0">
    <div class="container">
      <div class="row">
        <div class="col-sm-7 col-md-5">
          <div class="border-left">
            <p class="center" style="color: #161b33;">QUEM SOMOS</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <p class="roteiro-paragrafo ">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only ﬁve centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.
          </p>
        </div>
        <div class="col-md-6">
          <p class="roteiro-paragrafo">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only ﬁve centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.
          </p>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-offset-9 col-sm-3">
          <img style="width:97%" src="{{asset('assets/logo-formula-turismo-preta.png')}}" alt="">
        </div>
      </div>
    </div>
  </div>
</div>
<!-- SELECT VIAGENS -->
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
<!--  -->
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12" style="padding: 0">
      <div class="owl-carousel clientes owl-theme">
        <div>
          <img class="img-responsive" src="{{asset('assets/cliente-1.jpg')}}" alt="">
        </div>
        <div>
          <img class="img-responsive" src="{{asset('assets/cliente-2.jpg')}}" alt="">
        </div>
        <div>
          <img class="img-responsive" src="{{asset('assets/cliente-3.jpg')}}" alt="">
        </div>
        <div>
          <img class="img-responsive" src="{{asset('assets/cliente-4.jpg')}}" alt="">
        </div>
        <div>
          <img class="img-responsive" src="{{asset('assets/cliente-5.jpg')}}" alt="">
        </div>
        <div>
          <img class="img-responsive" src="{{asset('assets/cliente-1.jpg')}}" alt="">
        </div>
        <div>
          <img class="img-responsive" src="{{asset('assets/cliente-2.jpg')}}" alt="">
        </div>
        <div>
          <img class="img-responsive" src="{{asset('assets/cliente-3.jpg')}}" alt="">
        </div>
        <div>
          <img class="img-responsive" src="{{asset('assets/cliente-4.jpg')}}" alt="">
        </div>
        <div>
          <img class="img-responsive" src="{{asset('assets/cliente-5.jpg')}}" alt="">
        </div>
      </div>
    </div>
  </div>
</div>

<!-- SELECT VIAGENS -->
<div class="container-fluid select">
  <div class="container select-margin">
    <div class="row margem-padrao">
      <div class="col-sm-offset-4 col-sm-4">
        <img class="img-responsive rodape-center" src="{{asset('assets/logo-formula-turismo-branca.png')}}" alt="">
      </div>
      
      <div class="col-sm-offset-3 col-sm-6">
        <p class="rodape-center">
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod 
        </p>
      </div>
      
      <div class="col-xs-12">
        <div class="col-md-offset-1 col-md-3">
          <img class="roteiro-img" src="{{asset('assets/icon-telefone.svg')}}" alt="" style="width:30px">
          <span class="rodape-span">+55 (21) 2509-4614</span>

        </div>
        <div class="col-md-4">
          <img class="roteiro-img" src="{{asset ('assets/icon-email.svg')}}" alt="" style="width:30px">
          <span class="rodape-span">roteiro@formulaturismo.com.br</span>
        </div>

        <div class="col-md-3">
          <img class="roteiro-img" src="{{asset('assets/icon-facebook.svg')}}" alt="" style="width:30px">
          <span class="rodape-span">+55 (21) 2509-4614</span>
        </div>
      </div>
    </div>
    <div class="row margem-padrao">
      <div class="col-xs-12">
        <div class="row">
          <form action="enviar.php" method="post" name="form" class="formphp form">
            <div class="col-sm-offset-4 col-sm-4 col-md-offset-0">
              <input id="nome" name="nome" type="text" placeholder="Nome">
            </div>
            <div class="col-md-4">
              <input id="telefone" name="telefone" type="text" placeholder="Telefone">
              <label class="nao-aparece">Se você não é um robô, deixe em branco.</label>
              <input type="text" class="nao-aparece" name="leaveblank">
              <label class="nao-aparece">Se você não é um robô, não mude este campo.</label>
              <input type="text" class="nao-aparece" name="dontchange" value="http://" >
            </div>
            <div class="col-md-4">
              <input id="email" name="email" type="text" placeholder="E-mail">
            </div>
            <div class="col-xs-12">
              <textarea name="mensagem" id="mensagem" placeholder="Digite aqui sua mensagem:"></textarea>
            </div>
            <div class="col-md-offset-10 col-md-2">
              <button id="enviar" name="enviar" type="submit">ENVIAR</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--  -->
<div class="container-fluid" style="background-color: #1d233c;">
  <div class="container">
    <div class="row">
      <div class="col-md-offset-9 col-md-3 vilaca">
        Desenvolvido pela
        <img class="vilaca" src="{{asset('assets/agencia-vilaca-eunapolis.svg')}}" alt="">
      </div>
    </div>
  </div>
</div>

@endsection