@extends('layouts.main')

@section('title', 'produto')

@section('content')
    @if($id == null)
        <p>Nenhum produto selecionado!</p>
    @else
        <p>Exibindo produto id: {{$id}}</p>
    @endif

@endsection('content')