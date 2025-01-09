@extends('layouts.app')

@section('title', 'BKPP Kota Semarang - Loans')

@section('content')
@include('partials.header')
@include('partials.navbar')

<body class="bg-light">
    <main>
        <section class="container py-5">
            <h2 class="section-title mb-4">
                <!-- Section title for the loaned books list -->
                <span class="title-background">Peminjaman Buku</span>
            </h2>
            <div class="card mb-2 d-flex" style="position: relative;">
                <!-- Separate box for index or order number with dark red background and rounded corners -->
                <div class="d-flex align-items-center justify-content-center" style="background-color: #bd0b0b; color: white; width: 50px; height: 100%; position: absolute; left: 0; border-radius: 10px 0 0 10px;">
                    <span class="fw-bold">1</span>
                </div>
                <!-- Main content of the card with dark red background and rounded corners -->
                <div class="flex-grow-1 p-3" style="background-color: #bd0b0b; color: white; margin-left: 60px; border-radius: 0 10px 10px 0;">
                    <h4 class="h4-bold">NAMA PEMILIK BUKU</h4>
                    <h5 class="h5-bold">OPD</h5>
                    <p class="mb-0" style="font-size: 0.9rem;">Jabatan di OPD</p>
                    <hr style="border: 1px solid white; margin: 10px 0;">
                    <p class="mb-1" style="font-size: 0.9rem;">Judul Buku</p>
                    <p class="mb-0" style="font-size: 0.9rem;">Di Pinjam pada : -</p>
                    <p class="mb-0" style="font-size: 0.9rem;">Di Kembalikan pada : -</p>
                    <!-- Pojok Kanan Atas: Status Buku -->
                    <div class="position-absolute" style="top: 10px; right: 10px; font-size: 1rem; font-weight: bolder; color: white;">
                        <p><span style="font-size: 0.9rem; font-weight: bold; color:rgb(0, 255, 0); border: 2px solid white; border-radius: 10px; padding: 2px 4px;">DIKEMBALIKAN</span></p>
                    </div>


                    <!-- Pojok Kanan Bawah: Kode Buku -->
                    <div class="position-absolute" style="bottom: 10px; right: 10px; font-size: 0.9rem; font-weight: bold; color: white;">
                        <p class="mb-0">Kode Buku: 12345</p>
                    </div>
                </div>
            </div>

            <div class="card mb-2 d-flex" style="position: relative;">
                <!-- Separate box for index or order number with dark red background and rounded corners -->
                <div class="d-flex align-items-center justify-content-center" style="background-color: #bd0b0b; color: white; width: 50px; height: 100%; position: absolute; left: 0; border-radius: 10px 0 0 10px;">
                    <span class="fw-bold">2</span>
                </div>
                <!-- Main content of the card with dark red background and rounded corners -->
                <div class="flex-grow-1 p-3" style="background-color: #bd0b0b; color: white; margin-left: 60px; border-radius: 0 10px 10px 0;">
                    <h4 class="h4-bold">NAMA PEMILIK BUKU</h4>
                    <h5 class="h5-bold">OPD</h5>
                    <p class="mb-0" style="font-size: 0.9rem;">Jabatan di OPD</p>
                    <hr style="border: 1px solid white; margin: 10px 0;">
                    <p class="mb-1" style="font-size: 0.9rem;">Judul Buku</p>
                    <p class="mb-0" style="font-size: 0.9rem;">Di Pinjam pada : -</p>
                    <p class="mb-0" style="font-size: 0.9rem;">Di Kembalikan pada : -</p>

                    <!-- Pojok Kanan Atas: Status Buku -->
                    <div class="position-absolute" style="top: 10px; right: 10px; font-size: 1rem; font-weight: bolder; color: white;">
                        <p><span style="font-size: 0.9rem; font-weight: bold; color:rgb(255, 255, 255); border: 2px solid white; border-radius: 10px; padding: 2px 4px;">DIPINJAM</span></p>
                    </div>


                    <!-- Pojok Kanan Bawah: Kode Buku -->
                    <div class="position-absolute" style="bottom: 10px; right: 10px; font-size: 0.9rem; font-weight: bold; color: white;">
                        <p class="mb-0">Kode Buku: 12345</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @endsection