<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'BKPP Kota Semarang')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>

<body>
    <header class="d-flex justify-content-between align-items-center py-3 px-4">
        <img src="{{ asset('img/bkpp-icon.png') }}" alt="BKPP Kota Semarang" width="200">
    </header>

    <!-- Main Content Section -->
    <main>
        @yield('content')
    </main>

    <!-- Footer Section -->
    

    <!-- Optionally include JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
