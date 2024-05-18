<?php
include_once("koneksi.php");

$query = "SELECT * FROM jurusan";
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
            </tr>
        <?php
        $i = 0;
        while($jurusan_data = mysqli_fetch_array($result)) {
            $i++;
            echo "<tr>";
            echo "<td>".$i."</td>";
            echo "<td?>".$jurusan_data['nama']."</td>";
        }
        ?>
        </table>
    </body>
</html>