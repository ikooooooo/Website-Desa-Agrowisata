<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: index.php");
    exit;
}

include 'koneksi.php';

// Ambil data hasil perhitungan dari database
$sql = "SELECT r.id, r.k1, r.k2, r.k3, r.k4, r.k5, hc.cluster
        FROM responden r
        JOIN hasil_cluster hc ON r.id = hc.responden_id";
$result = mysqli_query($conn, $sql);

// Periksa apakah query berhasil dieksekusi
if (!$result) {
    die("Error saat mengambil data: " . mysqli_error($conn)); 
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hasil Perhitungan Kelayakan Layanan Desa Agrowista</title>
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

    <main class="hasil-perhitungan">
        <h2>Hasil Perhitungan Tingkat Rekomendasi Desa Agrowisata</h2>

        <?php if (mysqli_num_rows($result) > 0) { ?>
        <table border="1">
            <thead>
                <tr>
                    <th>ID Responden</th>
                    <th>K1</th>
                    <th>K2</th>
                    <th>K3</th>
                    <th>K4</th>
                    <th>K5</th>
                    <th>Cluster</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['k1']; ?></td>
                        <td><?php echo $row['k2']; ?></td>
                        <td><?php echo $row['k3']; ?></td>
                        <td><?php echo $row['k4']; ?></td>
                        <td><?php echo $row['k5']; ?></td>
                        <td><?php echo $row['cluster']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php } else { ?>
            <p>Belum ada data hasil perhitungan.</p>
        <?php } ?>
    </main>

    <footer>
        </footer>
</body>
</html>
