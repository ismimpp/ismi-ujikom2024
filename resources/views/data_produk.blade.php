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

  <h1><center>DATA PRODUK</center></h1>
  
  <div class="container">
    
    <table class="table table-secondary">
  <thead>
    <tr>
      <th scope="col">Nama Produk</th>
      <th scope="col">Harga</th>
      <th scope="col">Stock</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    @foreach($produk as $produk)
    <tr>
      <th scope="row"><center>{{ $produk->ProdukID }}</center></th>
      <th scope="row"><center>{{ $produk->NamaProduk }}</center></th>
      <th scope="row"><center>{{ $produk->Harga }}</center></th>
      <th scope="row"><center>{{ $produk->Stock }}</center></th>
      <td><center>
        <a href="/data_produk/{{$produk->ProdukID}}" type="button" class="btn btn-outline-danger" onclick="confirm('Apakah anda yakin ingin menghapus data ini?')"><i class="fas fa-trash"></i></a>
        <a href="/update_produk/{{ $produk->ProdukID }}" type="button" class="btn btn-outline-success"></class="fas fa-pen-to-square"></i></a>
        <button type="button" class="btn btn-primary" data-bs-topggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Open modal for @mdo</button>
      </center></td>
    </tr>
    @endforeach
  <tbody>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td class="actions">
        <a href="{{('update_produk')}}"> <button type="button" class="btn btn-outline-success">update</button></a>
        <a href="#"> <button type="button" class="btn btn-outline-danger">hapus</button></a>
</td>
    </tr>
</tbody>
  </div>
</div>
@endsection