<?php
// Mulai session
session_start();

// Hapus semua session
session_unset();
session_destroy();

// Arahkan kembali ke halaman login setelah logout
header("Location: ../views/auth/login.php");
exit;
?>
