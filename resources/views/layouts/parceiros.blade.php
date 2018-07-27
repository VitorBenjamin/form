<div class="container-fluid height-60" style="background-color:#efefef">
  <div class="container">
    <div class="row">
      <div class="col-sm-7 col-md-5 pt-5">
        <div class="border-left">
          <p class="center" style="color: #161b33;">PARCEIROS E PREMIUNS</p>
        </div>
      </div>
    </div>
    <div class="row justify-content-center height-50">
      <div class="col-10 col-md-12 align-self-center">
        <div class="owl-carousel parceiros owl-theme">
          @foreach ($parceiros as $par)
          <div>
            <img class="img-responsive" src="{{$par->thumb}}" alt="">
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>