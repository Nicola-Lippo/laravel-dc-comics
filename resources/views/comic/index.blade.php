<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics List</title>
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container">
        <h1 class="text-center p-5"><strong>COMICS LIST</strong></h1>
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-4 p-3">
                    <div class="text-center">
                        <img src="{{ $comic->thumb }}" class="p-2" alt="foto">
                        <div class="card-body m-2">
                            <h5 class="card-title m-2">
                                <a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a>
                            </h5>
                            <p class="card-text">{{ $comic->series }}</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                            <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-secondary">Edit</a>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
        <hr>
        <button class="btn btn-secondary m-4"><a href="{{ route('comics.create') }}">Create a new comics</a></button>
    </div>

</body>

</html>
