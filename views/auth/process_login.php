<?php
session_start();

// Contoh username dan password yang valid (dapat diganti dengan query ke database)
$valid_username = 'admin';
$valid_password = 'admin';

// Mendapatkan data dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Cek apakah username dan password valid
if ($username === $valid_username && $password === $valid_password) {
    // Login berhasil, set session
    $_SESSION['isLoggedIn'] = true;
    $_SESSION['username'] = $username;

    // Redirect ke halaman index
    header('Location: ../home.php');
    exit();
} else {
    // Login gagal, redirect ke login dengan pesan error
    header('Location: login.php?error=Username atau password salah');
    exit();
}
?>
