@extends('layouts.app')

@section('title', 'BKPP Kota Semarang - PKA')

@section('content')
@include('partials.header')
@include('partials.navbar')

<div class="container my-5">
    <!-- Tombol Kembali -->
    <div class="mb-4">
        <a href="{{ url('/archive') }}" class="btn btn-secondary">
            <i class="fa fa-arrow-left"></i> Kembali
        </a>
    </div>
    <h2 class="section-title mb-4">
        <span class="title-background">PKA (Pelatihan Kepemimpinan Administrator)</span>
    </h2>

    <div class="row text-center">
        @php
            // Mengambil data tahun yang unik dari tabel arsip_buku
            $tahunList = DB::table('arsip_buku')
                ->select('tahun')
                ->distinct()
                ->where('kegiatan', 'PKA') // Menyaring berdasarkan kegiatan 'PKA'
                ->get();
        @endphp

        @foreach($tahunList as $tahun)
            <div class="col-4 col-md-3 mb-3">
                <!-- Mengirimkan tahun sebagai parameter ke URL -->
                <a href="{{ url('/pka-angkatan?tahun=' . $tahun->tahun) }}" class="btn btn-danger btn-lg w-100 py-4">{{ $tahun->tahun }}</a>
            </div>
        @endforeach
    </div>
</div>
@endsection
