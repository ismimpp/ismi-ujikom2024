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
<H1><CENTER>DATA PENJUALAN</CENTER></H1>

<div class="container">

    <table class="table table-secondary">
  <thead>
    <tr>
      <th scope="col">tanggal</th>
      <th scope="col">pelanggan</th>
      <th scope="col">total</th>
      <th scope="col">aksi</th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <td></td>
      <td></td>
      <td></td>
      <td class="actions">
        <a href="#"> <button type="button" class="btn btn-outline-success">update</button></a>
        <a href="#"> <button type="button" class="btn btn-outline-danger">hapus</button></a>
</td>
    </tr>
</tbody>
</div>
</div>
@endsection