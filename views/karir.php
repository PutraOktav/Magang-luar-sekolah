<!-- karir.php -->
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
        <h1 class="text-4xl font-bold text-center mb-6 text-white">Karir</h1>

        <section class="container mx-auto px-4">
            <div id="jobContainer" class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-3xl font-semibold mb-4 text-gray-800">Karir Terkini</h2>
                <?php
                $sql = "SELECT * FROM karir";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo '<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">';

                    while ($row = $result->fetch_assoc()) {
                ?>
                        <!-- Artikel Karir -->
                        <article class="job-item mb-6 p-4 border rounded-lg shadow hover:shadow-lg transition duration-300 flex flex-col">
                            <h3 class="text-2xl font-semibold mb-2"><?php echo $row['nama_karir']; ?></h3>
                            <p class="text-gray-700 mb-2"><?php echo $row['deskripsi_karir']; ?></p>
                            <p class="text-gray-700 hidden job-description" id="desc-<?php echo $row['id_karir']; ?>"><?php echo $row['selengkapnya']; ?></p>
                            <button class="text-blue-500 underline hover:text-blue-700 transition duration-300 self-end" onclick="toggleDetails('desc-<?php echo $row['id_karir']; ?>', this)">Baca selengkapnya</button>
                        </article>
                <?php
                    }
                    echo '</div>';
                } else {
                    echo '<p class="text-gray-700">Tidak ada karir yang tersedia saat ini.</p>';
                }
                ?>
            </div>
        </section>

    </main>

    <!-- Include Footer -->
    <?php include_once('../views/layouts/footer.php'); ?>

    <script src="../public/js/scripts.js"></script>
</body>