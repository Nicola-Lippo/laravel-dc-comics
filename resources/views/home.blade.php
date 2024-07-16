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
        <h1 class="text-center">Template laravello</h1>
        <img src="{{ Vite::asset('resources/img/foto.png') }}" alt="foto template">
    </div>
</body>

</html>