<?php
session_start();
require_once '../config/config.php';

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        $error = "Password tidak cocok!";
    } else {
        // Cek apakah username sudah ada
        $stmt = $conn->prepare("SELECT id FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $error = "Username sudah terdaftar, silakan pilih yang lain!";
        } else {
            // Hash password untuk keamanan
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $stmt_insert = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
            $stmt_insert->bind_param("ss", $username, $hashed_password);
            
            if ($stmt_insert->execute()) {
                header("Location: login.php?success=1");
                exit;
            } else {
                $error = "Terjadi kesalahan saat mendaftar. Coba lagi.";
            }
            $stmt_insert->close();
        }
        $stmt->close();
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - THT Health</title>
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
        <h2>Buat Akun</h2>
        <p class="subtitle">Daftarkan akun admin baru Anda</p>
        
        <?php if ($error) echo "<div class='alert alert-error'><i class='fa-solid fa-circle-exclamation'></i> $error</div>"; ?>
        
        <form action="register.php" method="POST">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" placeholder="Buat username" required>
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="Buat password" required>
                <i class="fa-solid fa-lock"></i>
            </div>
            <div class="form-group">
                <label>Konfirmasi Password</label>
                <input type="password" name="confirm_password" placeholder="Ulangi password" required>
                <i class="fa-solid fa-lock"></i>
            </div>
            <button type="submit" class="btn-auth">Daftar Akun</button>
        </form>
        <p class="auth-link">Sudah punya akun? <a href="login.php">Login di sini</a></p>
    </div>
</body>
</html>
