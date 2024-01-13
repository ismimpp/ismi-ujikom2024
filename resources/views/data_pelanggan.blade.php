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
      <h1><center>DATA PELANGGAN</center></h1>

      <div class="container">


    <table class="table table-secondary">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">No Telp</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td class="actions">
        <a href="{{('update_pelanggan')}}"> <button type="button" class="btn btn-outline-success">update</button></a>
        <a href="#"> <button type="button" class="btn btn-outline-danger">hapus</button></a>
</td>
    </tr>
</tbody>
  </div>
</div>
@endsection