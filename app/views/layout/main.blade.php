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
<body>

  <header id="header" class="wrapper">
    <div class="container">
      <div class="row">
        <div class="logo col-md-4 col-sm-4 col-xs-12">
          <a class="logo_link" href="/"><img src="images/logo-new.png" alt="logo" /></a>
        </div>

        <div class="logo col-md-8 col-sm-8 col-xs-12 text-right">
          <div class="top_fb"><img src="images/top-fb.png" alt="fb" /></div>
          <ul class="sign_box">
            <li><a class="" href="#">HOW IT WORKS</a></li>
            <li><a class="" href="#">LOGIN</a></li>
          </ul>
        </div>
      </div><!-- //row -->
    </div><!-- //container -->
  </header>

  @yield('body-content')

  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md4 col-sm-4 col-xs-12">
          <a href="index.html"><img src="images/footer_logo.png" alt="" /></a>
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
