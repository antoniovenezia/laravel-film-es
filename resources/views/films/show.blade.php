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
        <h1>{{ $film->titolo }}</h1>
        <h5>Data di uscita: {{ $film->data }}</h5>
        <p>{{ $film->trama }}</p>
        <p>{{ $film->cast }}</p>
        <p>{{ $film->genere }}</p>
        <img src="{{ $film->copertina }}" alt="copertina di {{ $film->titolo }}">
    </div>
    
</body>
</html>