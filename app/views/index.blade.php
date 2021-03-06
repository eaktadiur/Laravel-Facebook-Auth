@extends('layout.main')

@section('body-content')
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1013698725312382&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="slider_wrapper">
	<div class="slider_wrapper_inner">


		<div id="slider" class="flexslider">
			<ul class="slides">
				<li>
					<div class="slider_box">
						<div class="slider_txt_box">
							<h1 class="slider_title">Sign up now, <br>Refer friends</h1>
							<h4 class="">And stand a chance to <br>win 1 month FREE subscription?</h4>
							@if(!Auth::check())
							<div class='text-center facebook_div'><a class="facebook_link" href="{{ URL::route('facebookAuth') }}"><span> Sign up with facebook</span></a></div>
							@endif
						</div>
						<img src="images/slider_01.jpg" />
					</div>
				</li>

				<li>
					<div class="slider_box">
						<div class="slider_txt_box">
							<h1 class="slider_title">Sign up now, <br>
								Refer friends</h1>
							<h4 class="">And stand a chance to <br>win 1 month FREE subscription?</h4>
							@if(!Auth::check())
							<div class='text-center facebook_div'><a class="facebook_link" href="{{ URL::route('facebookAuth') }}"><span> Sign up with facebook</span></a></div>
							@endif
						</div>
						<img src="images/slider_01.jpg" />
					</div>
				</li>
			</ul>
		</div>
	</div><!-- //slider_wrapper_inner -->
</div><!--slider_wrapper-->

<div class="fb-post" data-href="http://localhost:8000/referal/abgfd4656636" data-width="500"></div>


<div id="home_featured_wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="photo_box_grp first_box">
					<div class="photo_thumb">
						<div class="photo_month">
							<h4><sup>$</sup>88</h4>
							<span>Monthly</span>
						</div>
						<img src="images/featured_1.jpg" />
					</div>

					<div class="photo_info text-center text-middle1">
						No commitments, cancel anytime. 
					</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="photo_box_grp second_box">
					<div class="photo_thumb">
						<div class="photo_month">
							<h4>8</h4>
							<span>Classes <br> Monthly</span>
						</div>
						<img src="images/featured_1.jpg" />
					</div>

					<div class="photo_info text-center text-middle2">
						Book unfilled slots at any of our participating studios for just $11 per class 
					</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="photo_box_grp third_box">
					<div class="photo_thumb">
						<div class="photo_month">
							<h4>Instant Bookings</h4>
						</div>
						<img src="images/featured_1.jpg" />
					</div>

					<div class="photo_info text-center text-middle3">
						Search for unfilled slots in real-time and make instant bookings
					</div>
				</div>
			</div>
			<div class="featured_links clearfix"><a href="./faq">Find out more</a></div>
		</div><!-- //row -->
	</div><!-- //container -->
	<div class="clr"></div>
</div><!--home_featured_wrapper-->


<div id="prod_filter_grp">
	<div class="container">
		<div class="row">
			<div class=""></div>
			<div class="filter_box">
				<div class="col-md-4 col-sm-4 col-xs-12 prod_box">
					<div class="prod_thumb">
						<span class="mask"><a href="#">COMING SOON</a></span>
						<img src="images/photo_01.jpg" />
					</div>

					<div class="prod_info">
						<h3> yoga change <br> studio <span>Jeo chist road</span></h3>
						<div class="prod_info_right">
							<div class="prod_stock">8</div>
							<div class="stock_info">Slots available</div>
						</div>
					</div>
				</div><!--prod_thumb-->

				<div class="col-md-4 col-sm-4 col-xs-12 prod_box">
					<div class="prod_thumb">
						<span class="mask"><a href="#">COMING SOON</a></span>
						<img src="images/photo_02.jpg" />
					</div>

					<div class="prod_info">
						<h3> ZUMBA CRAZY <br> East <span>Coast Road</span></h3>
						<div class="prod_info_right">
							<div class="prod_stock">10</div>
							<div class="stock_info">Slots available </div>
						</div>
					</div>
				</div><!--prod_thumb-->

				<div class="col-md-4 col-sm-4 col-xs-12 prod_box">
					<div class="prod_thumb">
						<span class="mask"><a href="#">COMING SOON</a></span>
						<img src="images/photo_03.jpg" />
					</div>

					<div class="prod_info">
						<h3> SAMPONG  <br> MUAY THAI <span> City Hall</span></h3>
						<div class="prod_info_right">
							<div class="prod_stock">4</div>
							<div class="stock_info">Slots available </div>
						</div>
					</div>
				</div><!--prod_thumb-->

				<div class="col-md-4 col-sm-4 col-xs-12 prod_box">
					<div class="prod_thumb">
						<span class="mask"><a href="#">COMING SOON</a></span>
						<img src="images/photo_04.jpg" />
					</div>

					<div class="prod_info">
						<h3> POLE MANIA <span>Joo Chiat Road</span></h3>
						<div class="prod_info_right">
							<div class="prod_stock">8</div>
							<div class="stock_info">Slots available </div>
						</div>
					</div>
				</div><!--prod_thumb-->

				<div class="col-md-4 col-sm-4 col-xs-12 prod_box">
					<div class="prod_thumb">
						<span class="mask"><a href="#">COMING SOON</a></span>
						<img src="images/photo_08.jpg" />
					</div>

					<div class="prod_info">
						<h3> MYSTIC YOGA <span>East Coast Road</span></h3>
						<div class="prod_info_right">
							<div class="prod_stock">10</div>
							<div class="stock_info">Slots available </div>
						</div>
					</div>
				</div><!--prod_thumb-->

				<div class="col-md-4 col-sm-4 col-xs-12 prod_box">
					<div class="prod_thumb">
						<span class="mask"><a href="#">COMING SOON</a></span>
						<img src="images/photo_09.jpg" />
					</div>

					<div class="prod_info">
						<h3> OH YOGA! <span>Joo Chiat Road</span></h3>
						<div class="prod_info_right">
							<div class="prod_stock">4</div>
							<div class="stock_info">Slots available </div>
						</div>
					</div>
				</div><!--prod_thumb-->
			</div><!--filter_box-->

		</div><!-- //row -->
	</div><!-- //container -->
</div><!--prod_filter_grp-->
@extends('layout.facebookShare')
@stop




