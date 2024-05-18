<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>BUKU PERPUSTAKAAN TIK</h2>
    <br/>
    <a href="index.php">KEMBALI KE BERANDA</a>
<br/>
<br/>
<h3>EDIT DATA BUKU</h3>

<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "select * from mapel where id_mapel='$id'");
while($d = mysqli_fetch_array($data)){
?>
<form method="post" action="proses_buku.php">
    <table>
        <tr>
            <td>ID Buku</td>
            <td><input type="number" name="id" value="<?php echo $d['id_mapel']; ?>"></td>
        </tr>
        <tr>
            <td>Judul Buku</td>
            <td><input type="text" name="mapel" value="<?php echo $d['nama_mapel']; ?>"></td>
        </tr>
        <tr>
            <td>Pengarang</td>
            <td><input type="text" name="pengampu" value="<?php echo $d['pengampu']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="SIMPAN"></td>
        </tr>
    </table>
</form>
<?php
}
?>
</body>
</html>