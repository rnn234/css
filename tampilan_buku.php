<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div align="center">
    <h1>record buku</h1>
    <button><a href="form_buku.html">tambah buku</a></button>
    </div>
    <table border="1" align="center">
        <tr>
            <th>no</th>
            <th>nomor buku</th>
            <th>judul buku</th>
            <th>pengarang</th>
            <th>tahun terbit</th>
            <th>jenis buku</th>
            <th>status</th>
            <th>hapus/edit</th>
        </tr>
        <?php
        include "../koneksi.php";
        $no = 1;
        $query = mysqli_query($koneksi, "SELECT * FROM buku");

        while ($data = mysqli_fetch_array($query)):
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['no_buku']; ?></td>
            <td><?= $data['judul']; ?></td>
            <td><?= $data['pengarang'];?></td>
            <td><?= $data['thn_terbit'];?></td>
            <td><?= $data['jenis_buku'];?></td>
            <td><?= $data['status']; ?></td>
            <td>
                <button><a href="hapus_buku.php?no_buku=<?=$data['no_buku']?>">hapus</a></button>
                <button><a href="form_edit_buku.php?no_buku=<?=$data['no_buku']?>">edit</a></button>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>