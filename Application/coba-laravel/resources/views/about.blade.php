@extends('layouts/main')
@section('container')
    
    <h1>Halaman {{ $title }}</h1>

    <h3>{{ $name }} </h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" style="height:400px; width:auto;" class="img-thumbnail rounded-circle" alt="{{ $name }}">


    @endsection
