<?php

include "../koneksi.php";
if(isset($_GET['no_buku']) ){
    $id = $_GET['no_buku'];

    $hapus = mysqli_query($koneksi, "delete from buku where no_buku = $id");

    if($hapus){
       header("Location: tampilan_buku.php");
    }
    else {
        die ("gagal menghapus");
    }
}