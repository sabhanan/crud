<?php

include 'koneksi.php';

$id = $_POST["id"];
$mapel = $_POST["mapel"];
$pengampu = $_POST["pengampu"];

mysqli_query($koneksi,"insert into mapel values('$id', '$mapel', '$pengampu')");

header('location:index.php');

?>