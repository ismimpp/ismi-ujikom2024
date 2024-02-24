@extends('layout.app')

@section('content')

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

<body>
    <br><br><br>
    <center>
        <h1>DETAIL PENJUALAN</h1>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col" class="table-secondary">Tanggal</th>
                    <th scope="col" class="table-secondary">Pelanggan</th>
                    <th scope="col" class="table-secondary">Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach($penjualan as $penjualan)
                <tr>
                    <td>{{$penjualan->TanggalPenjualan}}</td>
                    <td>{{$penjualan->PelangganID}}</td>
                    <td>{{$penjualan->TotalHarga}}</td>
                </tr>
                @endforeach
            </tbody>
    </table>
        <br><br>
        <table class="table">
              <thead>
                <tr> 
                <th scope="col" class="table-secondary">Nama Produk</th>
                <th scope="col" class="table-secondary">Harga</th>
                <th scope="col" class="table-secondary">Qty</th>
                <th scope="col" class="table-secondary">Sub Total</th>
                </tr>
              </thead>
              <tbody>
                @foreach($detailpenjualan as $detailpenjualan)
                <tr>
                    <td>{{$detailpenjualan->NamaProduk}}</td>
                    <td>{{$detailpenjualan->Harga}}</td>
                    <td>{{$detailpenjualan->JumlahProduk}}</td>
                    <td>{{$detailpenjualan->SubTotal}}</td>
                </tr>
                @endforeach
            </table>
</body>

@endsection