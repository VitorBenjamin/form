<div class="container-fluid select" style="padding: 60px 0;">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-6 col-md-3">
        <div class="border-left">
          <p class="center">VIAGENS</p>
        </div>
      </div>
      <div class="col-12 col-md-5">
        <form class="buscar" action="{{route('pagina.search')}}" method="post">
          {{ csrf_field() }}
          <input type="search" name="search" placeholder="Buscar..">
          <button type="submit"><i class="material-icons pesquisa">search</i></button>
        </form>
      </div>
    </div>
  </div>
</div>