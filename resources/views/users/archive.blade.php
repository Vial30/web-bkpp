@extends('layouts.app')

@section('title', 'BKPP Kota Semarang - Archive')

@section('content')
@include('partials.header')
@include('partials.navbar')

<body class="bg-light">
    <main>
        <div class="container py-5">
            <div class="d-flex flex-column align-items-center">
                <a href="{{ route('pkntk') }}" class="btn btn-danger w-100 mb-0 p-3 fw-bold fs-4 text-start shadow-sm" style="max-width: 1000px;">PKN Tk II ( Pelatihan Kepemimpinan Nasional Tingkat II )</a>
                <a href="{{ route('pkp') }}" class="btn btn-danger w-100 mb-0 p-3 fw-bold fs-4 text-start shadow-sm" style="max-width: 1000px;">PKP ( Pelatihan Kepemimpinan Pengawas )</a>
                <a href="{{ route('pka') }}" class="btn btn-danger w-100 mb-0 p-3 fw-bold fs-4 text-start shadow-sm" style="max-width: 1000px;">PKA ( Pelatihan Kepemimpinan Administrator )</a>
                <!-- <button class="btn btn-danger w-100 mb-0 p-3 fw-bold fs-4 text-start shadow-sm" style="max-width: 1000px;">PPPK ( Pegawai Pemerintah dengan Perjanjian Kerja )</button> -->
                <button class="btn btn-danger w-100 mb-0 p-3 fw-bold fs-4 text-start shadow-sm" style="max-width: 1000px;">CPNS ( Calon Pegawai Negeri Sipil )</button>
            </div>
        </div>
    </main>

    @endsection