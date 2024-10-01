<!-- auth/process_login.php -->
<?php
require_once '../../config/conn.php';
session_start(); // Tambahkan session_start() untuk mengaktifkan session

// Cek apakah request method adalah POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk memasukkan data ke tabel
    $sql = "SELECT * FROM users WHERE username = ?";

    // Persiapkan statement untuk menghindari SQL injection
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);

    // Eksekusi query
    $stmt->execute();
    $result = $stmt->get_result();

    // Cek apakah ada pengguna yang ditemukan
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        // Verifikasi password
        if (password_verify($password, $user['password'])) {
            // Set session jika login berhasil
            $_SESSION['isLoggedIn'] = true; // Tambahkan ini
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];
            header("Location: ../home.php");
            exit(); // pastikan untuk menghentikan eksekusi setelah pengalihan
        } else {
            // Jika password salah
            header("Location: login.php?error=Invalid Password");
            exit();
        }
    } else {
        // Jika username tidak ditemukan
        header("Location: login.php?error=User not found");
        exit();
    }

    // Tutup koneksi dan statement
    $stmt->close();
    $conn->close();
}
?>

