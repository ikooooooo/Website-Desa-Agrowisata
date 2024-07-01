<?php
include 'koneksi.php';
session_start(); // Mulai session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk memeriksa kecocokan username dan password
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // Login berhasil
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("Location: dashboard.php"); // Arahkan ke dashboard.php
        exit;
    } else {
        // Login gagal
        echo "<p>Username atau password salah.</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Rekomendasi Desa Agrowisata</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h2>Login</h2>
        <form method="post" action="">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <button type="submit">Login</button>
        </form>
    </main>
</body>
</html>
