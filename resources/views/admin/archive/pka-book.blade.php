@extends('layouts.app')

@section('title', 'BKPP Kota Semarang - PKA Book')

@section('content')
@include('partials.adminheader')
@include('partials.adminnavbar')

<body class="bg-light">
    <main>
        <section class="container py-5">
            <!-- Tombol Kembali -->
            <div class="mb-4">
                <a href="{{ url()->previous() }}" class="btn btn-secondary">
                    <i class="fa fa-arrow-left"></i> Kembali
                </a>
            </div>
            <h2 class="section-title mb-4">
                <span class="title-background">Angkatan {{ request('angkatan') }} - Tahun {{ request('tahun') }}</span>
            </h2>

            @php
            // Mengambil tahun dan angkatan dari URL
            $tahunDipilih = request('tahun');
            $angkatanDipilih = request('angkatan');

            // Mengambil data dari tabel arsip_buku berdasarkan tahun dan angkatan yang dipilih
            $bukuList = DB::table('arsip_buku')
            ->where('tahun', $tahunDipilih)
            ->where('angkatan', $angkatanDipilih)
            ->where('kegiatan', 'PKA') // Menyaring hanya untuk kegiatan 'PKA'
            ->get(['nama', 'opd', 'jabatan', 'judul']); // Ambil data nama, opd, jabatan, dan judul buku
            @endphp

            @if($bukuList->isEmpty())
            <p class="text-center">Tidak ada data buku untuk Angkatan {{ $angkatanDipilih }} tahun {{ $tahunDipilih }}.</p>
            @else
            @foreach($bukuList as $index => $buku)
            <div class="card mb-2 d-flex buku-container" data-buku-id="{{ $index }}">
                <div class="d-flex align-items-center justify-content-center" style="background-color: #bd0b0b; color: white; width: 50px; height: 100%; position: absolute; left: 0; border-radius: 10px 0 0 10px;">
                    <span class="fw-bold">{{ $index + 1 }}</span>
                </div>
                <div class="flex-grow-1 p-3" style="background-color: #bd0b0b; color: white; margin-left: 60px; border-radius: 0 10px 10px 0;">
                    <h3 class="h3-bold">{{ $buku->nama }}</h3> <!-- Nama Pemilik Buku -->
                    <h5 class="h5-bold">{{ $buku->opd }}</h5> <!-- OPD -->
                    <p class="mb-0" style="font-size: 0.9rem;">{{ $buku->jabatan }}</p> <!-- Jabatan di OPD -->
                    <hr style="border: 1px solid white; margin: 10px 0;">
                    <p class="mb-1" style="font-size: 0.9rem;">{{ $buku->judul }}</p> <!-- Judul Buku -->
                </div>
            </div>
            @endforeach
            @endif
        </section>
    </main>

    <!-- Modal Pinjam Buku -->
    <div id="pinjamModal" class="modal" style="display: none;">
        <div class="modal-content">
            <h4>Ingin meminjam buku ini?</h4>
            <button id="pinjamButton" class="btn btn-danger">Pinjam</button>
            <button id="closeModal" class="btn btn-secondary">Tutup</button>
        </div>
    </div>

    <!-- Tambahkan beberapa styling untuk modal -->
    <style>
        .modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: none;
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            width: 300px;
            text-align: center;
        }

        .buku-container {
            cursor: pointer;
        }
    </style>

    <!-- JavaScript untuk modal interaktivitas -->
    <script>
        // Ambil semua kontainer buku yang dapat diklik
        const bukuContainers = document.querySelectorAll('.buku-container');
        const modal = document.getElementById('pinjamModal');
        const closeModal = document.getElementById('closeModal');
        const pinjamButton = document.getElementById('pinjamButton');

        // Saat kontainer buku diklik, buka modal
        bukuContainers.forEach(container => {
            container.addEventListener('click', function() {
                modal.style.display = 'flex'; // Tampilkan modal
            });
        });

        // Menutup modal
        closeModal.addEventListener('click', function() {
            modal.style.display = 'none'; // Sembunyikan modal
        });

        // Fungsi pinjam buku
        pinjamButton.addEventListener('click', function() {
            alert('Buku berhasil dipinjam!');
            modal.style.display = 'none'; // Tutup modal setelah tombol Pinjam ditekan
        });
    </script>
</body>

@endsection
