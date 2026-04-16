<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/mahasiswa', function () {
    return view('mahasiswa.index', ['title' => 'Aplikasi Input Data Mahasiswa']);
});
Route::get('/mahasiswa/create', function () {
    return view('mahasiswa.create', ['title' => 'Aplikasi Input Data']);
});