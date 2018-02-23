<div class="container-fluid" style="background: url('{{asset('assets/bg-categoria-continente-norte.jpg')}}') center/cover no-repeat;">
  <div class="row" style="margin: 7% 0 5% 0">

    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-sm-6 col-md-4 dicas" style="padding: 0" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">

          <h1>Check-in</h1>
          <hr>
          <div class="collumn">
            <ul class="paises-lista">
              @foreach ($check as $ch)
                <li><a title="" data-toggle="modal" data-target="#{{$ch->id}}{{$ch->nome}}">{{$ch->nome}}</a></li>
              @endforeach
            </ul>
          </div>
        </div>
        <div class="col-md-1 hidden-sm hidden-xs" style="padding: 0">
          <hr class="hr-vertical">
        </div>
        <div class="col-md-4 dicas" style="padding: 0" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
          <h1>Dicas de Viagens</h1>
          <hr>
          <div class="collumn">
            <ul class="paises-lista">
              @foreach ($dicas as $d)
                <li><a title="" data-toggle="modal" data-target="#{{$d->id}}{{preg_replace('/\s+/', '', $d->nome)}}">{{$d->nome}}</a></li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>