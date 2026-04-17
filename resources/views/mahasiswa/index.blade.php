
<x-app>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container">
     <div class="d-flex justify-content">
        <a class="btn btn-success" href="{{ route('mahasiswa.create') }}" role="button">Tambah Data +</a>
     </div>
    </div>
    
   <div class="container mt-5">
    <div class="card shadow">
      <div class="card-header bg-primary text-white text-center">
        <h4 class="mb-0">Data Mahasiswa</h4>
      </div>
      <div class="card-body">
        <div class="table responsive">
          <table class="table table-bordered table-hover align-middle">
            <thead class="table-dark text-center">
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nim</th>
                <th>Prodi</th>
                <th>Semester</th>
                <th>Kelas</th>
                <th>Alamat</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($mahasiswas as $mahasiswa)
              <tr> 
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $mahasiswa->name }}</td>
                <td><span class="badge bg-success">{{ $mahasiswa->nim }}</span></td>
                 <td>{{ $mahasiswa->prodi }}</td>
                  <td>{{ $mahasiswa->semester }}</td>
                   <td>{{ $mahasiswa->kelas }}</td>
                    <td>{{ $mahasiswa->alamat }}</td>
              </tr>
                
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
   </div>
</x-app>