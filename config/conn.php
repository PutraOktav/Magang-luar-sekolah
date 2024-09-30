<?php
$servername = "localhost";
$usernames = "root";
$password = "";
$dbname = "db_lembaga_pelatihan";

$conn = new mysqli($servername, $usernames, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>