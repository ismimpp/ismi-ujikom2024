@extends('layout.app')

@section ('content')
<style>
  .buat{
    font-size: 15px;
    text-decoration: none;
    color: black;
    font-family: ;
    text-align: left;
  }

h1{
  font-size: 40px;
  text-decoration: none;
  color: black;
  font-family: ;
  text-align: center;
}

.container{
  width: 900px;
}
</style>

<div class="buat">
  <br><br>

  <h1><center> {{ $judul }}</center></h1>
  
  <div class="container">
  <table class="table table-secondary">
  <thead>
    <tr>
      <th scope="col">ID Pelanggan</th>
      <th scope="col">Nama Pelanggan</th>
      <th scope="col">Alamat</th>
      <th scope="col">Nomor Telepon</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
<tbody class="table-group-divider">
    @foreach($pelanggan as $pelanggan)
    <tr>
      <th scope="row">{{ $pelanggan->PelangganID }}</th>
      <th scope="row">{{ $pelanggan->NamaPelanggan}}</th>
      <th scope="row">{{ $pelanggan->Alamat }}</th>
      <th scope="row">{{ $pelanggan->NomorTelepon }}</th>
      
      <td class="actions">
      <a  type="button" class="btn btn-outline-info" href={{url("/data_pelanggan/update_pelanggan/$pelanggan->PelangganID")}}>update</button></a>
        <a href={{url("/data_pelanggan/hapus/$pelanggan->PelangganID")}}> <button type="button" class="btn btn-outline-danger"  onclick = "return confirm('Anda Yakin Ingin Hapus Pelanggan ini?');" type="submit">hapus<i class="fas fa-trash"></i></button></a>
</td>
</tr>
</tbody>
    @endforeach
</table>
  </div>
</div>
@endsection