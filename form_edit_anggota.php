<?php
include "../koneksi.php";
if(!isset($_GET['id_anggota'])){
     header("Location: tampilan_anggota.php");

}

$id_anggota = $_GET['id_anggota'];
$sql = mysqli_query($koneksi,"SELECT * FROM anggota WHERE id_anggota=$id_anggota");
$anggota=mysqli_fetch_assoc($sql);

if(mysqli_num_rows($sql) < 1){ 
    die("data tidak ditemukan...");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="edit_anggota.php" method="POST">
        <fieldset align="center">
            <legend>anggota</legend>
            <table>
                <tr>
                    <td>id_anggota</td>
                    <td>:</td>
                    <td><input type="text" name="id_anggota" value="<?= $anggota['id_anggota']; ?>"></td>
                </tr>
                <tr>
                    <td>nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" value="<?= $anggota['nama']; ?>"></td>
                </tr>
                <tr>
                    <td>alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat" value="<?= $anggota['alamat']; ?>"></td>
                </tr>
                <tr>
                    <td>kota</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="kota" value="<?= $anggota['kota']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>no telepon</td>
                    <td>:</td>
                    <td><input type="number" name="no_telp" value="<?= $anggota['no_telp'];?>" ></td>
                </tr>
                <tr>
                    <td>tanggal lahir</td>
                    <td>:</td>
                    <td><input type="date" name="tgl_lahir" value="<? $anggota['tgl_lahir'];?>"></td>
                </tr>
                <tr>
                    <th><input type="submit" name="simpan"></th>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>