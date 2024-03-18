<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{url('home')}}">CRAFT SHOP CASHIER</a>
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
    <li><a class="dropdown-item" href="{{url('data_produk')}}">data produk</a></li>
    <li><a class="dropdown-item" href="{{url('tambah_produk')}}">tambah produk</a></li>
  </ul>
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    pelanggan
</button>
<ul class="dropdown-menu">
    <li><a class="dropdown-item" href="{{url('data_pelanggan')}}">data pelanggan</a></li>
    <li><a class="dropdown-item" href="{{url('tambah_pelanggan')}}">tambah pelanggan</a></li>
  </ul>
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    penjualan
</button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="{{url('penjualan')}}">penjualan</a></li>
    <li><a class="dropdown-item" href="{{url('data_penjualan')}}">data penjualan</a></li>
  </ul>

</ul>
  <li><a href="{{url('/logout')}}" button class="btn btn-outline-secondary" class="link_name" onclick = "return confirm('Anda Yakin Ingin Logout?');" type="submit" >Logout</a></li>
</form>
</div>
    </div>
  </div>
</nav>
