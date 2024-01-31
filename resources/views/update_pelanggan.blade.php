@extends('layout.app')
@section ('content')
    <br>
    <center><h1>UPDATE PELANGGAN</h1></center>
    <br>
    <center>
    <form action={{url ("/update_pelanggan/$pelanggan->PelangganID")}} method="POST" enctype="multipart/form-data">

    @method('POST')
    @CSRF
        <table>
            <tr>
                <td width="120"><p>Nama Pelanggan</p></td>
                <td><input type="text" name="NamaPelanggan" required></td>
            </tr>

            <tr>
                <td><p>Alamat</p></td>
                <td><input type="text" name="Alamat" requied></td>
            </tr>
            <tr>
                <td><p>Nomor Telepon</p></td>
                <td><input type="text" name="NomorTelepon" required></td>
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