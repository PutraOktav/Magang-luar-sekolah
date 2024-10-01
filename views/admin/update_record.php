<!-- admin/update_record.php -->
<?php
include_once('../../config/conn.php');

$table = $_POST['table'];
$id = $_POST['id'];

$allowed_tables = ['users', 'program', 'agenda', 'berita', 'galeri', 'karir', 'pelatih', 'peserta'];

if (!in_array($table, $allowed_tables) || !is_numeric($id)) {
    echo "Invalid table or ID.";
    exit;
}

unset($_POST['table']);
unset($_POST['id']);

if ($table == 'users' && isset($_POST['password'])) {
    $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
}

$columns = array_keys($_POST);
$values = array_values($_POST);

$sql = "UPDATE $table SET " . implode(" = ?, ", $columns) . " = ? WHERE id = ?";
$stmt = $conn->prepare($sql);

$types = str_repeat('s', count($values)) . 'i';
$values[] = $id;

$stmt->bind_param($types, ...$values);

if ($stmt->execute()) {
    echo "Record updated successfully.";
} else {
    echo "Error updating record: " . $stmt->error;
}

$stmt->close();
$conn->close();

