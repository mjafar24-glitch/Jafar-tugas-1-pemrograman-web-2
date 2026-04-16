
<x-app>
    <x-slot:title>{{ $title }}</x-slot:title>
    <form>
<div class="container mt-5">
<div class="col-md-6 mx-auto">
  <div class="mb-3">
    <label for="name" class="form-label">Nama</label>
    <input type="email" class="form-control" id="name"name="name">
    <label for="nim" class="form-label">Nim</label>
    <input type="email" class="form-control" id="nim"name="nim">
    <label for="prodi" class="form-label">Prodi</label>
    <input type="email" class="form-control" id="prodi"name="prodi">
    <label for="semester" class="form-label">Semester</label>
    <input type="email" class="form-control" id="semester"name="semester">
    <label for="kelas" class="form-label">Kelas</label>
    <input type="email" class="form-control" id="kelas"name="kelas">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="email" class="form-control" id="alamat"name="alamat">
    
  </div>
 
  <button type="submit" class="btn btn-primary">Kirim</button>
  <a class="btn btn-warning" href="" role ="button">Batal</a>
</div>
</div>
</form>
</x-app>