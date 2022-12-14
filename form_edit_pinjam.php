<?php
include "../koneksi.php";
if(!isset($_GET['no_pinjam']) ){
    header("Location: tampilan_pinjam.php");
}

$no_pinjam = $_GET['no_pinjam'];
$sql = mysqli_query($koneksi, "SELECT * FROM pinjam WHERE no_pinjam=$no_pinjam");
$pinjam=mysqli_fetch_assoc($sql);

if(mysqli_num_rows($sql) < 1){
    die ("data tidak ditemukan");
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
<form action="edit_pinjam.php" method="POST">
        <fieldset align="center">
            <legend>pinjam</legend>
            <table>
                <tr>
                    <td>no_pinjam</td>
                    <td>:</td>
                    <td><input type="text" name="no_pinjam" value="<?= $pinjam['no_pinjam']; ?> "></td>
                </tr>
                <tr>
                    <td>id_anggota</td>
                    <td>:</td>
                    <td><input type="text" name="id_anggota" value="<?= $pinjam['id_anggota']; ?> "></td>
                </tr>
                <tr>
                    <td>no_buku</td>
                    <td>:</td>
                    <td><input type="text" name="no_buku" value="<?= $pinjam['no_buku']; ?> "></td>
                </tr>
                <tr>
                    <td>tgl_pinjam</td>
                    <td>:</td>
                    <td><input type="date" name="tgl_pinjam" value="<?= $pinjam['tgl_pinjam']; ?> "></td>
                </tr>
                <tr>
                    <td>tgl_kembali</td>
                    <td>:</td>
                    <td><input type="date" name="tgl_kembali" value="<?= $pinjam['tgl_kembali']; ?> "></td>
                </tr>
                <tr>
                    <th><input type="submit" name="simpan"></th>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>