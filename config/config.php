<?php
$host = "localhost";
$user = "root";       // Default XAMPP/Laragon user
$pass = "";           // Default XAMPP/Laragon password (kosong)
$dbname = "tht_health";

$conn = new mysqli($host, $user, $pass);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}

// Buat database jika belum ada
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    // Pilih database
    $conn->select_db($dbname);
    
    // Buat tabel users jika belum ada
    $table_sql = "CREATE TABLE IF NOT EXISTS users (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    $conn->query($table_sql);
} else {
    die("Error creating database: " . $conn->error);
}
?>
