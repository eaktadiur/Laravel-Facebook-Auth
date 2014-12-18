@extends('layout.main')

@section('body-content')
<div id="fb-root"></div>
<div id="fb-root"></div>
<div id="fb-root"></div>
<div id="fb-root"></div>
<div id="fb-root"></div>

<div> Fitmix
  <div>Welcome {{ Auth::user()->name }}</div>
  <div>
  	<div class="fb-share-button" data-href="https://db.motochanic.com" data-layout="button"></div>
  	<div>Please Copy & Past this code into your post. <a href="http://localhost:8000/referal/{{ Auth::user()->referance_token }}">{{ Auth::user()->referal }}</a></div>
</div>
</div>
@stop