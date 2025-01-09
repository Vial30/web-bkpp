@extends('layouts.app')

@section('title', 'BKPP Kota Semarang - Admin')

@section('content')
@include('partials.adminheader')
@include('partials.adminnavbar')

<div class="container py-5">
    <h2 class="text-center section-title mb-5">Pusat Bantuan</h2>

    <!-- FAQ Section with Accordion -->
    <section class="mb-5">
        <h3 class="section-title mb-3">Pertanyaan yang Sering Diajukan (FAQ)</h3>
        <div class="accordion" id="faqAccordion">
            <!-- FAQ Item 1 -->
            <div class="accordion-item card-custom mb-3">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Apa itu Perpustakaan BKPP Kota Semarang?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Perpustakaan BKPP Kota Semarang adalah lembaga yang menyediakan berbagai sumber daya informasi untuk mendukung pelatihan dan pengembangan pegawai di lingkungan Pemerintah Kota Semarang.
                    </div>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="accordion-item card-custom mb-3">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Bagaimana cara meminjam buku di Perpustakaan?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Untuk meminjam buku di Perpustakaan BKPP, Anda perlu menjadi anggota dan mengikuti prosedur peminjaman yang telah ditentukan. Anda dapat melakukannya melalui sistem peminjaman online atau langsung ke perpustakaan.
                    </div>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="accordion-item card-custom mb-3">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Bagaimana cara mengembalikan buku?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Buku yang dipinjam dapat dikembalikan melalui sistem online atau langsung ke loket pengembalian di Perpustakaan BKPP Kota Semarang sesuai dengan jadwal yang telah ditentukan.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Us Section -->
    <section>
        <h3 class="section-title mb-3">Kontak Kami</h3>
        <div class="card card-custom mb-4">
            <div class="card-header card-header-custom">
                <h5 class="mb-0">Jika Anda membutuhkan bantuan lebih lanjut, silakan hubungi kami melalui cara berikut:</h5>
            </div>
            <div class="card-body">
                <ul class="list-unstyled">
                    <li><strong>Email:</strong> <a href="mailto:help@bkppsemarang.go.id">help@bkppsemarang.go.id</a></li>
                    <li><strong>Telepon:</strong> (024) 1234567</li>
                    <li><strong>Alamat:</strong> Jl. Pemuda No. 123, Kota Semarang, Jawa Tengah</li>
                </ul>
            </div>
        </div>
    </section>
</div>
@endsection