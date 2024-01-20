@extends('layout.app')

@section('content')

<div class="row g-3 align-item-center">

<div class="col-4 p-4">
    <h4>Data Produk</h4>
  <form action='{{ url("/tambahpenjualan") }}' method="post">
  @method ('POST')
  @CSRF
  <input type="hidden" name="idPenjualan" value="{{$idPenjualan}}" />
  <select class="form-select" aria-label="Default select example" name="produk">
    <option selected>Enter the Product</option>
   @foreach($produk as $produk)
   <option value="{{ $produk->ProdukID }}"> {{ $produk->NamaProduk }} </option>
   @endforeach
  </select>
  
</div>


@endsection