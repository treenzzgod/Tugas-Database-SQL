<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "pendaftaran_siswa";
$koneksi = mysqli_connect($server, $username, $password,$database);
$koneksi_db = mysqli_select_db($koneksi, $database);

?>