<?php

// Koneksi database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "db_lembaga_pelatihan";

$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
