@extends('layouts/main')

@section('container')
    <h1> Hello my name is, {{ $name }}</h1>
    <h2> My Email : {{ $email }}</h2>
    <img src="/img/{{ $pic }}" alt="{{ $name }}  width="200" class="img-thumbnail rounded-circle" >    
@endsection