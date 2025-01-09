<?php

namespace App\Http\Controllers;

use App\Models\BookRequest;
use Illuminate\Http\Request;

class BookRequestController extends Controller
{
    // Method untuk menyimpan permintaan peminjaman buku
    public function store(Request $request)
    {
        // Validasi data yang diterima
        $request->validate([
            'nama' => 'required|string',
            'opd' => 'required|string',
            'jabatan' => 'required|string',
            'judul' => 'required|string',
        ]);

        // Simpan permintaan peminjaman buku
        $bookRequest = new BookRequest();
        $bookRequest->nama = $request->nama;
        $bookRequest->opd = $request->opd;
        $bookRequest->jabatan = $request->jabatan;
        $bookRequest->judul = $request->judul;
        $bookRequest->status = 'Menunggu Persetujuan';
        $bookRequest->user_id = auth()->user()->id;  // Asumsikan pengguna sudah login
        $bookRequest->save();

        return redirect()->route('book.requests')->with('success', 'Permintaan peminjaman buku berhasil!');
    }

    // Method untuk menampilkan permintaan buku yang telah dibuat
    public function index()
    {
        // Mengambil semua permintaan buku yang dibuat oleh user yang sedang login
        $requests = BookRequest::where('user_id', auth()->user()->id)->get();

        // Pastikan data dikirim ke view
        return view('users.request', compact('requests'));
    }
}
