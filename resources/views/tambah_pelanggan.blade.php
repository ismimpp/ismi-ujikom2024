@extends('layout.app')
@section ('content')
    <br>
    <center><h1>TAMBAH PELANGGAN</h1></center>
    <br>
    <center>
    <form action="" method="POST">
    @method ('POST')
    @CSRF
        <table>
            <tr>
                <td width="120"><p>Nama</p></td>
                <td><input type="text" name="NamaPelanggan" required></td>
            </tr>
            <tr>
                <td><p>Alamat</p></td>
                <td><input type="text" name="Alamat" requied></td>
            </tr>
            <tr>
                <td><p>No HP</p></td>
                <td><input type="text" name="NomorTelepon" required></td>
            </tr>
        </table>
<br>
<button type="submit" class="btn btn-outline-secondary">Kirim</button>
</form>
<center>
@endsection