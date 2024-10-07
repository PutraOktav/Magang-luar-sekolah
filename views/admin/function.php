<?php
// index.php
require_once '../config/conn.php';

// Get all table names
$stmt = $pdo->query("SHOW TABLES");
$tables = $stmt->fetchAll(PDO::FETCH_COLUMN);

$selectedTable = $_GET['table'] ?? $tables[0];

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_POST['action'];
    $id = $_POST['id'] ?? null;

    if ($action == 'create' || $action == 'update') {
        $columns = array_keys($_POST);
        $values = array_values($_POST);
        $columns = array_diff($columns, ['action', 'id']);
        $values = array_diff_key($values, ['action' => '', 'id' => '']);

        $sql = $action == 'create' 
            ? "INSERT INTO $selectedTable (" . implode(', ', $columns) . ") VALUES (" . implode(', ', array_fill(0, count($values), '?')) . ")"
            : "UPDATE $selectedTable SET " . implode(' = ?, ', $columns) . " = ? WHERE id = ?";

        if ($action == 'update') {
            $values[] = $id;
        }

        $stmt = $pdo->prepare($sql);
        $stmt->execute($values);
    } elseif ($action == 'delete' && $id) {
        $stmt = $pdo->prepare("DELETE FROM $selectedTable WHERE id = ?");
        $stmt->execute([$id]);
    }

    // Redirect to prevent form resubmission
    header("Location: ?table=$selectedTable");
    exit;
}

// Get table structure
$stmt = $pdo->query("DESCRIBE $selectedTable");
$columns = $stmt->fetchAll(PDO::FETCH_COLUMN);

// Get table data
$stmt = $pdo->query("SELECT * FROM $selectedTable");
$rows = $stmt->fetchAll();
?>