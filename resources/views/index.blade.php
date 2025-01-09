@extends('layouts.index')

@section('title', 'Perpustakaan BKPP Kota Semarang')

@section('content')
<body>
    <div class="logo-header">
        <img src="{{ asset('img/bkpp-icon.png') }}" alt="BKPP Kota Semarang" class="logo-image">
    </div>
    <div class="login-container">
        <div class="login-box">
            <!-- Menampilkan form login dari partials/login-form.blade.php -->
            @include('auth.login')

            <!-- Menampilkan form signup dari partials/signup-form.blade.php -->
            @include('auth.register')
        </div>
        <div class="login-graphics"></div>
    </div>
</body>
@endsection
