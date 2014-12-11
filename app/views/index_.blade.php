@extends('layout.main')

@section('body-content')
<div id="fb-root"></div>
<div id="fb-root"></div>
<div id="fb-root"></div>
<div id="fb-root"></div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1013698725312382&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div> Fitmix
  <div>Welcome {{ Auth::user()->name }}</div>
  <div>
  	<div class="fb-share-button" data-href="https://db.motochanic.com" data-layout="button"></div>
  	<div>Please Copy & Past this code into your post. <a href="http://localhost:8000/referal/{{ Auth::user()->referance_token }}">{{ Auth::user()->referal }}</a></div>
</div>
</div>
@stop