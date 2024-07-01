<?php
// Koneksi ke database
$host = "localhost";
$user = "root";
$password = "12345678";
$database = "kesadaran_lingkungan_db";

$conn = mysqli_connect($host, $user, $password, $database);
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Periksa apakah form registrasi telah dikirimkan
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = md5($_POST['password']); // Enkripsi kata sandi dengan MD5
    $email = $_POST['email'];

    // Cek apakah username atau email sudah ada
    $check_sql = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
    $check_result = mysqli_query($conn, $check_sql);

    if (mysqli_num_rows($check_result) > 0) {
        // Username atau email sudah ada
        echo "Username atau email sudah digunakan.";
    } else {
        // Masukkan data pengguna baru ke dalam database
        $insert_sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
        if (mysqli_query($conn, $insert_sql)) {
            echo "Registrasi berhasil! Silakan <a href='login.php'>login</a>.";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registrasi</title>
</head>
<body>
    <form method="POST" action="">
        <label>Username:</label>
        <input type="text" name="username" required><br>
        <label>Password:</label>
        <input type="password" name="password" required><br>
        <label>Email:</label>
        <input type="email" name="email" required><br>
        <button type="submit">Registrasi</button>
    </form>
</body>
</html>
