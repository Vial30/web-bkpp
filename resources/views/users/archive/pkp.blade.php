@extends('layouts.app')

@section('title', 'BKPP Kota Semarang - PKP')

@section('content')
@include('partials.header')
@include('partials.navbar')

<div class="container my-5">
    <div class="mb-4">
        <a href="{{ url()->previous() }}" class="btn btn-secondary">
            <i class="fa fa-arrow-left"></i> Kembali
        </a>
    </div>
    <h2 class="section-title mb-4">
        <span class="title-background">PKP ( Pelatihan Kepemimpinan Pengawas)</span>
    </h2>

    <div class="row text-center">
        @php
        // Mengambil data tahun yang unik dari tabel arsip_buku
        // dengan kondisi kegiatan = 'PKP'
        $tahunList = DB::table('arsip_buku')
        ->select('tahun')
        ->distinct()
        ->where('kegiatan', 'PKP') // Menyaring berdasarkan kegiatan 'PKP'
        ->get();
        @endphp

        @foreach($tahunList as $tahun)
        <div class="col-4 col-md-3 mb-3">
            <button class="btn btn-danger btn-lg w-100 py-4">{{ $tahun->tahun }}</button>
        </div>
        @endforeach
    </div>
</div>
@endsection