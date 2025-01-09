<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    // Menampilkan halaman login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Menangani proses login
    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            // Jika login berhasil, redirect berdasarkan role user
            $user = Auth::user();
            if ($user->role === 'admin') {
                return redirect()->route('admin.home'); // Redirect ke halaman admin
            }
            return redirect()->route('home'); // Redirect ke halaman home user
        }

        // Jika login gagal, kembalikan ke halaman login dengan pesan error
        return back()->withErrors([
            'login' => 'Login gagal, username atau password salah.',
        ]);
    }

    // Menampilkan halaman register
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Membuat user baru dengan role default 'people'
        $user = User::create([
            'name' => $validated['name'],
            'username' => $validated['username'],
            'password' => bcrypt($validated['password']),
            'role' => 'people', // Set role menjadi 'people' secara default
        ]);

        // Lakukan login otomatis atau redirect
        auth()->login($user);
        return redirect()->route('home');
    }


    // Menangani proses logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
