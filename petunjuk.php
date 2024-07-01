<?php
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: index.php"); 
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Petunjuk Penggunaan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Rekomendasi Desa Agrowisata</h1>
        <nav>
            <ul>
                <li><a href="index.php">Login</a></li>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="metode.php">Metode</a></li>
                <li><a href="petunjuk.php">Petunjuk</a></li>
                <li><a href="identifikasi.php">Identifikasi</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="siapakami.php">Siapa Kami</a></li>
            </ul>
        </nav>
    </header>

    <main class="petunjuk">
        <h2>Petunjuk Penggunaan</h2>

        <section class="langkah">
            <h3>Langkah-langkah</h3>
            <ol>
                <li>
                    <h4>Login</h4>
                    <p>Masukkan username dan password yang benar untuk mengakses aplikasi.</p>
                </li>
                <li>
                    <h4>Dashboard</h4>
                    <p>Dashboard akan menampilkan ringkasan data dan informasi penting terkait penelitian.</p>
                </li>
                <li>
                    <h4>Metode</h4>
                    <p>Pelajari penjelasan tentang metode Euclidean Distance yang digunakan dalam penelitian ini.</p>
                </li>
                <li>
                    <h4>Perhitungan</h4>
                    <p>Masukkan data responden untuk melakukan perhitungan tingkat kesadaran lingkungan.</p>
                </li>
                <li>
                    <h4>About</h4>
                    <p>Informasi tentang penelitian dan aplikasi ini.</p>
                </li>
            </ol>
        </section>

        <section class="tips">
            <h3>Tips</h3>
            <ul>
                <li>Pastikan data responden yang dimasukkan valid dan akurat.</li>
                <li>Gunakan fitur-fitur aplikasi secara optimal untuk mendapatkan hasil analisis yang terbaik.</li>
                <li>Jika ada pertanyaan, jangan ragu untuk menghubungi kami.</li>
            </ul>
        </section>
    </main>

    <footer>
        </footer>
</body>
</html>
