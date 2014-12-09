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

</head>
<body>



 @include('layout.nav')
 <div class="container">
   @if(Session::has('message'))
   <div class="alert alert-{{ Session::get('message_type') }}">
    <span type="button" class="close" data-dismiss="alert">&times;</span>
    <strong> {{ Session::get('message') }}</strong>
  </div>
  @endif
  
  @yield('body-content')
</div>
<!-- jQuery -->
{{ HTML::script('js/jquery-1.9.1.min.js') }}
{{ HTML::script('js/jquery-migrate-1.2.1.min.js') }}
<!-- Bootstrap Core JavaScript -->
{{ HTML::script('js/bootstrap.min.js') }}
{{ HTML::script('js/plugins/dataTables/jquery.dataTables.js') }}
{{ HTML::script('js/plugins/dataTables/dataTables.bootstrap.js') }}
</body>
</html>
