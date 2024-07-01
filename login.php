<?php
session_start();

// Koneksi ke database
$host = "localhost";
$user = "root";
$password = "12345678";
$database = "kesadaran_lingkungan_db";

$conn = mysqli_connect($host, $user, $password, $database);
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Periksa apakah form login telah dikirimkan
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = md5($_POST['password']); // Enkripsi kata sandi dengan MD5

    // Query untuk memeriksa pengguna di database
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // Login berhasil
        $_SESSION['username'] = $username;
        echo "Login berhasil!";
        // Redirect ke halaman dashboard atau halaman lainnya
        header("Location: dashboard.php");
        exit();
    } else {
        // Login gagal
        echo "Username atau password salah.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form method="POST" action="">
        <label>Username:</label>
        <input type="text" name="username" required><br>
        <label>Password:</label>
        <input type="password" name="password" required><br>
        <button type="submit">Login</button>
    </form>
    <p>Belum punya akun? <a href="register.php">Registrasi di sini</a></p>
</body>
</html>
