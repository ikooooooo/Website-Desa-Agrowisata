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
    <title>Metode Penelitian</title>
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

    <main class="metode">
        <h2>Metode Penelitian: Euclidean Distance</h2>

        <section class="explanation">
            <h3>Penjelasan Metode</h3>
            <p>Metode Euclidean Distance adalah salah satu metode pengelompokan (clustering) yang digunakan untuk mengukur kesamaan atau kemiripan antara objek berdasarkan jarak antara titik-titik data dalam ruang multidimensi. Dalam penelitian ini, metode ini digunakan untuk mengelompokkan responden berdasarkan tingkat kesadaran mereka terhadap lingkungan.</p>

            <p>Rumus Euclidean Distance:</p>
            <p class="formula">d(p, q) = √Σ(pi - qi)²</p>
            <p>di mana:</p>
            <ul>
                <li>d(p, q) adalah jarak Euclidean antara titik p dan q</li>
                <li>pi adalah nilai atribut ke-i pada titik p</li>
                <li>qi adalah nilai atribut ke-i pada titik q</li>
            </ul>
        </section>

        <section class="steps">
            <h3>Langkah-langkah Perhitungan</h3>
            <ol>
                <li>Menentukan titik ideal (nilai maksimum untuk setiap kriteria).</li>
                <li>Menghitung jarak Euclidean antara setiap responden dengan titik ideal.</li>
                <li>Mengurutkan responden berdasarkan jarak Euclidean (semakin kecil jaraknya, semakin tinggi tingkat kesadarannya).</li>
            </ol>
        </section>
    </main>

    <footer>
        </footer>
</body>
</html>
