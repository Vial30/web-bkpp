@extends('layouts.app')

@section('title', 'BKPP Kota Semarang - Home')

@section('content')
@include('partials.header')
@include('partials.navbar')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('img/book-icon.png') }}" alt="Permintaan Buku" width="300">
            <!-- Tombol Permintaan Buku, yang mengarah ke halaman users/request -->
            <a href="{{ route('request') }}" class="btn btn-danger">PERMINTAAN BUKU</a>
        </div>

        <div class="col-md-6">
            <img src="{{ asset('img/archive-icon.png') }}" alt="Arsip Kegiatan" width="200">
            <button class="btn btn-danger">ARSIP KEGIATAN</button>
        </div>
    </div>
</div>
@endsection