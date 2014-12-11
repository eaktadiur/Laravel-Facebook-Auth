@extends('layout.main')

@section('body-content')

<div class="top-bar"></div>
<div class="container">
	<div class="row">
		@if(Auth::check())
		<a href="{{URL::route('logout') }}" class="pull-right"> Log Out</a><span class="pull-right">{{ Auth::user()->email}}| </span> 
		@endif
		<a href="" class="logo"></a>
		<span class="fb-icon">F</span>
	</div>
</div>





<div class="container-fluid">
	<div class="row-fluid">
		<div class="top-img">
			<div class="img-left-text">
				<h2>SIGN UP NOW <br> REFFER FRIENDS</h2>
				<p>And stand a chance to <br>
					win 1 month FREE subscription! <br>
          <!-- <a href="#" class="fb-button">
          SIGN UP WITH FACEBOOK</a> -->
          <a id="btn-fblogin" href="fbauth" class="btn fb-button btn-primary">SIGN UP WITH FACEBOOK</a>
      </p>
  </div>
  <div class="img-bottom-bg"></div>
</div>
</div>
</div>


<div class="container">
	<div class="row">
		<div class="sub-header"></div>
	</div>

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
	<footer class='footer'>
		<div class="row">
			<div class="col-lg-offset-8 col-lg-4">

				Company
				<ul class="">
					<li>How it Works</li>
					<li>Contact us</li>
					<li>Jobs</li>
					<li>Press</li>
					<li>FAQs</li>
					<li>Terms of us</li>
					<li>Privacy Policy</li>
				</ul>
			</div>
		</div>

	</footer>
	@stop
