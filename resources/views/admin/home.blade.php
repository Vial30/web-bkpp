@extends('layouts.app')

@section('title', 'BKPP Kota Semarang - Admin')

@section('content')
    @include('partials.adminheader')
    @include('partials.adminnavbar')

    <div class="container mt-5">
        <div class="row">
            <!-- Kolom pertama -->
            <div class="col-md-4 d-flex flex-column justify-content-center align-items-center mb-3">
                <img src="{{ asset('img/borrow-icon.png') }}" alt="Data Peminjam Buku" width="300">
                <a href="{{ route('admin.loan') }}" class="btn btn-danger mt-2">DATA PEMINJAM BUKU</a>
            </div>

            <!-- Kolom kedua -->
            <div class="col-md-4 d-flex flex-column justify-content-center align-items-center mb-3">
                <img src="{{ asset('img/back-icon.png') }}" alt="Data Pengembalian Buku" width="300">
                <button class="btn btn-danger mt-2">DATA PENGEMBALIAN BUKU</button>
            </div>

            <!-- Kolom ketiga -->
            <div class="col-md-4 d-flex flex-column justify-content-center align-items-center mb-3">
                <img src="{{ asset('img/archive-icon.png') }}" alt="Arsip Kegiatan" width="200">
                <a href="{{ route('admin.archive') }}" class="btn btn-danger mt-2">ARSIP KEGIATAN</a>
            </div>
        </div>
    </div>
@endsection
