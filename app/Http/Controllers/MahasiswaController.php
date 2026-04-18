<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          return view('mahasiswa.index', ['title' => 'Aplikasi Input Data Mahasiswa',
          'mahasiswas' => Mahasiswa::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswa.create', ['title' => 'Aplikasi Input Data Mahasiswa']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'nim' => 'required|digits:10|numeric',
            'prodi' => 'required|string|max:50',
            'semester' => 'required|integer|min:1|max:14',
            'kelas' => 'required|string|max:10',
            'alamat' => 'required|string|max:255',
        ],[
            'name.required' => 'Nama Wajib diisi',
            'name.max' =>'Nama Maksimal:max karakter',
            'nim.required' => 'Nim Wajib diisi',
            'nim.digits' => 'Nim Wajib :digits karakter',
            'nim.numeric' => 'Nim Wajib Berupa Angka',
            'prodi.required' => 'Prodi Wajib diisi',
            'prodi.max' => 'Prodi Maksimal :max karakter',
            'semester.required' => 'Semester Wajib diisi',
            'semester.numeric' => 'Semester Wajib Angka',
            'semester.min' => 'Semester Minimal :min',
            'semester.max' => 'Semester Maksimal :max',
            'kelas.required' => 'Kelas Wajib diisi',
            'kelas.max' => 'Kelas Maksimal :max karakter',
            'alamat.required' => 'Alamat Wajib diisi',
            'alamat.max' => 'Alamat Maksimal :max karakter',
        ]);
        Mahasiswa::create($validated);
        return to_route('mahasiswa.index')->withSuccess('Data Berhasil Ditambahkan');
    }
    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        //
    }
}