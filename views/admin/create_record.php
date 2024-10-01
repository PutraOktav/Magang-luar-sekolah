<!-- admin/create_record.php -->
<?php
include_once('../../config/conn.php'); // Include your database connection

$table = $_POST['table'];

// Whitelist allowed tables
$allowed_tables = ['users', 'program', 'agenda', 'berita', 'galeri', 'karir', 'pelatih', 'peserta'];

if (!in_array($table, $allowed_tables)) {
    echo "Invalid table.";
    exit;
}

unset($_POST['table']); // Remove 'table' from the form data

if ($table == 'users') {
    $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
}


$columns = array_keys($_POST);
$values = array_values($_POST);

$sql = "INSERT INTO $table (" . implode(", ", $columns) . ") VALUES (" . implode(", ", array_fill(0, count($columns), '?')) . ")";
$stmt = $conn->prepare($sql);

$types = str_repeat('s', count($values)); // Assuming all fields are strings
$stmt->bind_param($types, ...$values);

if ($stmt->execute()) {
    echo "Record created successfully.";
} else {
    echo "Error creating record: " . $stmt->error;
}

$stmt->close();
$conn->close();
