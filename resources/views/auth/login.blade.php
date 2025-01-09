@extends('layouts.index')

@section('title', 'Login')

@section('content')
<div class="login-container">
    <div class="login-box">
        <h2>Login</h2>
        <form action="{{ route('login.submit') }}" method="POST">
            @csrf
            <div class="input-container">
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="input-container">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            @error('login')
                <p class="error">{{ $message }}</p>
            @enderror
            <button type="submit" class="login-button">Login</button>
        </form>
        <p>Don't have an account? <a href="{{ route('register') }}">Sign up</a></p>
    </div>
    <!-- <div class="login-graphics"></div> -->
</div>
@endsection
