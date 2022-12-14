<?php
include "../koneksi.php";

$no_pinjam=$_POST['no_pinjam'];
$id_anggota=$_POST['id_anggota'];
$no_buku=$_POST['no_buku'];
$tgl_pinjam=$_POST['tgl_pinjam'];
$tgl_kembali=$_POST['tgl_kembali'];
$simpan = mysqli_query($koneksi, "INSERT INTO pinjam VALUES ('', '$id_anggota', '$no_buku', '$tgl_pinjam', '$tgl_kembali')");

if($simpan){
    header('Location: tampilan_pinjam.php');
}
else{
    echo "gagal menyimpan";
}