<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Jalankan migration untuk membuat tabel users.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Membuat kolom id
            $table->string('name'); // Membuat kolom name
            $table->string('username')->unique(); // Membuat kolom username yang unik
            $table->string('password'); // Membuat kolom password
            $table->string('role')->default('people'); // Menambahkan kolom role dengan nilai default 'people'
            $table->timestamps(); // Membuat kolom created_at dan updated_at
        });
    }

    /**
     * Kebalikan dari migration.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
