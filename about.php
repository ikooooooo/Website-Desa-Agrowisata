<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: index.php"); 
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tentang Penelitian</title>
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

    <main class="about">
        <h2>Tentang Kami</h2>
        <p>Kami adalah mahasiswa janabadra yang sedang menyelesaikan tugas kecerdasan buatan dengan dosen pengampu : YUMARLIN MZ, S.Kom, M.Pd, M.Kom berupa penelitian dengan judul Pengembangan Argowisata Sebagai Alternatif Peningkatan Pendapatan Desa dengan menggunakan metode Euclidean Distance.</p>

        <h3>Tujuan Penelitian</h3>
        <ul>
            <li>Mengidentifikasi potensi agrowisata di desa.</li>
            <li>Mengembangkan rencana strategis untuk pengembangan agrowisata berkelanjutan di desa.</li>
            <li>Menilai dampak ekonomi, sosial, dan lingkungan dari agrowisata di desa.</li>
            <li>Mengidentifikasi tantangan dan peluang untuk pengembangan agrowisata di desa.</li>
        </ul>

        <h3>Metode Penelitian</h3>
        <p>Metode yang digunakan dalam penelitian ini adalah Euclidean Distance. Metode ini digunakan untuk menghitung jarak antara setiap responden dengan titik ideal (nilai maksimum untuk setiap kriteria). Responden dengan jarak terkecil dengan titik ideal dianggap memiliki tingkat rekomendasi desa yang paling tinggi.</p>
       
        <h3>DOSEN PENGAMPU</h3>
        <ul>
            <li>YUMARLIN MZ, S.Kom, M.Pd, M.Kom</li>
            </ul>

        <h3>Kelompok Tim</h3>
        <ul>
            <li>FRANSISCO TOATUBUN</li>
            <li>PETRONELA D. NGOLE</li>
            <li>ANGELINA TEWAN</li>
            <li>MARIA C. BEATRIX RESSAM</li>
            </ul>
    </main>

    <footer>
        </footer>
</body>
</html>
