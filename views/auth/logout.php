<!-- auh/logout.php -->
<?php
session_start(); // Mulai session
session_unset(); // Menghapus semua session
session_destroy(); // Menghancurkan session

// Alihkan ke halaman login atau halaman lain setelah logout
header("Location: login.php");
exit();
?>