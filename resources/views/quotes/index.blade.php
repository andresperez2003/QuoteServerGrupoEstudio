@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Todas las citas</h1>

        @if(count($quotes)>0)
        @foreach($quotes as $quote)
        <div class="card mb-3" >
            <div class="card-body">
                <p class="card-text">{{ $quote -> message}} </p>
                <h5 class="card-title mb-2">{{ $quote-> author}}</h5>
                <a href="#"  style="text-decoration:none;" class="card-link">Ver perfil de {{ $quote -> user -> name}}</a>
            </div>
            </div>
        @endforeach
        {{ $quotes -> links()}}
        @else
    <div class="alert alert-warning text-center" role="alert">
        No hay citas para mostrar
    </div>
    @endif
        

@endsection