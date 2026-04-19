<x-app>
    <x-slot:title>{{ $title }}</x-slot:title>
     <form method="POST" action="{{ route('mahasiswa.update', $mahasiswa) }}">
        @csrf
        @method('PUT')
<div class="container mt-5">
<div class="col-md-6 mx-auto">
  <div class="mb-3">
    <label for="name" class="form-label">Nama</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"name="name"value="{{ old('name', $mahasiswa->name) }}">
        @error('name')  
          <div class="invalid-feedback">{{ $message }}</div> @enderror

    <label for="nim" class="form-label">Nim</label>
     <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim"name="nim" value="{{ old('nim', $mahasiswa->nim) }}">
    @error('nim')  
     <div class="invalid-feedback">{{ $message }}</div> @enderror

    <label for="prodi" class="form-label">Prodi</label>
    <input type="text" class="form-control @error('prodi') is-invalid @enderror" id="prodi"name="prodi"value="{{ old('prodi', $mahasiswa->prodi) }}">
     @error('prodi')  
          <div class="invalid-feedback">{{ $message }}</div> @enderror

    <label for="semester" class="form-label">Semester</label>
    <input type="number" class="form-control @error('semester') is-invalid @enderror" id="semester"name="semester"value="{{ old('semester', $mahasiswa->semester) }}">
     @error('semester')  
     <div class="invalid-feedback">{{ $message }}</div> @enderror


    <label for="kelas" class="form-label">Kelas</label>
    <input type="text" class="form-control @error('kelas') is-invalid @enderror" id="kelas"name="kelas"value="{{ old('kelas', $mahasiswa->kelas) }}">
     @error('kelas')  
     <div class="invalid-feedback">{{ $message }}</div> @enderror


    <label for="alamat" class="form-label">Alamat</label>
    <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat"name="alamat"value="{{ old('alamat', $mahasiswa->alamat) }}">
    @error('alamat')  
     <div class="invalid-feedback">{{ $message }}</div> @enderror
  </div>
 
  <button type="submit" class="btn btn-primary">Kirim</button>
  <a class="btn btn-warning" href="{{ route('mahasiswa.index') }}" role ="button">Batal</a>
</div>
</div>
</form>
</x-app>