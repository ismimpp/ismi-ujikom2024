@include('layout.navbar')
@section ('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Document</title> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
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
  <tbody>
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
</body>
</html>