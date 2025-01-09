<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookRequestsTable extends Migration
{
    public function up()
    {
        Schema::create('book_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Referensi ke tabel users
            $table->string('buku_id');  // ID buku yang dipinjam
            $table->string('nama_buku');
            $table->string('opd');
            $table->string('status')->default('Menunggu Persetujuan'); // Status permintaan
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('book_requests');
    }
}
