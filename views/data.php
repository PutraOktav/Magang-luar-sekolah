<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Karir - Nokt Tech</title>
    <link rel="shortcut icon" href="../public/images/logo/logo.png" type="image/x-icon">
</head>

<body>
    <!-- Include Header -->
    <?php include_once('../views/layouts/header.php'); ?>

    <!-- Konten utama -->
    <main class="mt-10">
        <h1 class="text-4xl font-bold text-center mb-6 text-white">Data</h1>

        <section class="container mx-auto px-4">
            <div id="jobContainer" class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-3xl font-semibold mb-4 text-gray-800">User</h2>
                <?php
                $sql = "SELECT users.*, roles.role_name FROM users
                JOIN roles ON users.role = roles.role_id";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo '<table class="border-collapse border border-gray-500 w-full">';
                    echo '<thead class="bg-gray-100">';
                    echo '<tr class="text-left">';
                    echo '<th class="px-4 py-2 border">Nama</th>';
                    echo '<th class="px-4 py-2 border">Image</th>';
                    echo '<th class="px-4 py-2 border">Password</th>';
                    echo '<th class="px-4 py-2 border">Alamat</th>';
                    echo '<th class="px-4 py-2 border">No. Telp</th>';
                    echo '<th class="px-4 py-2 border">Email</th>';
                    echo '<th class="px-4 py-2 border">Role</th>';
                    echo '</tr>';
                    echo '</thead>';
                    echo '<tbody>';
                    while ($row = $result->fetch_assoc()) {
                        echo '<tr>';
                        echo '<td class="px-4 py-2 border">' . $row['username'] . '</td>';
                        echo '<td class="px-4 py-2 border"><img src="../public/images/user/' . $row['foto'] . '" class="rounded-full w-12 h-12 object-cover" alt="User"></td>';
                        echo '<td class="px-4 py-2 border">' . $row['password'] . '</td>';
                        echo '<td class="px-4 py-2 border">' . $row['alamat'] . '</td>';
                        echo '<td class="px-4 py-2 border">' . $row['no_telp'] . '</td>';
                        echo '<td class="px-4 py-2 border">' . $row['email'] . '</td>';
                        echo '<td class="px-4 py-2 border">' . $row['role_name'] . '</td>';
                        echo '</tr>';
                    }
                    echo '</tbody>';
                    echo '</table>';
                } else {
                    echo '<p class="text-gray-700">Tidak ada karir yang tersedia saat ini.</p>';
                }
                ?>
        </section>
        <br>
        <section class="container mx-auto px-4">
            <div id="jobContainer" class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-3xl font-semibold mb-4 text-gray-800">Program</h2>
                <?php
                $sql2 = "SELECT program.*, users.username 
                FROM program
                JOIN users ON program.id_pelatih = users.id";
                $result2 = $conn->query($sql2);

                if ($result2->num_rows > 0) {
                    echo '<table class="border-collapse border border-gray-500 w-full">';
                    echo '<thead class="bg-gray-100">';
                    echo '<tr class="text-left">';
                    echo '<th class="px-4 py-2 border">Nama</th>';
                    echo '<th class="px-4 py-2 border">Image</th>';
                    echo '<th class="px-4 py-2 border">Deskripsi</th>';
                    echo '<th class="px-4 py-2 border">Jadwal</th>';
                    echo '<th class="px-4 py-2 border">Biaya</th>';
                    echo '<th class="px-4 py-2 border">Materi</th>';
                    echo '<th class="px-4 py-2 border">ID Pelatih</th>';
                    echo '</tr>';
                    echo '</thead>';
                    echo '<tbody>';
                    while ($row = $result2->fetch_assoc()) {
                        echo '<tr>';
                        echo '<td class="px-4 py-2 border">' . $row['nama_program'] . '</td>';
                        echo '<td class="px-4 py-2 border"><img src="../public/images/program/' . $row['foto'] . '" class="rounded-full w-12 h-12 object-cover" alt="User"></td>';
                        echo '<td class="px-4 py-2 border">' . $row['deskripsi'] . '</td>';
                        echo '<td class="px-4 py-2 border">' . $row['jadwal'] . '</td>';
                        echo '<td class="px-4 py-2 border"> Rp.' . $row['biaya'] . '</td>';
                        echo '<td class="px-4 py-2 border">' . $row['materi'] . '</td>';
                        echo '<td class="px-4 py-2 border"> Mr./Mrs.' . $row['username'] . '</td>';
                        echo '</tr>';
                    }
                    echo '</tbody>';
                    echo '</table>';
                } else {
                    echo '<p class="text-gray-700">Tidak ada karir yang tersedia saat ini.</p>';
                }
                ?>
        </section>
        <br>
        <section class="container mx-auto px-4">
            <div id="jobContainer" class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-3xl font-semibold mb-4 text-gray-800">Agenda</h2>
                <?php
                $sql3 = "SELECT * FROM Agenda";
                $result3 = $conn->query($sql3);

                if ($result3->num_rows > 0) {
                    echo '<table class="border-collapse border border-gray-500 w-full">';
                    echo '<thead class="bg-gray-100">';
                    echo '<tr class="text-left">';
                    echo '<th class="px-4 py-2 border">Nama</th>';
                    echo '<th class="px-4 py-2 border">Tanggal</th>';
                    echo '<th class="px-4 py-2 border">Waktu</th>';
                    echo '<th class="px-4 py-2 border">Lokasi</th>';
                    echo '</tr>';
                    echo '</thead>';
                    echo '<tbody>';
                    while ($row = $result3->fetch_assoc()) {
                        echo '<tr>';
                        echo '<td class="px-4 py-2 border">' . $row['judul_agenda'] . '</td>';
                        echo '<td class="px-4 py-2 border">' . $row['tanggal_agenda'] . '</td>';
                        echo '<td class="px-4 py-2 border">' . $row['waktu_agenda'] . '</td>';
                        echo '<td class="px-4 py-2 border">' . $row['lokasi_agenda'] . '</td>';
                        echo '</tr>';
                    }
                    echo '</tbody>';
                    echo '</table>';
                } else {
                    echo '<p class="text-gray-700">Tidak ada karir yang tersedia saat ini.</p>';
                }
                ?>
        </section>
    </main>

    <!-- Include Footer -->
    <?php include_once('../views/layouts/footer.php'); ?>

    <script src="../public/js/scripts.js"></script>
</body>