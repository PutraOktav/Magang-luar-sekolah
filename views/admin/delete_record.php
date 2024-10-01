<?php
include_once('../../config/conn.php'); // Include your database connection

$id = $_POST['id'];
$table = $_POST['table'];

// Whitelist allowed tables
$allowed_tables = ['users', 'program', 'agenda', 'berita', 'galeri', 'karir', 'pelatih', 'peserta'];

if (!in_array($table, $allowed_tables) || !is_numeric($id)) {
    echo "Invalid table or ID.";
    exit;
}

// Check if it's pelatih or peserta and modify query accordingly
if ($table === 'pelatih') {
    $sql = "DELETE FROM users WHERE id = ? AND role = 2"; // Delete pelatih
} elseif ($table === 'peserta') {
    $sql = "DELETE FROM users WHERE id = ? AND role = 3"; // Delete peserta
} else {
    $sql = "DELETE FROM $table WHERE id = ?"; // For other tables
}

$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $id);

if ($stmt->execute()) {
    echo "Record deleted successfully.";
} else {
    echo "Error deleting record: " . $stmt->error;
}

$stmt->close();
$conn->close();
