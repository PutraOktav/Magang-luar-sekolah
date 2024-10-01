<?php
include_once('../../config/conn.php'); // Include your database connection

$table = $_GET['table'];

// Whitelist allowed tables
$allowed_tables = ['users', 'program', 'agenda', 'berita', 'galeri', 'karir', 'pelatih', 'peserta'];

if (!in_array($table, $allowed_tables)) {
    echo json_encode([]);
    exit;
}

$sql = "SHOW COLUMNS FROM $table";
$result = $conn->query($sql);

$columns = [];
while ($row = $result->fetch_assoc()) {
    if ($row['Field'] != 'id') { // Exclude 'id' column, as it will be auto-generated
        $columns[] = $row['Field'];
    }
}

echo json_encode($columns);
$conn->close();
