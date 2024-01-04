@extends('layouts.main')

@section('title', 'Igor Mattos')

@section('content')

    @for($i= 0; $i < count($arr); $i++)
        <p>{{$arr[$i]}}</p>
    @endfor

    @foreach($nomes as $nome)
        <p>{{ $nome }}</p>
    @endforeach

    <img src="img/download.jpg" alt="Sala de reunião">

@endsection