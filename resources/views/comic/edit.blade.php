<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Comics</title>
    <!-- Includiamo gli assets con la direttiva vite-->
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container">
        <h1 class="text-center my-5">Update Comics: {{ $comic->title }}</h1>
        <hr>
        <section>
            <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                <!--Meccanismo di protezione per il form-->
                @csrf
                @method('PUT')
                <!--campi di input-->
                <section>
                    <div class="mb-3">
                        <label for="title" class="form-label">Title is</label>
                        <input type="text" class="form-control" id="title" name="title"
                            value="{{ old('title', $comic->title) }}">
                    </div>
                    <hr>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description is</label>
                        <textarea class="form-control" id="description" rows="3" name="description">{{ old('description', $comic->description) }}</textarea>
                    </div>
                    <hr>
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Thumb is</label>
                        <input type="text" class="form-control" id="thumb" name="thumb"
                            value="{{ old('thumb', $comic->thumb) }}">
                    </div>
                    <hr>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price is</label>
                        <input type="text" class="form-control" id="price" name="price"
                            value="{{ old('price', $comic->price) }}">
                    </div>
                    <hr>
                    <div class="mb-3">
                        <label for="series" class="form-label">Series is</label>
                        <input type="text" class="form-control" id="series" name="series"
                            value="{{ old('series', $comic->series) }}">
                    </div>
                    <hr>
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Sale date is</label>
                        <input type="text" class="form-control" id="sale_date" name="sale_date"
                            value="{{ old('sale_date', $comic->sale_date) }}">
                    </div>
                    <hr>
                    <div class="mb-3">
                        <label for="type" class="form-label">Type is</label>
                        <input type="text" class="form-control" id="type" name="type"
                            value="{{ old('type', $comic->type) }}">
                    </div>
                    <hr>
                    <div class="mb-3">
                        <label for="artists" class="form-label">Artists is</label>
                        <input type="text" class="form-control" id="artists" name="artists"
                            value="{{ old('artists', $comic->artists) }}">
                    </div>
                    <hr>
                    <div class="mb-3">
                        <label for="writers" class="form-label">Writers is</label>
                        <input type="text" class="form-control" id="writers" name="writers"
                            value="{{ old('writers', $comic->writers) }}">
                    </div>
                </section>
                <!--bottoni-->
                <section>
                    <button class="btn btn-secondary mt-5">Update Comics</button>
                    <button class="btn btn-secondary mt-5"><a href="{{ route('comics.index') }}">Torna alla
                            home</a></button>
                </section>
            </form>
        </section>
    </div>
</body>

</html>
