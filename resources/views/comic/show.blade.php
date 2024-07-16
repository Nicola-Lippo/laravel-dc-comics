<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Id Selection</title>
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container">
        <div>
            <h2 class=" text-center m-4">{{ $comics->title }}</h2>
            <img src="{{ $comics->thumb }}" class="p-2" alt="foto">
            <div><strong>{{ $comics->series }}</strong></div>
            <p>{{ $comics->description }}</p>
        </div>
        <hr>
        <!-- Bottone per navigare tra le pagine-->
        <button class="btn btn-secondary m-2"><a href="{{ route('comics.index') }}">Torna a Index</a></button>
    </div>
</body>

</html>
