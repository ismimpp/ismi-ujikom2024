@extends('layout.app')

@section ('content')
    <br>
    <center><h1>TAMBAH PRODUK</h1></center>
    <br>
    <center>
    <form action="" method="POST">
    @method ('POST')
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
                <td><p>Stok</p></td>
                <td><input type="text" name="Stock" required></td>
            </tr>

        </table>
<br>
<button type="submit" class="btn btn-outline-secondary">Kirim</button>
</form>
<center>
@endsection