@extends('layouts.app')

@section('title', 'BKPP Kota Semarang - Request')

@section('content')
@include('partials.header')
@include('partials.navbar')

<body class="bg-light">
    <main>
        <section class="container py-5">
            <h2 class="section-title mb-4">
                <span class="title-background">Status Permintaan Buku</span>
            </h2>
            <div class="card mb-2 d-flex">
                <div class="d-flex align-items-center justify-content-center" style="background-color: #bd0b0b; color: white; width: 50px; height: 100%; position: absolute; left: 0; border-radius: 10px 0 0 10px;">
                    <span class="fw-bold">1</span>
                </div>
                <div class="flex-grow-1 p-3" style="background-color: #bd0b0b; color: white; margin-left: 60px; border-radius: 0 10px 10px 0;">
                    <h3 class="h3-bold">NAMA PEMILIK BUKU</h3>
                    <h5 class="h5-bold">OPD</h5>
                    <p class="mb-0" style="font-size: 0.9rem;">Jabatan di OPD</p>
                    <hr style="border: 1px solid white; margin: 10px 0;">
                    <p class="mb-1" style="font-size: 0.9rem;">Judul Buku</p>
                    <p class="mb-0" style="font-size: 0.9rem;">Status : Siap Di Ambil</p>
                </div>
            </div>

            <div class="card mb-2 d-flex">
                <div class="d-flex align-items-center justify-content-center" style="background-color: #bd0b0b; color: white; width: 50px; height: 100%; position: absolute; left: 0; border-radius: 10px 0 0 10px;">
                    <span class="fw-bold">2</span>
                </div>
                <div class="flex-grow-1 p-3" style="background-color: #bd0b0b; color: white; margin-left: 60px; border-radius: 0 10px 10px 0;">
                    <h3 class="h3-bold">NAMA PEMILIK BUKU</h3>
                    <h5 class="h5-bold">OPD</h5>
                    <p class="mb-0" style="font-size: 0.9rem;">Jabatan di OPD</p>
                    <hr style="border: 1px solid white; margin: 10px 0;">
                    <p class="mb-1" style="font-size: 0.9rem;">Judul Buku</p>
                    <p class="mb-0" style="font-size: 0.9rem;">Status : Menunggu Persetujuan</p>
                </div>
            </div>
        </section>
    </main>
@endsection
