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
      <th scope="col">ID Produk</th>
      <th scope="col">Nama Produk</th>
      <th scope="col">Harga</th>
      <th scope="col">Stock</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
<tbody class="table-group-divider">
    @foreach($produk as $produk)
    <tr>
      <th scope="row">{{ $produk->ProdukID }}</th>
      <th scope="row">{{ $produk->NamaProduk }}</th>
      <th scope="row">{{ $produk->Harga }}</th>
      <th scope="row">{{ $produk->Stock }}</th>
      
      <td class="actions">
        <a href="update_produk"> <button type="button" class="btn btn-outline-info">update</button></a>
        <a href="/Produk/{{$produk->ProdukID}}"> <button type="button" class="btn btn-outline-danger">hapus<i class="fas fa-trash"></i></button></a>
</td>
</tr>
</tbody>
    @endforeach
</table>
  </div>
</div>
@endsection