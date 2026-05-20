<?php
session_start();
require_once '../config/config.php';

// Jika sudah login, lempar langsung ke halaman index.php
if (isset($_SESSION['user_id'])) {
    header("Location: landing.php");
    exit;
}

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $hashed_password);
        $stmt->fetch();

        // Verifikasi kesesuaian password
        if (password_verify((string)$password, (string)$hashed_password)) {
            // Set session
            $_SESSION['user_id'] = $id;
            $_SESSION['username'] = $username;
            
            // Redirect ke halaman dashboard
            header("Location: landing.php");
            exit;
        } else {
            $error = "Password yang Anda masukkan salah!";
        }
    } else {
        $error = "Username tidak ditemukan!";
    }
    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - THT Health</title>
    <link rel="stylesheet" href="../assets/style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="../assets/style/auth.css">
</head>
<body>

    <a href="landing.php" class="back-home"><i class="fa-solid fa-arrow-left"></i> Kembali ke Beranda</a>

    <!-- Bubbles Animation from style.css -->
    <div class="bubbles">
        <span></span><span></span><span></span><span></span>
        <span></span><span></span><span></span><span></span>
        <span></span><span></span><span></span><span></span>
    </div>

    <div class="auth-card">
        <h2>Selamat Datang</h2>
        <p class="subtitle">Silakan masuk ke akun THT Admin Anda</p>
        
        <?php 
        if (isset($_GET['success']) && $_GET['success'] == 1) {
            echo "<div class='alert alert-success'><i class='fa-solid fa-circle-check'></i> Registrasi berhasil! Silakan login.</div>";
        }
        if ($error) echo "<div class='alert alert-error'><i class='fa-solid fa-circle-exclamation'></i> $error</div>"; 
        ?>
        
        <form action="login.php" method="POST">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" placeholder="Masukkan username" required>
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="Masukkan password" required>
                <i class="fa-solid fa-lock"></i>
            </div>
            <button type="submit" class="btn-auth">Masuk</button>
        </form>
        <p class="auth-link">Belum punya akun? <a href="register.php">Daftar di sini</a></p>
    </div>
</body>
</html>
