<?php

include "../koneksi.php";
if(isset($_GET ['no_pinjam']) ){
    $no = $_GET['no_pinjam'];

    $hapus = mysqli_query($koneksi, "DELETE from pinjam where no_pinjam = $no");

    if($hapus){
       header("Location: tampilan_pinjam.php");
    }
    else {
        die ("gagal menghapus");
    }
}