<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a new Comic</title>
    <!-- Includiamo gli assets con la direttiva vite-->
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container">
        <h1 class="text-center my-5">New Comic</h1>
        <hr>
        <section>
            <form action="{{ route('comics.store') }}" method="POST">
                <!--Meccanismo di protezione per il form-->
                @csrf
                <!--campi di input-->
                <section>
                    <div class="mb-3">
                        <label for="title" class="form-label">Title is</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <hr>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description is</label>
                        <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                    </div>
                    <hr>
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Thumb is</label>
                        <input type="text" class="form-control" id="thumb" name="thumb">
                    </div>
                    <hr>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price is</label>
                        <input type="text" class="form-control" id="price" name="price">
                    </div>
                    <hr>
                    <div class="mb-3">
                        <label for="series" class="form-label">Series is</label>
                        <input type="text" class="form-control" id="series" name="series">
                    </div>
                    <hr>
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Sale date is</label>
                        <input type="text" class="form-control" id="sale_date" name="sale_date">
                    </div>
                    <hr>
                    <div class="mb-3">
                        <label for="type" class="form-label">Type is</label>
                        <input type="text" class="form-control" id="type" name="type">
                    </div>
                    <hr>
                    <div class="mb-3">
                        <label for="artists" class="form-label">Artists is</label>
                        <input type="text" class="form-control" id="artists" name="artists">
                    </div>
                    <hr>
                    <div class="mb-3">
                        <label for="writers" class="form-label">Writers is</label>
                        <input type="text" class="form-control" id="writers" name="writers">
                    </div>
                </section>
                <!--bottoni-->
                <section>
                    <button class="btn btn-secondary mt-5">Create Comics</button>
                    <button class="btn btn-secondary mt-5"><a href="{{ route('comics.index') }}">Torna alla
                            home</a></button>
                </section>
            </form>
        </section>
    </div>
</body>

</html>
