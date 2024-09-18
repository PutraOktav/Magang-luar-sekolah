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
                <option value="all">Semua Kategori</option>
                <option value="produk">Peluncuran Produk</option>
                <option value="event">Event Teknologi</option>
                <option value="penghargaan">Penghargaan</option>
                <option value="kolaborasi">Kolaborasi</option>
                <option value="aplikasi">Peluncuran Aplikasi</option>
                <option value="ai">Teknologi AI</option>
                <option value="pelatihan">Pelatihan Online</option>
                <option value="kantor">Pembukaan Kantor</option>
                <option value="kerjasama">Kerjasama Internasional</option>
                <option value="keamanan">Keamanan Data</option>
                <option value="layanan">Layanan Pelanggan</option>
            </select>
        </div>

        <!-- Artikel Berita -->
        <section class="container mx-auto px-4">
            <div id="newsContainer" class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-3xl font-semibold mb-4 text-gray-800">Berita Terkini</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Articles with Category Data Attribute -->
                    <article class="news-item mb-6 p-4 border rounded-lg shadow hover:shadow-lg transition duration-300" data-category="produk">
                        <h3 class="text-2xl font-semibold mb-2">Peluncuran Produk Terbaru</h3>
                        <p class="text-gray-700 mb-2">Kami dengan bangga mengumumkan peluncuran produk terbaru kami yang akan merevolusi industri teknologi.</p>
                        <p class="text-gray-700 hidden news-description" id="produkDescription">Peluncuran produk terbaru kami ini dilakukan setelah beberapa bulan kami melakukan riset dan pengembangan produk.</p>
                        <button class="text-blue-500 underline hover:text-blue-700 transition duration-300" onclick="toggleDetails('produkDescription')">Baca selengkapnya</button>
                    </article>

                    <article class="news-item mb-6 p-4 border rounded-lg shadow hover:shadow-lg transition duration-300" data-category="event">
                        <h3 class="text-2xl font-semibold mb-2">Event Teknologi Mendatang</h3>
                        <p class="text-gray-700 mb-2">Jangan lewatkan kesempatan untuk bergabung dengan kami di event teknologi mendatang.</p>
                        <p class="text-gray-700 hidden news-description" id="eventDescription">Kami akan mengadakan event teknologi yang dihadiri oleh beberapa tokoh teknologi terkemuka di Indonesia.</p>
                        <button class="text-blue-500 underline hover:text-blue-700 transition duration-300" onclick="toggleDetails('eventDescription')">Baca selengkapnya</button>
                    </article>

                    <article class="news-item mb-6 p-4 border rounded-lg shadow hover:shadow-lg transition duration-300" data-category="penghargaan">
                        <h3 class="text-2xl font-semibold mb-2">Penghargaan Teknologi 2024</h3>
                        <p class="text-gray-700 mb-2">Perusahaan kami telah dinominasikan untuk beberapa penghargaan teknologi bergengsi tahun ini.</p>
                        <p class="text-gray-700 hidden news-description" id="penghargaanDescription">Kami sangat bangga karena telah dinominasikan untuk beberapa penghargaan teknologi bergengsi tahun ini.</p>
                        <button class="text-blue-500 underline hover:text-blue-700 transition duration-300" onclick="toggleDetails('penghargaanDescription')">Baca selengkapnya</button>
                    </article>

                    <article class="news-item mb-6 p-4 border rounded-lg shadow hover:shadow-lg transition duration-300" data-category="kolaborasi">
                        <h3 class="text-2xl font-semibold mb-2">Kolaborasi dengan Startup Lokal</h3>
                        <p class="text-gray-700 mb-2">Kami telah bermitra dengan beberapa startup lokal untuk mengembangkan solusi teknologi yang inovatif.</p>
                        <p class="text-gray-700 hidden news-description" id="kolaborasiDescription">Kami sangat bangga karena telah bermitra dengan beberapa startup lokal untuk mengembangkan solusi teknologi yang inovatif.</p>
                        <button class="text-blue-500 underline hover:text-blue-700 transition duration-300" onclick="toggleDetails('kolaborasiDescription')">Baca selengkapnya</button>
                    </article>

                    <article class="news-item mb-6 p-4 border rounded-lg shadow hover:shadow-lg transition duration-300" data-category="aplikasi">
                        <h3 class="text-2xl font-semibold mb-2">Peluncuran Aplikasi Mobile</h3>
                        <p class="text-gray-700 mb-2">Kami akan segera meluncurkan aplikasi mobile terbaru kami yang dirancang untuk meningkatkan produktivitas Anda.</p>
                        <p class="text-gray-700 hidden news-description" id="aplikasiDescription">Kami sangat bangga karena akan segera meluncurkan aplikasi mobile terbaru kami yang dirancang untuk meningkatkan produktivitas Anda.</p>
                        <button class="text-blue-500 underline hover:text-blue-700 transition duration-300" onclick="toggleDetails('aplikasiDescription')">Baca selengkapnya</button>
                    </article>

                    <article class="news-item mb-6 p-4 border rounded-lg shadow hover:shadow-lg transition duration-300" data-category="ai">
                        <h3 class="text-2xl font-semibold mb-2">Pengembangan Teknologi AI</h3>
                        <p class="text-gray-700 mb-2">Teknologi AI kami terus berkembang dan kami siap untuk meluncurkan beberapa fitur baru.</p>
                        <p class="text-gray-700 hidden news-description" id="aiDescription">Kami sangat bangga karena teknologi AI kami terus berkembang dan kami siap untuk meluncurkan beberapa fitur baru.</p>
                        <button class="text-blue-500 underline hover:text-blue-700 transition duration-300" onclick="toggleDetails('aiDescription')">Baca selengkapnya</button>
                    </article>

                    <article class="news-item mb-6 p-4 border rounded-lg shadow hover:shadow-lg transition duration-300" data-category="pelatihan">
                        <h3 class="text-2xl font-semibold mb-2">Acara Pelatihan Online</h3>
                        <p class="text-gray-700 mb-2">Kami akan mengadakan serangkaian pelatihan online yang mencakup berbagai topik teknologi terkini.</p>
                        <p class="text-gray-700 hidden news-description" id="pelatihanDescription">Kami sangat bangga karena akan mengadakan serangkaian pelatihan online yang mencakup berbagai topik teknologi terkini.</p>
                        <button class="text-blue-500 underline hover:text-blue-700 transition duration-300" onclick="toggleDetails('pelatihanDescription')">Baca selengkapnya</button>
                    </article>

                    <article class="news-item mb-6 p-4 border rounded-lg shadow hover:shadow-lg transition duration-300" data-category="kantor">
                        <h3 class="text-2xl font-semibold mb-2">Pembukaan Kantor Baru</h3>
                        <p class="text-gray-700 mb-2">Kami telah membuka kantor baru di beberapa kota utama untuk memperluas jangkauan layanan kami.</p>
                        <p class="text-gray-700 hidden news-description" id="kantorDescription">Kami sangat bangga karena telah membuka kantor baru di beberapa kota utama untuk memperluas jangkauan layanan kami.</p>
                        <button class="text-blue-500 underline hover:text-blue-700 transition duration-300" onclick="toggleDetails('kantorDescription')">Baca selengkapnya</button>
                    </article>

                    <article class="news-item mb-6 p-4 border rounded-lg shadow hover:shadow-lg transition duration-300" data-category="kerjasama">
                        <h3 class="text-2xl font-semibold mb-2">Kerjasama Internasional</h3>
                        <p class="text-gray-700 mb-2">Perusahaan kami telah memulai kerjasama dengan beberapa perusahaan internasional terkemuka.</p>
                        <p class="text-gray-700 hidden news-description" id="kerjasamaDescription">Kami sangat bangga karena telah memulai kerjasama dengan beberapa perusahaan internasional terkemuka.</p>
                        <button class="text-blue-500 underline hover:text-blue-700 transition duration-300" onclick="toggleDetails('kerjasamaDescription')">Baca selengkapnya</button>
                    </article>
                </div>
            </div>
        </section>
    </main>

    <!-- Include Footer -->
    <?php include_once('../views/layouts/footer.php'); ?>

    <script src="../public/js/scripts.js"></script>
</body>