@extends('layouts.app')

@section('title', 'BKPP Kota Semarang - Account')

@section('content')
@include('partials.header')
@include('partials.navbar')

<body class="bg-light">

    <main class="d-flex justify-content-center align-items-start py-5">
        <section class="account-section container">
            <div class="row mb-4">
                <!-- Judul Akun yang lebih kecil dan di kiri -->
                <div class="col-auto">
                    <h2 class="bg-danger text-white py-3 px-4 rounded-3 fw-bold fs-3">Akun</h2>
                </div>
            </div>

            <div class="card bg-danger text-white shadow-sm">
                <div class="card-body d-flex flex-column flex-md-row align-items-center">
                    <!-- Bagian Informasi Akun -->
                    <div class="account-info flex-grow-1 mb-4 mb-md-0">
                        <!-- Nama -->
                        <div class="mb-2">
                            <p class="fw-bold mb-1 fs-2">Nama :</p>
                            <hr class="border-0 border-bottom border-4 border-white mb-1 mt-0" style="width: 9.2%;"> <!-- Border putih terang dan lebih tebal -->
                            <p class="fs-3 fw-bold">{{ Auth::user()->name }}</p>
                        </div>

                        <!-- Username (NIP) -->
                        <div>
                            <p class="fw-bold mb-1 fs-2">Username (NIP) :</p>
                            <hr class="border-0 border-bottom border-4 border-white mb-1 mt-0" style="width: 23%;"> <!-- Border putih terang dan lebih tebal -->
                            <p class="fs-3 fw-bold">{{ Auth::user()->username }}</p>
                        </div>
                    </div>

                    <!-- Bagian Avatar -->
                    <div class="avatar ms-2"> <!-- Margin kiri lebih kecil, menggeser gambar ke kiri -->
                        <img src="{{ asset('img/profil.png') }}". alt="Avatar" class="img-fluid rounded-circle border border-white" style="width: 150px; height: 150px;">
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
