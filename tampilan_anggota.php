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
    <button><a href="form_anggota.html">tambah anggota</a></button>
    <button><a href="../form_buku.html">peminjaman buku</a></button>
    </div>
    <br>
    <table border="1" align="center" class="table table-striped table-hover bg-light">
        <tr>
            <th>no</th>
            <th>id anggota</th>
            <th>nama</th>
            <th>alamat</th>
            <th>kota</th>
            <th>no telepon</th>
            <th>tanggal lahir</th>
            <th>hapus/edit</th>
        </tr>
    <?php
        include "../koneksi.php";
        $no = 1;
        $query = mysqli_query($koneksi, "SELECT * FROM anggota");

        while ($data = mysqli_fetch_array($query)):
    ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['id_anggota']; ?></td>
            <td><?= $data['nama']; ?></td>
            <td><?= $data['alamat']; ?></td>
            <td><?= $data['kota']; ?></td>
            <td><?= $data['no_telp']; ?></td>
            <td><?= $data['tgl_lahir']; ?></td>
            <td>
                <button><a href="hapus_anggota.php?id_anggota=<?=$data['id_anggota']?>">hapus</a></button>
                <button><a href="form_edit_anggota.php?id_anggota=<?=$data['id_anggota']?>">edit</a></button>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>