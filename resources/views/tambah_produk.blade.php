@extends('layout.app')

@section ('content')
    <br>
    <center><h1>TAMBAH PRODUK</h1></center>
    <br>
    <center>
    <form action="" method="POST">
        <table>
            <tr>
                <td width="120"><p>Nama Produk</p></td>
                <td><input type="text" name="Nama Produk" required></td>
            </tr>
            <tr>
                <td><p>Harga</p></td>
                <td><input type="text" name="Harga" requied></td>
            </tr>
            <tr>
                <td><p>Stok</p></td>
                <td><input type="text" name="stok" required></td>
            </tr>
</form>
        </table>
<br>
<button type="button" class="btn btn-outline-secondary">Kirim</button>
<center>
@endsection