<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'username',
        'password',
        'role',  // Menambahkan kolom role
    ];

    // Jika Anda ingin membatasi kolom yang dapat diisi, bisa menggunakan $guarded seperti ini:
    // protected $guarded = ['id'];
}
