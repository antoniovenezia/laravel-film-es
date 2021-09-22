@extends('layouts.app')

@section('content')
<div class="container posts-container">
<a href="{{route('films.index')}}"><button type="button"  class="btn btn-secondary"><- Torna indietro</button></a>
@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('films.store')}}" method="POST">
        @csrf
        <label for="titolo">Titolo :</label>
        <input type="text" name="titolo" id="titolo">
        <label for="data">Data :</label>
        <input type="date" name="data" id="data">
        <label for="trama">Trama :</label>
        <input  name="trama" id="trama"></input>
        <label for="cast">Cast :</label>
        <input type="text" name="cast" id="cast">
        <label for="genere">Genere :</label>
        <input type="text" name="genere" id="genere">
        <label for="copertina">Copertina :</label>
        <input type="text" name="copertina" id="copertina">
        <input class="btn btn-primary" type="submit" value="Invia">
    </form>
    
</div>
@endsection