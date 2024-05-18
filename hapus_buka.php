<?php
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi,"DELET from mapel where id_mapel='$id'");
header("location:index.php");
?>