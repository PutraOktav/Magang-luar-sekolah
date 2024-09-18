<?php
session_start();

// Mendapatkan data dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Validasi username dan password
if ($username === 'admin' && $password === 'admin') {
    // Set session login
    $_SESSION['isLoggedIn'] = true;
    
    // Redirect ke halaman index jika login berhasil
    header('Location: ../index.php');
    exit();
} else {
    // Jika username atau password salah, kembali ke halaman login dengan pesan error
    $_SESSION['error'] = 'Username atau password salah.';
    header('Location: login.php');
    exit();
}
?>
