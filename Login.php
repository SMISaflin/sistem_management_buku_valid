<?php
session_start();
include "koneksi.php";
$pesan = "";
$error = "";

// Jika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Cek apakah key tersedia sebelum digunakan
    $user = isset($_POST['user']) ? $_POST['user'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Cegah SQL injection
    $user = $conn->real_escape_string($user);
    $password = $conn->real_escape_string($password);

    // Cek ke database
    $sql = "SELECT * FROM login WHERE user = '$user' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows == 1) {
        $_SESSION['user'] = $user;
        // Redirect ke dashboard (bisa ditambahkan halaman lain juga)
       $pesan = "<h2>Selamat datang, $user!</h2>";
    } else {
        $error = "User atau password salah.";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistem Management Buku</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="" method="POST">
            <label for="user">Username</label>
    
            <input type="text" id="user" name="user" required>

            <label for="password">Password</label>
        
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
            <p id="error-message" style="color: red;">
                <?php echo $error; ?>
            </p>
            <p id="error-message" style="color: red;">
                <?php echo $pesan; ?>
            </p>
        </form>
    </div>
</body>
</html>
