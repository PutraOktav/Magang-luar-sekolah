<!-- admin/fetch_record.php -->
<?php
include_once('../../config/conn.php');

$id = $_GET['id'];
$table = $_GET['table'];

$allowed_tables = ['users', 'program', 'agenda', 'berita', 'galeri', 'karir', 'pelatih', 'peserta'];

if (!in_array($table, $allowed_tables) || !is_numeric($id)) {
    echo json_encode([]);
    exit;
}

$sql = "SELECT * FROM $table WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo json_encode($result->fetch_assoc());
} else {
    echo json_encode([]);
}

$stmt->close();
$conn->close();
?>
