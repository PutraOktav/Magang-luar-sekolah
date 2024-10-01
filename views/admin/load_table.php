<!-- admin/load_table.php -->
<?php
include_once('../../config/conn.php');

$table = $_GET['table'];

$allowed_tables = ['users', 'program', 'agenda', 'berita', 'galeri', 'karir', 'pelatih', 'peserta'];

if (!in_array($table, $allowed_tables)) {
    echo '<p class="text-gray-700">Invalid table selected.</p>';
    exit;
}

switch ($table) {
    case 'users':
        $sql = "SELECT id, username as 'Username', email as 'Email' FROM users WHERE role != 1";
        break;
    case 'program':
        $sql = "SELECT id, nama_program as 'Program', jadwal as 'Jadwal' FROM program";
        break;
    case 'agenda':
        $sql = "SELECT id, judul_agenda as 'Agenda', tanggal_agenda as 'Tanggal', lokasi_agenda as 'Lokasi' FROM agenda";
        break;
    case 'berita':
        $sql = "SELECT id, judul_berita as 'Judul', tanggal_publikasi as 'Publikasi' FROM berita";
        break;
    case 'galeri':
        $sql = "SELECT id, nama_galeri as 'Galeri', category as 'Kategori' FROM galeri";
        break;
    case 'karir':
        $sql = "SELECT id, nama_karir as 'Karir' FROM karir";
        break;
    case 'pelatih':
        $sql = "SELECT id, username as 'Username', email as 'Email' FROM users WHERE role = 2";
        break;
    case 'peserta':
        $sql = "SELECT id, username as 'Username', email as 'Email' FROM users WHERE role = 3";
        break;
}

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<table class="border-collapse border border-gray-500 w-full">';
    echo '<thead class="bg-gray-100">';
    echo '<tr class="text-left">';
    while ($fieldinfo = $result->fetch_field()) {
        echo '<th class="px-4 py-2 border">' . htmlspecialchars($fieldinfo->name) . '</th>';
    }
    echo '<th class="px-4 py-2 border">Actions</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        foreach ($row as $column) {
            echo '<td class="px-4 py-2 border">' . htmlspecialchars($column) . '</td>';
        }
        echo '<td class="px-4 py-2 border">';
        echo '<button onclick="editRecord(' . (int)$row['id'] . ', \'' . htmlspecialchars($table) . '\')" class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</button>';
        echo '<button onclick="deleteRecord(' . (int)$row['id'] . ', \'' . htmlspecialchars($table) . '\')" class="bg-red-500 text-white px-2 py-1 rounded">Delete</button>';
        echo '</td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
} else {
    echo '<p class="text-gray-700">No records found.</p>';
}

$conn->close();
