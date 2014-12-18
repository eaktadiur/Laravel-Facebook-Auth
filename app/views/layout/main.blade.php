<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <title>
    @if(isset($title)) 
    {{ $title }}
    @else
    Fitmix-Web
    @endif
  </title>

  {{ HTML::style('css/bootstrap.min.css') }}
  {{ HTML::style('css/font-awesome.css') }}
  {{ HTML::style('css/flexslider.css') }}
  {{ HTML::style('css/style.css') }}


</head>
<body><div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1013698725312382&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

  <header id="header" class="wrapper">
    <div class="container">
      <div class="row">
        <div class="logo col-md-4 col-sm-4 col-xs-12">
          <a class="logo_link" href="/"><img src="{{asset('images/logo-new.png')}}" alt="logo" /></a>
        </div>

        <div class="logo col-md-8 col-sm-8 col-xs-12 text-right">
          <div class="top_fb"><a href="#" data-toggle="modal" data-target="#facebookShareBox"><img src="{{asset('images/top-fb.png')}}" alt="fb" /></a></div>
          <ul class="sign_box">
            <li><a class="" href="#">HOW IT WORKS</a></li>
            @if(Auth::check())
            <li><a class="login" href="{{ URL::route('logout') }}">{{ Auth::user()->username }} - Log Out</a></li>
            @else
            <li><a href="{{ URL::route('facebookAuth') }}">LOGIN</a></li>
            @endif
          </ul>
        </div>
      </div><!-- //row -->
    </div><!-- //container -->
  </header>
@if(Session::has('message'))
   <div class="alert alert-{{ Session::get('message_type') }}">
    <span type="button" class="close" data-dismiss="alert">&times;</span>
    <strong> {{ Session::get('message') }}</strong>
  </div>
  @endif
  @yield('body-content')

  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md4 col-sm-4 col-xs-12">
          <a href="index.html"><img src="{{asset('images/footer_logo.png')}}" alt="" /></a>
        </div>

        <div class="col-md4 col-sm-4 col-xs-12"> &nbsp; </div>


        <div class="col-md4 col-sm-4 col-xs-12">
          <h3>Company</h3>

          <ul class="foot_left">
            <li><a href="#">How it works</a></li>
            <li><a href="#">Contact us</a></li>
            <li><a href="#">Jobs</a></li>
            <li><a href="#">Press</a></li>
          </ul>
          <ul class="foot_right">
            <li><a href="./faq">FAQs</a></li>
            <li><a href="#">Terms of use</a></li>
            <li><a href="#">Privacy Policy</a></li>
          </ul>
        </div>
      </div><!-- //row -->
    </div><!-- //container -->
  </footer><!--footer-->

  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <!-- {{ HTML::script('js/jquery-1.9.1.min.js') }} -->
  {{ HTML::script('js/jquery-migrate-1.2.1.min.js') }}
  <!-- Bootstrap Core JavaScript -->
  {{ HTML::script('js/bootstrap.min.js') }}
  {{ HTML::script('js/jquery.flexslider.js') }}
  {{ HTML::script('js/modernizr.js') }}
  <!-- {{ HTML::script('js/plugins/dataTables/dataTables.bootstrap.js') }} -->

  <script type="text/javascript">
    $(function(){ // for Normal Slider
      // SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        slideshow: false,
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });


    $(window).load(function(){ // For Carousel Slider
      $('.flexslider_csrl').flexslider({
        animation: "slide",
        animationLoop: false,
        itemWidth: 210,
        itemMargin: 5,
        minItems: 2,
        maxItems: 4
      });
    });
  </script>
</body>
</html>
