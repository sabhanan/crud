<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <h2>MAPEL PILIHAN</h2>
        <br/>
        <a href="index.php">KEMBALI KE BERANDA</a>
        <a href="tambah_mapel.php">TAMBAH DATA MAPEL</a>
        <br/>
        <br/>
        <table border="1">
            <tr>
                <th>ID Mapel</th>
                <th>Nama Mapel</th>
                <th>Pengampu</th>
            </tr>

            <?php
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi,"SELECT * FROM mapel");
            while($d = mysqli_fetch_array($data)){
                ?>
                <tr>
                <td><?php echo $d['id_mapel']; ?></td>
                <td><?php echo $d['nama_mapel']; ?></td>
                <td><?php echo $d['pengampu']; ?></td>
                <td><a href="">EDIT || </a><a href="">HAPUS</a></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>