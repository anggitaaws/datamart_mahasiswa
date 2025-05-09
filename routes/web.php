<?php

use App\Http\Controllers\AlumniController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

//Route::get('/', function () {
    //return view('welcome');
//});

Route::get('/',[UserController::class,'login'])->name('login');
Route::post('/',[UserController::class,'doLogin'])->name('login.post');

Route::post('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::prefix('data_mahasiswa')->middleware('auth')->group(function () {
    // Route untuk melihat daftar mahasiswa
    Route::get('/lihat_mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');

    // Route untuk menambah mahasiswa
    Route::get('/tambah_mahasiswa', [MahasiswaController::class, 'create'])->name('tambah_mahasiswa');
    Route::post('/tambah_mahasiswa', [MahasiswaController::class, 'store'])->name('store_mahasiswa');

    // Route untuk melihat detail mahasiswa
    Route::get('/mahasiswa/{id}', [MahasiswaController::class, 'show'])->name('mahasiswa.show');

    // Route untuk mengedit data mahasiswa
    Route::get('/mahasiswa/{id}/edit', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
    Route::put('/mahasiswa/{id}/edit', [MahasiswaController::class, 'update'])->name('mahasiswa.update');

    // Route untuk menghapus mahasiswa
    Route::delete('/mahasiswa/{id}/delete', [MahasiswaController::class, 'destroy'])->name('mahasiswa.delete');
});


Route::prefix('data_alumni')->middleware('auth')->group(function () {
    // Route untuk melihat daftar alumni
    Route::get('/lihat_alumni', [AlumniController::class, 'index'])->name('alumni.index');

    // Route untuk menambah alumni
    Route::get('/tambah_alumni', [AlumniController::class, 'create'])->name('tambah_alumni');
    Route::post('/tambah_alumni', [AlumniController::class, 'store'])->name('store_alumni');

    // Route untuk melihat detail alumni
    Route::get('/alumni/{id}', [AlumniController::class, 'show'])->name('alumni.show');

    // Route untuk mengedit data alumni
    Route::get('/alumni/{id}/edit', [AlumniController::class, 'edit'])->name('alumni.edit');
    Route::put('/alumni/{id}/edit', [AlumniController::class, 'update'])->name('alumni.update');

    // Route untuk menghapus alumni
    Route::delete('/alumni/{id}/delete', [AlumniController::class, 'destroy'])->name('alumni.delete');
});




