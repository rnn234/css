<?php
include "../koneksi.php";
$no_pinjam = $_POST['no_pinjam'];
$id_anggota = $_POST['id_anggota'];
$no_buku = $_POST['no_buku'];
$tgl_pinjam = $_POST['tgl_pinjam'];
$tgl_kembali = $_POST['tgl_kembali'];

$edit = mysqli_query($koneksi, "UPDATE pinjam SET tgl_pinjam='$tgl_pinjam', tgl_kembali='$tgl_kembali'");
if($edit){
    header("Location: tampilan_pinjam.php");
} else{
    echo "data gagal di update";
}