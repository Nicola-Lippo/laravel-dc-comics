<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Template</title>
    <!-- Includiamo gli assets con la direttiva vite-->
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container">
        <section>
            <h1 class="text-center m-5">Welcome</h1>
            <div class="d-flex justify-content-center m-5">
                <button class="btn btn-secondary"><a href="{{ route('comics.index') }}">Go to comics list</a></button>
            </div>

        </section>
    </div>
</body>

</html>
