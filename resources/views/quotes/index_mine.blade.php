@extends('layouts.app')

@section('content')
<div class="container"> <h1>Todas mis citas</h1> @if(count($quotes)>0)
    <table class="table">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Author</th>
        <th scope="col">Año de publicación</th>
        <th scope="col">Cita</th>
        <th scope="col">Fecha de creación</th>
        <th scope="col">Fecha de actualización</th>
        <th scope="col">Acciones</th>
    </tr>
        </thead>
        <tbody> @foreach($quotes as $quote) <tr>
            <td>{{ $quote -> id}}</td>
            <td> {{ $quote -> author}}</td>
            <td> {{ $quote -> published_year}}</td>
            <td> {{ $quote -> message}}</td>
            <td> {{ $quote -> created_at}}</td>
            <td> {{ $quote -> updated_at}}</td>
            <td> ... </td>
            </tr>
            @endforeach
            </tbody>
             </table>
            {{ $quotes -> links()}}

            @else
            <div class="alert alert-warning text-center" role="alert">
                No hay citas para mostrar
            </div>
            @endif
           
            



            @endsection