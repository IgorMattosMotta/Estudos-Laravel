@extends('layouts.main')

@section('title', 'Bem Vindo!')

@section('content')

    @foreach($events as $event)

        <h1>{{$event->title}}</h1>
        <p>{{$event->description}}</p>

    @endforeach

@endsection