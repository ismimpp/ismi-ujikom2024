@extends('layout.app')

@section('content')

<style>
.buat
{ 
    font-size: 30px;
    text-decoration: none;
    color: black;
    font-family: ;
    text-align: left;
    
}
h1{
    font-size:23px;
    text-decoration: none;
    color: black;
    font-family:;
}
h4{
  font-size:23px;
    text-decoration: none;
    color: black;
    font-family:;
}
.container{
  width: 800px;
  margin-top: 40;
 
}
</style>

<div class="row g-3 align-item-center">

<div class="col-4 p-4">
  @if (Session::has("info"))

  {{Session ("info")}}

  @endif
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
  
<div class="col-12 p-7">
  <h1>Jumlah Produk</h1>
 <input type= "number" id="qty" name="qty" min="1" max="1000"> <br> <br>
 <input type="submit" value="Add" class="btn btn-outline-secondary"></button>
    <h4>Data Pelanggan</h4>
  <select class="form-select" aria-label="Default select example" name="pelanggan">
    <option selected>Enter pelanggan's name</option>
   @foreach($pelanggan as $pelanggan)
   <option value="{{ $pelanggan->PelangganID }}"> {{ $pelanggan->NamaPelanggan }} </option>
   @endforeach
  </select>
</form>
  <div class="container">
  <table class="table table-secondary">
  <thead>
    <tr>
      <th scope="col">Nama Produk</th>
      <th scope="col">Harga</th>
      <th scope="col">QTY</th>
      <th scope="col">subtotal</th>
    </tr>
  </thead>
  <?php $total_harga = 0 ?>
  <tbody
       @foreach($detailpenjualan as $detailpenjualan)
        <tr>
         <td>{{ $detailpenjualan->NamaProduk }}</td>
         <td>{{ $detailpenjualan->Harga }}</td>
         <td>{{ $detailpenjualan->JumlahProduk }}</td>
         <td>{{ $detailpenjualan->SubTotal }}</td>

         <?php $total_harga = $total_harga + $detailpenjualan->SubTotal ?>
        </tr>
     @endforeach
       </tbody>
    </table>

 {{-- <h3>TOTAL HARGA : {{$totalHarga}}</h3> --}}
             <h1>Total Harga : {{ number_format($total_harga,0, ',' , '.') }}</h1>
             <br>
             <form class="d-grid gap-2 mt-3" action='{{url("/checkout")}}' method="POST">
             @method('POST')
             @CSRF
  <input type="hidden" name="idPenjualan" value="{{ $idPenjualan }}">
  <input type="hidden" name="totalharga" value="{{ $total_harga }}">

  <input type="submit" name="submit" value="checkout" class="btn btn-secondary" />
       </form>

          
  </div>
</div>

@endsection
