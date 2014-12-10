@extends('layout.main')

@section('body-content')
<div> Fitmix
  <div>Welcome {{ Auth::user()->name }}</div>
</div>
@stop