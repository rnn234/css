<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align="center">FORM PEMINJAMAN BUKU</h1>
    <Table border="0" bgcolor="red" align="center">
        <form action="simpan_pinjam.php"name="FPinjam" method="post" >
            <tr>
                <td>NO. PINJAM</td>
                <td><input type="text" name="no_pinjam" size="5" maxlength="6" disabled></td>
            </tr>
            <tr>
                <td>ID ANGGOTA</td>
                <td><select name="id_anggota">
                    <?php
                    include "../koneksi.php";
                    $query=mysqli_query($koneksi, "SELECT * FROM anggota");
                    while($data=mysqli_fetch_array($query)){
                    ?>
                    <option value="<?php echo $data['id_anggota']?>"><?php echo $data['id_anggota']?></option>
                    <?php
                    }
                    ?></select></td>
            </tr>
            <tr>
                <td>NO. BUKU</td>
                <td><select name="no_buku">
                    <?php
                    include "../koneksi.php";
                    $query=mysqli_query($koneksi, "SELECT * FROM buku");
                    while($buku=mysqli_fetch_array($query)){
                    ?>
                    <option><?php echo $buku['no_buku']?></option>
                    <?php
                    }
                    ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>TANGGAL PINJAM</td>
                <td><input type="date" name="tgl_pinjam"></td>
            </tr>
            <tr>
                <td>TANGGAL KEMBALI</td>
                <td><input type="date" name="tgl_kembali"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="SIMPAN"><input type="reset" name="reset" value="BATAL"></td>
            </tr>
        </form>
    </Table>
</body>
</html>