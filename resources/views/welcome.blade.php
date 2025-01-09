<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 9 with Bootstrap</title>
    <!-- Link ke CSS hasil kompilasi Laravel Mix -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Hello, Laravel 9 with Bootstrap!</h1>
        <button class="btn btn-primary mt-3">Bootstrap Button</button>
    </div>

    <!-- Script JS hasil kompilasi Laravel Mix -->
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
