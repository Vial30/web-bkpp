@extends('layouts.app')

@section('title', 'BKPP Kota Semarang - Admin Menu')

@section('content')
@include('partials.header')
@include('partials.navbar')

<main class="container py-5">
    <div class="text-center mb-4">
        <h1 class="text-light">Manajemen Perpustakaan</h1>
        <p class="text-muted">Kelola buku dan persetujuan peminjaman dengan mudah</p>
    </div>

    <div class="d-flex justify-content-center gap-3">
        <!-- Tambahkan Buku -->
        <button class="btn btn-danger btn-lg" onclick="window.location.href='#'">
            Tambahkan Buku
        </button>

        <!-- Hapus Buku -->
        <button class="btn btn-danger btn-lg" onclick="window.location.href='#'">
            Hapus Buku
        </button>

        <!-- Persetujuan Peminjaman -->
        <button class="btn btn-danger btn-lg" onclick="window.location.href='#'">
            Persetujuan Peminjaman
        </button>
    </div>
</main>

<style>
    body {
        /* background-color: #8B0000; */
        /* Merah Gelap */
        color: #ffffff;
    }

    .btn-danger {
        background-color: #B22222;
        border-color: #8B0000;
    }

    .btn-danger:hover {
        background-color: #8B0000;
        border-color: #5A0000;
    }
</style>

@endsection