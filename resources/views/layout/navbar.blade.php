<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<style>

</style>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{('home')}}">CASHIER</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link" href="{{('data_produk')}}">data produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{('data_pelanggan')}}">data pelanggan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{('data_penjualan')}}">data penjualan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{('tambah_produk')}}">tambah produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{('tambah_pelanggan')}}">tambah pelanggan</a>
        </li>
    </div>
  </div>
</nav>
</body>
</html>