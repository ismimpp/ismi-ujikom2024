@include ('layout.navbar')
@section ('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
</body>
</html>