@extends ('layout.app')
@section ('content')
    <br>
    <center><h1>UPDATE PELANGGAN</h1></center>
    <br>
    <center>
    <form action="" method="POST">
        <table>
            <tr>
                <td width="120"><p>Nama</p></td>
                <td><input type="text" name="Nama" required></td>
            </tr>
            <tr>
                <td><p>Alamat</p></td>
                <td><input type="text" name="Alamat" requied></td>
            </tr>
            <tr>
                <td><p>No HP</p></td>
                <td><input type="text" name="no_hp" required></td>
            </tr>
</form>
        </table>
<br>
<button type="button" class="btn btn-secondary">Kirim</button>
<center>
@endsection