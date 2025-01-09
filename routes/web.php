<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExcelImportController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookRequestController;



Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



Route::get('/pkp', function () {
    // Ambil daftar tahun unik dari tabel arsip_buku
    $tahunArsipBuku = DB::table('arsip_buku')
        ->select('tahun')
        ->distinct()
        ->orderByDesc('tahun')
        ->get(); // Ambil data

    // Kirim data ke view
    return view('home', compact('tahunArsipBuku'));
});


Route::get('/import', [ExcelImportController::class, 'showImportForm'])->name('import.form');
Route::post('/import', [ExcelImportController::class, 'importExcel'])->name('import.excel');


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('index');
});

Route::middleware(['auth'])->group(function () {
    // Route untuk user (role people)
    Route::get('/home', function () {
        return view('users/home');  // Halaman user
    })->name('home');

    Route::get('/loans', function () {
        return view('users/loans');
    });

    Route::get('/archive', function () {
        return view('users/archive');
    });

    Route::get('/help', function () {
        return view('users/help');
    });

    Route::get('/account', function () {
        return view('users/account');
    });

    Route::get('/guide', function () {
        return view('users/guide');
    });

    Route::get('/request', function () {
        return view('users/request');
    })->name('request');

    Route::get('/pkntk', function () {
        return view('users/archive/pkntk');
    })->name('pkntk');

    Route::get('/pka', function () {
        return view('users/archive/pka');
    })->name('pka');

    Route::get('/pkp', function () {
        return view('users/archive/pkp');
    })->name('pkp');

    Route::get('/pka-angkatan', function () {
        return view('users/archive/pka-angkatan');
    })->name('pka-angkatan');

    Route::get('/pka-book', function () {
        return view('users/archive/pka-book');
    })->name('pka-book'); 

});


// Route untuk admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/home', function () {
        return view('admin/home');
    })->name('admin.home');

    Route::get('/admin/loan', function () {
        return view('admin/loan');
    })->name('admin.loan');

    Route::get('/admin/request', function () {
        return view('admin/request');
    });

    Route::get('/admin/help', function () {
        return view('admin/help');
    });

    Route::get('/admin/account', function () {
        return view('admin/account');
    });

    Route::get('/admin/import', function () {
        return view('admin/import');
    });

    Route::get('/admin/archive', function () {
        return view('admin/archive');
    })->name('admin.archive');

    Route::get('/admin/pkntk', function () {
        return view('users/archive/pkntk');
    })->name('admin.pkntk');

    Route::get('/admin/pka', function () {
        return view('admin/archive/pka');
    })->name('admin.pka');

    Route::get('/admin/pkp', function () {
        return view('admin/archive/pkp');
    })->name('admin.pkp');

    Route::get('/admin/pka-angkatan', function () {
        return view('admin/archive/pka-angkatan');
    })->name('admin.pka-angkatan');

    Route::get('/admin/pka-book', function () {
        return view('admin/archive/pka-book');
    })->name('admin.pka-book'); 
});
