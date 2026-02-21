<?php
$host = "localhost";
$user = "root";
$pass = "";
$nama_db = "ukk"; // Sesuai instruksi langkah no. 2 di modul

$koneksi = mysqli_connect($host, $user, $pass, $nama_db);

if (!$koneksi) {
    die("Koneksi dengan database gagal: " . mysqli_connect_error());
}
?>