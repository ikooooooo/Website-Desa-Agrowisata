<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: index.php");
    exit;
}

include 'koneksi.php';

// Fungsi untuk menghitung jarak Euclidean
function hitungJarakEuclidean($data, $ideal) {
    $jarak = 0;
    foreach ($data as $i => $nilai) {
        $jarak += pow($nilai - $ideal[$i], 2);
    }
    return sqrt($jarak);
}

$kriteria = [
    "Bagaimana Menurut anda dengan penggunaan produk plastik yang dapat digunakan kembali (contoh: botol air, alat makan)",
    "Menurut anda apa perlu untuk membuang sampah pada tempatnya serta sesuai dengan jenis sampah",
    "Menurut anda pembelian produk dengan kemasan ramah lingkungan",
    "Apa pendapat anda terhadap produk yang menggunakan plastik daur ulang dalam produksinya",
    "Apakah anda pernah menggunakan kreativitas untuk mengubah limbah menjadi sesuatu yang baru (contoh: kerajinan dari limbah plastik)"
];

$jarakEuclidean = null; // Inisialisasi variabel hasil perhitungan

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validasi input
    $responden = [];
    $valid = true;
    for ($i = 1; $i <= 3; $i++) {
        $nilai = isset($_POST['k' . $i]) ? (int)$_POST['k' . $i] : null;
        if ($nilai < 1 || $nilai > 5) {
            $valid = false;
            break;
        }
        $responden[] = $nilai;
    }

    if ($valid) {
        // Titik ideal
    $ideal = array_fill(0, 5, 5); // Array dengan 5 elemen, semua bernilai 5

    // Hitung jarak Euclidean
    $jarakEuclidean = hitungJarakEuclidean($responden, $ideal);

    // Simpan data responden dan hasil perhitungan ke database
    $sql = "INSERT INTO responden (k1, k2, k3, k4, k5, jarak_euclidean) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);

    // Bind parameter dengan tipe data yang sesuai
    mysqli_stmt_bind_param($stmt, "iiiiid", $responden[0], $responden[1], $responden[2], $responden[3], $responden[4], $jarakEuclidean);

    mysqli_stmt_execute($stmt);
    } else {
        echo "<p class='error'>Nilai kriteria harus antara 1 dan 5.</p>";
    }
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
<!DOCTYPE html>
<html>
<head>
    <title>Perhitungan Euclidean Distance</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    </header>
    <main class="perhitungan">
        <h2>Identifikasi Gen Z</h2>
        <p>Pililah jawaban sesuai dengan pendapat anda untuk setiap kriteria (1-5, 1 = sangat tidak peduli, 2 = tidak perduli, 3 = biasa saja, 4 = perduli, 5 = sangat perduli):</p>
        <form action="hasil_perhitungan.php" method="post" id="surveyForm">
            <?php for ($i = 0; $i < 5; $i++) { ?>
                <div class="form-group">
                    <label for="k<?php echo $i + 1; ?>"><?php echo $kriteria[$i]; ?></label>
                    <input type="number" id="k<?php echo $i + 1; ?>" name="k<?php echo $i + 1; ?>" min="1" max="5" required
                        value="<?php echo isset($_POST['k' . ($i + 1)]) ? $_POST['k' . ($i + 1)] : ''; ?>">
                </div>
            <?php } ?>
            <button type="submit">Hitung</button>
        </form>

        <?php if (isset($jarakEuclidean)) { ?>
            <h3>Hasil Perhitungan</h3>
            <p>Jarak Euclidean: <?php echo $jarakEuclidean; ?></p>
        <?php } ?>
    </main>

    <footer>
    </footer>
</body>
</html>
