<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arsip_buku', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('opd');
            $table->string('jabatan');
            $table->string('judul');
            $table->string('kegiatan');
            $table->year('tahun');
            $table->string('angkatan');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('arsip_buku');
    }
};
