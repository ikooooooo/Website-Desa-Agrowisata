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
    <title>Dashboard</title>
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

    <main class="dashboard">
        <section class="welcome">
            <h2>Selamat datang, <?php echo $_SESSION['username']; ?>!</h2>
            <p>Temukan Pengalaman Wisata Edukasi dan Rekreasi yang Menyenangkan</p>
            <p>Desa Agrowisata adalah sebuah desa yang menawarkan berbagai wisata edukasi dan rekreasi menarik untuk dinikmati bersama keluarga dan teman. Desa ini dikelilingi oleh panorama alam yang indah dan asri, sehingga memberikan suasana yang sejuk dan menyegarkan.</p>
            <p>Di Desa Agrowisata, Anda dapat:</p>
            <ul>
                <li>Belajar tentang proses budidaya tanaman di kebun dan mencoba berbagai aktivitas panen, seperti memetik buah dan sayuran.</li>
                <li>Mempelajari tentang hewan ternak dan perikanan melalui wisata edukasi yang menarik.</li>
                <li>Mencicipi kuliner khas desa yang lezat dan diolah dari bahan-bahan segar.</li>
                <li>Menyaksikan pertunjukan seni dan budaya lokal yang unik dan menarik.</li>
                <li>Mengip di homestay yang nyaman dan merasakan keramahan penduduk desa.</li>
            </ul>
            <h2>Fasilitas dan Layanan:</h2>
            <ul class="facilities">
                <li>Kebun edukasi</li>
                <li>Wisata panen</li>
                <li>Wisata edukasi hewan ternak dan perikanan</li>
                <li>Restoran dengan kuliner khas desa</li>
                <li>Homestay</li>
                <li>Pertunjukan seni dan budaya</li>
                <li>Toko souvenir</li>
            </ul>
            <h2>Informasi Lebih Lanjut:</h2>
            <p>Kontak: [+62081396136232]</p>
            <p>Semoga desa agrowisata Anda sukses dan berkembang!</p>
        </div>
    </div>
        </section>

        <section class="summary">
            <h3>Ringkasan Data</h3>
            <div class="card">
                <h4>Jumlah Responden</h4>
                <p>20</p> 
            </div>
            <div class="card">
                <h4>Rata-rata Kelayakan</h4>
                <p>Sedang</p> 
            </div>
            </div>
        </section>

        <section class="actions">
            <h3>Aksi</h3>
            <div class="card">
                <a href="perhitungan.php">Lihat Perhitungan</a>
            </div>
            <div class="card">
                <a href="metode.php">Pelajari Metode</a>
            </div>
        </section>
    </main>

    <footer>
        </footer>
</body>
</html>
