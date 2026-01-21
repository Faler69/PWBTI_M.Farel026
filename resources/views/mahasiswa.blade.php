@extends('layouts.main')

@section('title', 'Data Mahasiswa')

@section('content')
<h1 class="text-center"> Data Mahasiswa</h1>
    <div class="row">
      <a href="/tambahmahasiswa">
        <button type="button" class="btn btn-success">Tambah Data</button>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">NIM</th>
      <th scope="col">Program Studi</th>
      <th scope="col">Email</th>
      <th scope="col">no. Hp</th>
      <th scope="col">AKSI</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=1 ?>
    @foreach ($data as $mahasiswa)
    <tr>
        <th scope="row"><?php echo $i?></th>
        <td>{{$mahasiswa["nama"]}}</td>
        <td>{{$mahasiswa["nim"]}}</td>
        <td>{{$mahasiswa["prodi"]}}</td>
        <td>{{$mahasiswa["email"]}}</td>
        <td>{{$mahasiswa["nohp"]}}</td>
        <td>
            <a href="tampildata/{{ $mahasiswa['id'] }}" class="btn btn-primary">EDIT</a>
            <a href="#" class="btn btn-danger" onclick="deleteData({{ $mahasiswa['id'] }})">DELETE</a>
        </td>
        <?php $i++?>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

<script>
function deleteData(id) {
    Swal.fire({
        title: 'Yakin ingin menghapus?',
        text: "Data yang dihapus tidak bisa dikembalikan!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#6c757d',
        confirmButtonText: 'Ya, hapus!'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = '/deletedata/' + id;
        }
    })
}
</script>
@endsection