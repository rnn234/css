<?php

include "../koneksi.php";
$id_anggota = $_POST['id_anggota'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$no_telp = $_POST['no_telp'];
$tgl_lahir = $_POST['tgl_lahir'];

$edit = mysqli_query($koneksi, "UPDATE anggota SET nama='$nama', alamat='$alamat', kota='$kota', no_telp='$no_telp', tgl_lahir='$tgl_lahir' WHERE id_anggota='$id_anggota'");
if($edit){
    header("Location: tampilan_anggota.php");
} else{
    echo "data gagal di update";
}