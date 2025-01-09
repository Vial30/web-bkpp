@extends('layouts.app')

@section('title', 'BKPP Kota Semarang - Admin')

@section('content')
@include('partials.adminheader')
@include('partials.adminnavbar')

<body class="bg-light">
    <main>
        <section class="container py-5">
            <h2 class="section-title mb-4">
                <span class="title-background">Data Permintaan Peminjaman</span>
            </h2>

            <!-- Card Item 1 -->
            <div class="card mb-2 d-flex">
                <div class="d-flex align-items-center justify-content-center" style="background-color: #bd0b0b; color: white; width: 50px; height: 100%; position: absolute; left: 0; border-radius: 10px 0 0 10px;">
                    <span class="fw-bold">1</span>
                </div>
                <div class="flex-grow-1 p-3" style="background-color: #bd0b0b; color: white; margin-left: 60px; border-radius: 0 10px 10px 0;">
                    <h5 class="mb-1, h5-bold">NAMA PEMINJAM</h5>
                    <h5 class="mb-0">NAMA PEMILIK BUKU</h5>
                    <p class="mb-1" style="font-size: 0.9rem;">Judul Buku</p>
                    <h5 class="mb-1" style="font-size: 1.2rem;">KODE BUKU : </h5>
                    <p class="mb-0" style="font-size: 0.9rem;">Diminta Pada :</p>

                    <!-- Menunggu Persetujuan dengan tombol Setujui dan Tolak di sampingnya -->
                    <div class="d-flex align-items-center" style="font-size: 0.9rem;">
                        <p class="mb-0 mr-2" style="margin-right: 10px;">Menunggu Persetujuan :</p>
                        <button class="btn btn-success btn-sm mr-2 setujui-btn" style="font-size: 0.8rem; padding: 5px 10px; margin-top: 2px;" data-bs-toggle="modal" data-bs-target="#setujuiModal">Setujui</button>
                        <button class="btn btn-danger btn-sm" style="font-size: 0.8rem; padding: 5px 10px; margin-top: 2px;">Tolak</button>
                    </div>
                </div>
            </div>

            <!-- Card Item 2 -->
            <div class="card mb-2 d-flex">
                <div class="d-flex align-items-center justify-content-center" style="background-color: #bd0b0b; color: white; width: 50px; height: 100%; position: absolute; left: 0; border-radius: 10px 0 0 10px;">
                    <span class="fw-bold">2</span>
                </div>
                <div class="flex-grow-1 p-3" style="background-color: #bd0b0b; color: white; margin-left: 60px; border-radius: 0 10px 10px 0;">
                    <h5 class="mb-1, h5-bold">NAMA PEMINJAM</h5>
                    <h5 class="mb-0">NAMA PEMILIK BUKU</h5>
                    <p class="mb-1" style="font-size: 0.9rem;">Judul Buku</p>
                    <h5 class="mb-1" style="font-size: 1.2rem;">KODE BUKU : </h5>
                    <p class="mb-0" style="font-size: 0.9rem;">Diminta Pada :</p>

                    <!-- Menunggu Persetujuan dengan tombol Setujui dan Tolak di sampingnya -->
                    <div class="d-flex align-items-center" style="font-size: 0.9rem;">
                        <p class="mb-0 mr-2" style="margin-right: 10px;">Menunggu Persetujuan :</p>
                        <button class="btn btn-success btn-sm mr-2 setujui-btn" style="font-size: 0.8rem; padding: 5px 10px; margin-top: 2px;" data-bs-toggle="modal" data-bs-target="#setujuiModal">Setujui</button>
                        <button class="btn btn-danger btn-sm" style="font-size: 0.8rem; padding: 5px 10px; margin-top: 2px;">Tolak</button>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Modal Setujui -->
    <div class="modal fade" id="setujuiModal" tabindex="-1" aria-labelledby="setujuiModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="setujuiModalLabel">Masukkan Kode Buku</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="kode-buku" class="form-label">Kode Buku</label>
                            <input type="text" class="form-control" id="kode-buku" placeholder="Masukkan kode buku" required>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-success">Setujui</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Optionally include JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

@endsection
