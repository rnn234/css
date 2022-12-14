<?php
include "../koneksi.php";
if(isset($_GET['id_anggota']) ){
    $id = $_GET['id_anggota'];

    $hapus = mysqli_query($koneksi, "delete from anggota where id_anggota = $id");

    if($hapus){
       header("Location: tampilan_anggota.php");
    }
    else {
        die ("gagal menghapus");
    }
}
