<?php
include "../koneksi.php";
if(!isset($_GET['no_buku']) ){
    header("Location: tampilan_buku.php");
}

$no_buku = $_GET['no_buku'];
$sql = mysqli_query($koneksi, "SELECT * FROM buku WHERE no_buku=$no_buku");
$buku=mysqli_fetch_assoc($sql);

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
<form action="edit_buku.php" method="POST">
        <fieldset align="center">
            <legend>buku</legend>
            <table>
                <tr>
                    <td>no_buku</td>
                    <td>:</td>
                    <td><input type="text" name="no_buku" value="<?= $buku['no_buku']; ?> " hidden disabled></td>
                </tr>
                <tr>
                    <td>judul</td>
                    <td>:</td>
                    <td><input type="text" name="judul" value="<?= $buku['judul']; ?> "></td>
                </tr>
                <tr>
                    <td>pengarang</td>
                    <td>:</td>
                    <td><input type="text" name="pengarang" value="<?= $buku['pengarang']; ?> "></td>
                </tr>
                <tr>
                    <td>tahun_terbit</td>
                    <td>:</td>
                    <td><input type="date" name="thn_terbit" value="<?= $buku['thn_terbit']; ?> "></td>
                </tr>
                <tr>
                    <td>jenis_buku</td>
                    <td>:</td>
                    <td><input type="radio" name="jenis_buku"value="fiksi">fiksi
                        <input type="radio" name="jenis_buku"value="non fiksi">non fiksi
                    </td>
                </tr>
                <tr>
                    <td>status</td>
                    <td>:</td>
                    <td><input type="radio" name="status" value="ada">ada
                        <input type="radio" name="status" value="dipinjam">dipinjam
                        <input type="radio" name="status" value="kembali">kembali
                    </td>
                </tr>
                <tr>
                    <th><input type="submit" name="simpan"></th>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>