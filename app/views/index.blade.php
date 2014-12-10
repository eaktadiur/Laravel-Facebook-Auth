@extends('layout.main')

@section('body-content')
<div class="container-fluid">
  <div class="row">
    <div class="top-bar"></div>
    <div class="top-nav"></div>
  </div>
  <div class="row">
    <div class="top-img">
      <div class="img-left-text">
        <h2>SIGN UP NOW</h2>
        <h2>REFFER FRIENDS</h2>
        <p>and stand a chance to <br>
          win 1 month FREE subscription! <br>
          <button class="btn btn-primary">
            <i class='glyphicon glyphicon-asterisk'></i>
            SIGN UP WITH FACEBOOK</button>
          </p>
        </div>
        <div class="img-bottom-bg"></div>
      </div>
    </div>
    <div class="row">
      <div class="sub-header"></div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-4"><img src="{{ asset('img/index_12.png') }}" class="img-responsive">
          <div class="col-lg-7">YOGA CHANGE STADIO</div>
          <div class="col-lg-5">8</div>
        </div>
        <div class="col-lg-4"><img src="{{ asset('img/index_14.png') }}" class="img-responsive">
          <div class="col-lg-7">YOGA CHANGE STADIO</div>
          <div class="col-lg-5">8</div>
        </div>
        <div class="col-lg-4"><img src="{{ asset('img/index_16.png') }}" class="img-responsive">
          <div class="col-lg-7">YOGA CHANGE STADIO</div>
          <div class="col-lg-5">8</div></div>

        </div>
      </div>

    </div>
    <footer class='footer'>
      
    </footer>


<div> 
  <div>Welcome {{ Auth::user()->name }}</div>
</div>
@stop
