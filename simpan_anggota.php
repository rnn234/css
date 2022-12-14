<?php
include "../koneksi.php";

$id_anggota = $_POST['id_anggota'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$no_telp = $_POST['no_telp'];
$tgl_lahir = $_POST['tgl_lahir'];

$simpan = mysqli_query($koneksi, "insert into anggota VALUES ('$id_anggota', '$nama', '$alamat', '$kota', '$no_telp', '$tgl_lahir')");

if($simpan){
    header("Location: tampilan_anggota.php");
}
else{
    echo "data tidak berhasil disimpan";
    if($id_anggota == $id_anggota){
        echo "<br>";
        echo "id_anggota tidak boleh sama";
    }
}