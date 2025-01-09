    @extends('layouts.index')

    @section('title', 'Sign Up')

    @section('content')
    <div class="signup-container">
        <div class="signup-box">
            <h2>Sign Up</h2>
            <form action="{{ route('register.submit') }}" method="POST">
                @csrf
                <div class="input-container">
                    <input type="text" name="name" placeholder="Full Name" required>
                </div>
                <div class="input-container">
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="input-container">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <div class="input-container">
                    <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
                </div>
                @error('username')
                    <p class="error">{{ $message }}</p>
                @enderror
                <button type="submit" class="signup-button">Sign Up</button>
            </form>
            <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
        </div>
        <!-- <div class="login-graphics"></div> -->
    </div>
    @endsection
