@extends('layout.app')
@section ('content')
    <br>
    <center><h1>UPDATE PRODUK</h1></center>
    <br>
    <center>
    <form action={{url ("/update_produk/$produk->ProdukID")}} method="POST" enctype="multipart/form-data">

    @method('POST')
    @CSRF
        <table>
            <tr>
                <td width="120"><p>Nama Produk</p></td>
                <td><input type="text" name="NamaProduk" required></td>
            </tr>

            <tr>
                <td><p>Harga</p></td>
                <td><input type="text" name="Harga" requied></td>
            </tr>
            <tr>
                <td><p>Stock</p></td>
                <td><input type="text" name="Stock" required></td>
            </tr> 
</form>
        </table>
<br>
<!-- <button type="submit" class="btn btn-secondary">update</button> -->
<div class="d-grip gap-2 w-25">
    <button class="btn btn-outline-secondary" type="submit">update</button>
</div>
<center>
</form>
</body>
</html>
@endsection