@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

   <div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie seu evento</h1>
    <form action="/events" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento:">
            
            <label for="city">Local:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento:">

            <label for="description">Descrição:</label>
            <textarea class="form-control" id="description" name="description" placeholder="Descrição do evento:"></textarea>
            
            <label for="private">O evento é privado?</label>
            <select name="private" id="private" class="form-control">
                <option value="1">Sim</option>
                <option value="0">Não</option>
            </select>
            
            <input type="submit" class="btn btn-primary" value="Criar Evento">
        </div>
    </form>
   </div>

@endsection('content')