<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>

    <body>
        
        @foreach($allFilms as $film)
            <div>
                <h1>
                    <a href="{{ route('films.show', ['film'=>$film->id]) }}">{{ $film->titolo }}</a>
                </h1>
                <h5>Data di uscita: {{ $film->data }}</h5>
                <p>{{ $film->trama }}</p>
                <p>{{ $film->cast }}</p>
                <p>{{ $film->genere }}</p>
                <img src="{{ $film->copertina }}" alt="copertina di {{ $film->titolo }}">
                <button><a href="{{route('films.edit',$film)}}">EDIT</a></button>
                <form action="{{route('films.destroy',$film)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Elimina</button>
                </form>
            </div>
        @endforeach

    </body>
</html>
