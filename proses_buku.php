<?php
include 'koneksi.php';
$id = $_POST['id'];
$mapel = $_POST['mapel'];
$pengampu = $_POST['pengampu'];
$edit = "UPDATE mapel SET id_mapel = '$id', nama_mapel = '$mapel', pengampu = 'pengampu' WHERE id_mapel = $id";
$result = mysqli_query($koneksi, $edit);
header("location:index.php");
?>