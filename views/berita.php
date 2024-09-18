<head>
    <title>Berita - Nokt Tech</title>
    <link rel="shortcut icon" href="../public/images/logo/logo.png" type="image/x-icon">
</head>

<body>
    <!-- Include Header -->
    <?php include_once('../views/layouts/header.php'); ?>

    <!-- Konten utama -->
    <main class="mt-10">
        <h1 class="text-4xl font-bold text-center mb-6 text-white">Berita Terbaru</h1>

        <!-- Filter Berita dengan Dropdown -->
        <div class="container mx-auto px-4 mb-6">
            <select id="newsFilter" class="w-full p-3 rounded-lg shadow-lg">
                <option value="all">Semua Berita</option>
                <?php
                include_once('../config/conn.php');
                $sql = "SELECT judul_berita FROM berita";
                $category = $conn->query($sql);

                while ($row = $category->fetch_assoc()) {
                ?>
                    <option value="<?php echo $row['judul_berita']; ?>"><?php echo $row['judul_berita']; ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <!-- Artikel Berita -->
        <section class="container mx-auto px-4">
            <div id="newsContainer" class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-3xl font-semibold mb-4 text-gray-800">Berita Terkini</h2>

                <?php
                $sql2 = "SELECT * FROM berita";
                $result = $conn->query($sql2);

                if ($result->num_rows > 0) {
                    echo '<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="newsContainer">';

                    while ($row = $result->fetch_assoc()) {
                ?>
                        <!-- Artikel Berita -->
                        <article class="news-item mb-6 p-4 border rounded-lg shadow hover:shadow-lg transition duration-300" data-category="<?php echo $row['judul_berita']; ?>">
                            <h3 class="text-2xl font-semibold mb-2"><?php echo $row['judul_berita']; ?></h3>
                            <p class="text-gray-700 mb-2"><?php echo $row['isi_berita']; ?></p>
                            <p class="text-gray-700 hidden news-description" id="desc-<?php echo $row['id_berita']; ?>"><?php echo $row['selengkap']; ?></p>
                            <button class="text-blue-500 underline hover:text-blue-700 transition duration-300" onclick="toggleDetails('desc-<?php echo $row['id_berita']; ?>', this)">Baca selengkapnya</button>
                        </article>
                <?php
                    }
                    echo '</div>';
                } else {
                    echo '<p class="text-gray-700">Tidak ada berita yang tersedia saat ini.</p>';
                }
                ?>
            </div>
        </section>
    </main>

    <!-- Include Footer -->
    <?php include_once('../views/layouts/footer.php'); ?>

    <script>
        // Filter berita berdasarkan kategori
        document.getElementById('newsFilter').addEventListener('change', function() {
            var filterValue = this.value;
            var newsItems = document.querySelectorAll('.news-item');

            newsItems.forEach(function(item) {
                if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });

        // Toggle detail berita dan ubah teks tombol
        function toggleDetails(id, button) {
            var description = document.getElementById(id);
            if (description.style.display === 'none' || description.style.display === '') {
                description.style.display = 'block';
                button.textContent = 'Tutup';
            } else {
                description.style.display = 'none';
                button.textContent = 'Baca selengkapnya';
            }
        }
    </script>
</body>