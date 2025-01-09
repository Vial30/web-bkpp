@extends('layouts.app')

@section('title', 'BKPP Kota Semarang - Admin')

@section('content')
@include('partials.adminheader')
@include('partials.adminnavbar')

<body class="bg-light">
    <main>
        <div class="container py-5">
            <div class="d-flex flex-column align-items-center">
                <a href="{{ route('admin.pkntk') }}" class="btn btn-danger w-100 mb-0 p-3 fw-bold fs-4 text-start shadow-sm" style="max-width: 1000px;">PKN Tk II ( Pelatihan Kepemimpinan Nasional Tingkat II )</a>
                <a href="{{ route('admin.pkp') }}" class="btn btn-danger w-100 mb-0 p-3 fw-bold fs-4 text-start shadow-sm" style="max-width: 1000px;">PKP ( Pelatihan Kepemimpinan Pengawas )</a>
                <a href="{{ route('admin.pka') }}" class="btn btn-danger w-100 mb-0 p-3 fw-bold fs-4 text-start shadow-sm" style="max-width: 1000px;">PKA ( Pelatihan Kepemimpinan Administrator )</a>
                <!-- <button class="btn btn-danger w-100 mb-0 p-3 fw-bold fs-4 text-start shadow-sm" style="max-width: 1000px;">PPPK ( Pegawai Pemerintah dengan Perjanjian Kerja )</button> -->
                <button class="btn btn-danger w-100 mb-0 p-3 fw-bold fs-4 text-start shadow-sm" style="max-width: 1000px;">CPNS ( Calon Pegawai Negeri Sipil )</button>
            </div>
        </div>
    </main>

    @endsection