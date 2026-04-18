<?php
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;
Route::get('/',[MahasiswaController::class, 'index'])->name('home');
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
Route::post('/mahasiswa/store', [MahasiswaController::class, 'store'])->name('mahasiswa.store');