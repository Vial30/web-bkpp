@extends('layouts.app')

@section('title', 'BKPP Kota Semarang - PKA Angkatan')

@section('content')
@include('partials.header')
@include('partials.navbar')

<div class="container my-5">
    <div class="mb-4">
        <a href="{{ route('pka') }}" class="btn btn-secondary">
            <i class="fa fa-arrow-left"></i> Kembali
        </a>
    </div>
    <h2 class="section-title mb-4">
        <span class="title-background">PKA Angkatan - Tahun {{ request('tahun') }}</span>
    </h2>

    @php
    // Mengambil tahun yang dipilih dari URL
    $tahunDipilih = request('tahun');

    // Ambil data angkatan berdasarkan tahun yang dipilih dan pastikan tidak ada duplikasi
    $angkatanList = DB::table('arsip_buku')
    ->where('tahun', $tahunDipilih)
    ->where('kegiatan', 'PKA')
    ->select('angkatan', 'tahun') // Pilih hanya nama angkatan dan tahun
    ->groupBy('angkatan', 'tahun') // Group by angkatan dan tahun untuk menghindari duplikat
    ->get();
    @endphp
    @foreach($angkatanList as $angkatan)
        <div class="row">
            <div class="col-4 col-md-3 mb-3">
                <!-- Mengirimkan tahun dan angkatan sebagai parameter ke URL -->
                <a href="{{ route('pka-book', ['tahun' => $tahunDipilih, 'angkatan' => $angkatan->angkatan]) }}" class="btn btn-danger btn-lg w-100 py-4">
                    {{ $angkatan->angkatan }}
                </a>
            </div>
        </div>
    @endforeach
@endsection