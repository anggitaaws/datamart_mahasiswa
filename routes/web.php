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

// Route untuk melihat daftar mahasiswa
Route::get('/lihat_mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index')->middleware('auth');

// Route untuk menambah mahasiswa
Route::get('/tambah_mahasiswa', [MahasiswaController::class, 'create'])->name('tambah_mahasiswa')->middleware('auth');
Route::post('/tambah_mahasiswa', [MahasiswaController::class, 'store'])->name('store_mahasiswa')->middleware('auth');

// Route untuk melihat detail mahasiswa
Route::get('/mahasiswa/{id}', [MahasiswaController::class, 'show'])->name('mahasiswa.show')->middleware('auth');

// Route untuk mengedit data mahasiswa
Route::get('/mahasiswa/{id}/edit', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit')->middleware('auth');
Route::post('/mahasiswa/{id}/edit', [MahasiswaController::class, 'update'])->name('mahasiswa.update')->middleware('auth');

// Route untuk menghapus mahasiswa
Route::get('/mahasiswa/{id}/delete', [MahasiswaController::class, 'destroy'])->name('mahasiswa.delete')->middleware('auth');

Route::get('/tambah_alumni',[AlumniController::class,'create'])->name('tambah_alumni')->middleware('auth');


