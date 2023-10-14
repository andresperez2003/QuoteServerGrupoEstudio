@extends('layouts.app')

@section('content')
<div class="container">
<h1> Cita al azar</h1>

<blockquote class="blockquote ml-3">
  <p class="mb-3">{{$quote->message}}</p>
  <footer class="blockquote-footer"><cite title="Source Title">{{$quote->author}}</cite></footer>
</blockquote>
Esta cita fue publicada por: <strong>{{$quote->user->name}}</strong>
@endsection
</div>
