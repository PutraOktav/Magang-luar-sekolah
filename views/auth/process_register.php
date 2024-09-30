<?php
require_once '../../config/conn.php';

// Cek apakah request method adalah POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $username = $_POST['username'];
    $password = $_POST['password'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $email = $_POST['email'];
    $role = $_POST['role'];

    $foto = ''; // Inisialisasi foto

    // Hash password sebelum memasukkan ke database
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Proses upload foto
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
        $fileTmpPath = $_FILES['foto']['tmp_name'];
        $fileName = $_FILES['foto']['name'];

        // Tentukan direktori upload
        $uploadDir = __DIR__ . '/uploads/';

        // Pastikan folder 'uploads/' ada
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        $destination = $uploadDir . $fileName;

        // Pindahkan file yang diunggah ke folder tujuan
        if (move_uploaded_file($fileTmpPath, $destination)) {
            // Gunakan URL HTTP untuk mengakses file
            $foto = './uploads/' . $fileName;
        } else {
            echo "Error: Gagal mengunggah file.";
            exit();
        }
    }

    // Query untuk memasukkan data ke tabel
    $sql = "INSERT INTO users ( username, password, alamat, no_telp, email, foto, role) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";

    // Persiapkan statement untuk menghindari SQL injection
    $stmt = $conn->prepare($sql);
    
    $stmt->bind_param("sssssss",  $username, $hashedPassword, $alamat, $no_telp, $email, $foto, $role);

    // Eksekusi query
    if ($stmt->execute()) {
        // Jika berhasil, arahkan ke home.php
        header("Location: login.php");
        exit(); // pastikan untuk menghentikan eksekusi setelah pengalihan
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Tutup koneksi dan statement
    $stmt->close();
    $conn->close();
}
?>
