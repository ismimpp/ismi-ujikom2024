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

<body>
   <form action="" method="POST" enctype="multipart/form-data">

   <div class="buat"
   <br><br>
       <h1><center><big>DATA PENJUALAN</big></center></h1>

       <div class="container">

       <table class="table table-secondary">
        <thead>
          <tr>
            <th scope="col">Penjualan ID</th>
            <th scope="col">Tanggal Penjualan</th>
            <th scope="col">Total Harga</th>
            <th scope="col">Pelanggan ID</th>
            <th scope="col">opsi</th>
          </tr>
        </thead>
        @foreach ($penjualan as $penjualan)
        <tbody>
          <tr>
            <td>{{$penjualan->penjualanID}}</td>
            <td>{{$penjualan->TanggalPenjualan}}</td>
            <td>{{$penjualan->TotalHarga}}</td>
            <td>{{$penjualan->PelangganID}}</td>

            <td class="actions">
              <a type="button" class="btn btn-secondary" href={{url("/detail_penjualan/$penjualan->penjualanID")}}>Detail</button></a>
</td>
</form>
          </tr>
        </tbody>
        @endforeach
</table>
</div>
</div>
@endsection