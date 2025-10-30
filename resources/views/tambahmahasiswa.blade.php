@extends('layouts.main');

@section('content')
    <h1 class="text-center"> Tambah Data Mahasiswa</h1>
    
    <div class="card">
            <div class="card-body bg-light">
                <form action="/insertmahasiswa" method="POST" enctype="multipart/form-data">
                @csrf
  <div class="mb-3">
    <label for="nama" class="form-label">Nama Mahasiswa</label>
    <input type="text" name="name" id="name" placeholder="Nama Lengkap" class="form-control">
  </div>
  <div class="mb-3">
    <label for="nim" class="form-label">NIM</label>
    <input type="number" name="nim" id="nim" placeholder="NIM" class="form-control">
  </div>
  <div class="mb-3">
    <label for="prodi" class="form-label">Program Studi</label>
    <input type="text" name="prodi" id="prodi" placeholder="Prodi Anda" class="form-control">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="text" name="email" id="email" class="form-control">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nomor HP</label>
    <input type="number" name="nohp" id="nohp" class="form-control">
</div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
    </div>
    
    

@endsection