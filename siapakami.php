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
            <li>Mengidentifikasi faktor-faktor yang mempengaruhi tingkat kesadaran lingkungan pada generasi Z.</li>
            <li>Mengukur tingkat kepedulian generasi Z terhadap isu-isu lingkungan.</li>
            <li>Memberikan rekomendasi untuk meningkatkan kesadaran lingkungan pada generasi Z.</li>
        </ul>

        <h3>Metode Penelitian</h3>
        <p>Metode yang digunakan dalam penelitian ini adalah Euclidean Distance. Metode ini digunakan untuk menghitung jarak antara setiap responden dengan titik ideal (nilai maksimum untuk setiap kriteria). Responden dengan jarak terkecil dengan titik ideal dianggap memiliki tingkat kesadaran lingkungan yang paling tinggi.</p>
       
        <h3>DOSEN PENGAMPU</h3>
        <?php
        $dosen = array(
            "nama" => "YUMARLIN MZ, S.Kom, M.Pd, M.Kom",
            "foto" => "yuma.jpg"
        );
        ?>
        <img src="<?php echo $dosen['foto']; ?>" alt="Foto Dosen Pengampu">
        <p><?php echo $dosen['nama']; ?></p>
        <ul>
            </ul>

        <h3>Kelompok Tim</h3>
        <?php
        $tim = array(
            array("nama" => "Fransisco Toatubun", "foto" => "iko.jpg"),
            array("nama" => "Angelina Tewan", "foto" => "ang.jpg"),
            array("nama" => "Petronela D Ngole", "foto" => "pet.jpg"),
            array("nama" => "Maria B.C Ressam", "foto" => "put.jpg"),
            // Tambahkan anggota tim lainnya dengan cara yang sama
        );

        foreach ($tim as $anggota) {
            echo '<div class="tim-anggota">';
            echo '<img src="' . $anggota['foto'] . '" alt="Foto ' . $anggota['nama'] . '">';
            echo '<p>' . $anggota['nama'] . '</p>';
            echo '</div>';
        }
        ?>
    </main>

    <footer>
        </footer>
</body>
</html>
