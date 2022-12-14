<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>record</title>
</head>
<body>
    <div align="center">
    <h1>record anggota</h1>
    <button><a href="form_pinjam.php">peminjaman</a></button>
    </div>
    <br>
    <table border="1" align="center" class="table table-striped table-hover bg-light">
        <tr>
            <th>no_pinjam</th>
            <th>id_anggota</th>
            <th>no_buku</th>
            <th>tgl_pinjam</th>
            <th>tgl_kembali</th>
            <th>hapus/edit</th>
        </tr>
    <?php
        include "../koneksi.php";
        $no=1;
        $query=mysqli_query($koneksi, "SELECT * FROM pinjam");
        while($data=mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['no_pinjam']; ?></td>
            <td><?php echo $data['id_anggota']; ?></td>
            <td><?php echo $data['no_buku']; ?></td>
            <td><?php echo $data['tgl_pinjam']; ?></td>
            <td><?php echo $data['tgl_kembali']; ?></td>
            <td>
          
            <td>
                <button><a href='hapus_pinjam.php?no_pinjam="<?php echo $data['no_pinjam']?>"'>hapus</a></button>
                <button><a href='form_edit_pinjam.php?no_pinjam="<?php echo $data['no_pinjam']?>"'>edit</a></button>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>