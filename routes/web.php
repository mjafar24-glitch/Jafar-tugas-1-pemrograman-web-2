<?php
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');