<?php
include_once("koneksi.php");
$query = "SELECT * FROM kelas";
$result = mysqli_query($koneksi, $query);
?>

<html>
    <head></head>
    <body>
        <a href="index.php"><-Kembali</a>
    </br>

    <from action="tambah_siswa.php" method="post">
        <table border="0">
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="nama_lengkap"></td>
            </tr>
            <tr>
                <td>NIS</td>
                <td><input type="text" name="nis"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" name="jk" value="1">   Laki-laki |
                    <input type="radio" name="jk" value="0">Perempuan
                </td>
            </tr>
            <tr>
                <td>Tanggal lahir</td>
                <td><input type="text" name="tanggal_lahir"></td>
            </tr>
            <tr>
                <td>Tempat lahir</td>
                <td><input type="text" name="tempat_lahir"></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><input type="text" name="kelas" min="10" max="11"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Tambah"></td>
            </tr>
        </table>
    </from>
    </body>
</html>