<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div>
        <h1>{{ $singleFilm->titolo }}</h1>
        <h5>Data di uscita: {{ $singleFilm->data }}</h5>
        <p>{{ $singleFilm->trama }}</p>
        <p>{{ $singleFilm->cast }}</p>
        <p>{{ $singleFilm->genere }}</p>
        <img src="{{ $singleFilm->copertina }}" alt="copertina di {{ $singleFilm->titolo }}">
    </div>
    
</body>
</html>