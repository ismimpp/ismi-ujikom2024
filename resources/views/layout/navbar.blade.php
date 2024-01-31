<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{('home')}}">CASHIER</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    produk
</button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="{{('data_produk')}}">data produk</a></li>
    <li><a class="dropdown-item" href="{{('tambah_produk')}}">tambah produk</a></li>
  </ul>
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    pelanggan
</button>
<ul class="dropdown-menu">
    <li><a class="dropdown-item" href="{{('data_pelanggan')}}">data pelanggan</a></li>
    <li><a class="dropdown-item" href="{{('tambah_pelanggan')}}">tambah pelanggan</a></li>
  </ul>
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    penjualan
</button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="{{('penjualan')}}">penjualan</a></li>
    <li><a class="dropdown-item" href="{{('detail_penjualan')}}">detail penjualan</a></li>
    <li><a class="dropdown-item" href="{{('data_penjualan')}}">data penjualan</a></li>
  </ul>
</div>
    </div>
  </div>
</nav>
