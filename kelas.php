<?php
include_once("koneksi.php");
$query = "SELECT * FROM kelas";
$result = mysqli_query($koneksi, $query);
?>

<html>
    <head></head>
    <body>
        <a href="index.php">Siswa</a>
        <a href="jurusan.php">Jurusan</a>
        <a href="kelas.php">Kelas</a>

         <table border="1">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tingkat</th>
                <th>Jurusan</th>
            </tr>
    <?php
    $i = 0;
    while($kelas_data = mysqli_fetch_array($result)) {
        $i++;
        echo "<tr>";
        echo "<td>".$i."</td>";
        echo "<td>".$kelas_data['nama']."</td>";
        echo "<td>".$kelas_data['tingkat']."</td>";
        echo "<td>".$kelas_data['jurusan_id']."</td>";
    }
    ?>
    </table>
    </body>
</html>