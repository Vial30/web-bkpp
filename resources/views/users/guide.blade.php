@extends('layouts.app')

@section('title', 'BKPP Kota Semarang - Guide')

@section('content')
@include('partials.header')
@include('partials.navbar')

<body class="bg-light">

    <main class="container py-5">
        <section class="guide-section">
            <!-- Judul -->
            <div class="row justify-content-center mb-4">
                <div class="col-auto">
                    <h2 class="bg-danger text-white py-3 px-4 rounded-3 fw-bold fs-3">Panduan Penggunaan Website</h2>
                </div>
            </div>

            <!-- Kartu Panduan -->
            <div class="card bg-danger text-white shadow-lg">
                <div class="card-body">
                    <h5 class="card-title fs-4 mb-4">Selamat datang di website Perpustakaan BKPP Kota Semarang!</h5>
                    <p class="card-text fs-5 mb-4">Website ini dirancang untuk memudahkan Anda dalam mengakses berbagai informasi dan layanan di Perpustakaan BKPP Kota Semarang. Berikut adalah panduan lengkap untuk memanfaatkan website ini dengan optimal.</p>

                    <!-- Panduan Navigasi -->
                    <h5 class="fs-4 mt-4 mb-3">1. Navigasi Website</h5>
                    <p class="fs-5">Di bagian atas halaman, Anda akan menemukan menu navigasi utama yang mengarahkan Anda ke beberapa bagian penting seperti:</p>
                    <ul class="list-group list-group-flush fs-5">
                        <li class="list-group-item bg-transparent border-0 text-white"><strong>Home</strong>: Halaman utama website.</li>
                        <li class="list-group-item bg-transparent border-0 text-white"><strong>Peminjaman Buku</strong>: Fitur untuk meminjam buku dari perpustakaan.</li>
                        <li class="list-group-item bg-transparent border-0 text-white"><strong>Arsip Kegiatan</strong>: Menampilkan arsip kegiatan yang telah dilakukan.</li>
                        <li class="list-group-item bg-transparent border-0 text-white"><strong>Pusat Bantuan</strong>: Jika Anda membutuhkan bantuan lebih lanjut mengenai website ini.</li>
                    </ul>

                    <!-- Panduan Fitur Peminjaman Buku -->
                    <h5 class="fs-4 mt-4 mb-3">2. Fitur Peminjaman Buku</h5>
                    <p class="fs-5">Pada halaman **Peminjaman Buku**, Anda dapat mencari buku yang tersedia dan melakukan peminjaman sesuai dengan prosedur yang telah ditentukan.</p>

                    <!-- Panduan Pusat Bantuan -->
                    <h5 class="fs-4 mt-4 mb-3">3. Pusat Bantuan</h5>
                    <p class="fs-5">Jika Anda mengalami kesulitan atau membutuhkan panduan lebih lanjut, Anda dapat mengunjungi halaman **Pusat Bantuan** yang berisi informasi lebih lanjut tentang cara menggunakan website ini.</p>

                    <!-- Panduan Akun Pengguna -->
                    <h5 class="fs-4 mt-4 mb-3">4. Akun Pengguna</h5>
                    <p class="fs-5">Pastikan Anda telah memiliki akun untuk mengakses beberapa fitur eksklusif, seperti meminjam buku. Anda dapat mengelola akun Anda melalui halaman **Akun**.</p>

                    <!-- Panduan Hubungi Kami -->
                    <h5 class="fs-4 mt-4 mb-3">5. Hubungi Kami</h5>
                    <p class="fs-5">Jika Anda memiliki pertanyaan lebih lanjut, Anda dapat menghubungi tim dukungan kami melalui halaman **Kontak** atau melalui email kami yang tertera di bagian bawah setiap halaman.</p>
                </div>
            </div>
        </section>
    </main>

    @endsection