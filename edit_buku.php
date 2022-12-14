<?php
include "../koneksi.php";
$no_buku = $_POST['no_buku'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$thn_terbit = $_POST['thn_terbit'];
$jenis_buku = $_POST['jenis_buku'];
$status = $_POST['status'];

$edit = mysqli_query($koneksi, "UPDATE buku SET judul='$judul', pengarang='$pengarang', thn_terbit='$thn_terbit', jenis_buku='$jenis_buku', status='$status'");
if($edit){
    header("Location: tampilan_buku.php");
} else{
    echo "data gagal di update";
} 