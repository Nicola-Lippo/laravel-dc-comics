<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Id Selection</title>
</head>

<body>
    <h1>{{ $comics->title }}</h1>
    <p>{{ $comics->description }}</p>
    <!-- Bottone per navigare tra le pagine-->
    <a href="{{ route('comics.index') }}">Torna a Index</a>
</body>

</html>
