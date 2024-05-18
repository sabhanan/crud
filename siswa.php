<?php

include_once("kelas.php");
$query = "SELECT * FROM siswa";
$result = mysqli_query($koneksi, $query);
?>

<html>
    <head></head>
    <body>
        <a href="siswa.php">Siswa</a>
        <a href="jurusan.php">Jurusan</a>
        <a href="kelas.php">Kelas</a>
        <br />
        <br />
        <a href="tambah_siswa.php">Tambah Siswa+</a>
        <table border="1">
            <tr>
                <th>NIS</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal lahir</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
            <?php
            while($siswa_data = mysqli_fetch_array($result)) {
                $jk = "";
                if ($siswa_data['jenis_kelamin'] == 1) {
                    $jk = "Laki-laki";
                } else {
                    $jk = "Perempuan";
                }
                echo "<tr>";
                echo "<td>".$siswa_data['nis']."</td>";
                echo "<td>".$siswa_data['nama_lengkap']."</td>";
                echo "<td>".$siswa_data['jenis_kelamin']."</td>";
                echo "<td>".$siswa_data ['tanggal_lahir']."</td>";
                echo "<td>".$siswa_data ['tempat_lahir']."</td>";
                echo "<td></td>";
            }
            ?>
        </table>
    </body>
</html>