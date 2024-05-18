<?php

$server = "localhost";
$database = "latihan_db";
$username = "root";
$password = "";

$koneksi = mysqli_connect($server, $username, $password, $database);
if(!$koneksi) {
    die("koneksi gagal: " . mysqli_connect_error());
}
?>