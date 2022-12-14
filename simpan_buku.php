<?php
include "../koneksi.php";

$no_buku = $_POST['no_buku'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$thn_terbit = $_POST['thn_terbit'];
$jenis_buku = $_POST['jenis_buku'];
$status = $_POST['status'];

$simpan = mysqli_query($koneksi, "insert into buku values ('$no_buku', '$judul', '$pengarang', '$thn_terbit', '$jenis_buku', '$status')");

if($simpan){
    header("Location: tampilan_buku.php");
}
else{
    echo "data tidak berhasil disimpan";
    if($no_buku == $no_buku){
        echo "<br>";
        echo "no_buku tidak boleh sama";
    }
}