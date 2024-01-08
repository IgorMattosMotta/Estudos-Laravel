@extends('layouts.main')

@section('title', 'Produtos')

@section('content')

    @foreach($produtos as $produto)

        <p>{{$produto}}</p>

    @endforeach

@endsection('content')