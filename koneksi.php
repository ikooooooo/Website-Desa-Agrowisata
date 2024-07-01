<?php
// Koneksi ke database

// Ganti dengan kredensial database Anda yang sebenarnya
$host = "localhost"; 
$user = "root";      
$password = "12345678";      
$database = "agrowisata"; 

$conn = mysqli_connect($host, $user, $password, $database);
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
