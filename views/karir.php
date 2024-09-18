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

                <!-- Artikel Karir -->
                <article class="job-item mb-6 p-4 border rounded-lg shadow hover:shadow-lg transition duration-300">
                    <h3 class="text-2xl font-semibold mb-2">Software Engineer</h3>
                    <p class="text-gray-700 mb-2">Kami sedang mencari Software Engineer yang berpengalaman dan memiliki kemampuan yang baik dalam mengembangkan aplikasi web dan mobile.</p>
                    <p class="text-gray-700 hidden job-description" id="softwareEngineerDescription">
                        Keterangan lebih lanjut tentang karir ini adalah sebagai berikut: Kami sedang mencari Software Engineer yang berpengalaman dan memiliki kemampuan yang baik dalam mengembangkan aplikasi web dan mobile. Kandidat yang kami cari harus memiliki kemampuan yang baik dalam mengembangkan aplikasi yang scalable, reliable, dan maintainable. Kandidat juga harus memiliki kemampuan yang baik dalam mengkomunikasikan ide-ide dan hasil kerja kepada tim.
                    </p>
                    <button class="text-blue-500 underline hover:text-blue-700 transition duration-300" onclick="toggleJobDescription('softwareEngineerDescription')">Baca selengkapnya</button>
                </article>

                <article class="job-item mb-6 p-4 border rounded-lg shadow hover:shadow-lg transition duration-300">
                    <h3 class="text-2xl font-semibold mb-2">UI/UX Designer</h3>
                    <p class="text-gray-700 mb-2">Kami sedang mencari UI/UX Designer yang berpengalaman dan memiliki kemampuan yang baik dalam mendesain antarmuka yang menarik dan mudah digunakan.</p>
                    <p class="text-gray-700 hidden job-description" id="uiuxDesignerDescription">
                        Keterangan lebih lanjut tentang karir ini adalah sebagai berikut: Kami sedang mencari UI/UX Designer yang berpengalaman dan memiliki kemampuan yang baik dalam mendesain antarmuka yang menarik dan mudah digunakan. Kandidat yang kami cari harus memiliki kemampuan yang baik dalam mendesain antarmuka yang scalable, reliable, dan maintainable. Kandidat juga harus memiliki kemampuan yang baik dalam mengkomunikasikan ide-ide dan hasil kerja kepada tim.
                    </p>
                    <button class="text-blue-500 underline hover:text-blue-700 transition duration-300" onclick="toggleJobDescription('uiuxDesignerDescription')">Baca selengkapnya</button>
                </article>

                <article class="job-item mb-6 p-4 border rounded-lg shadow hover:shadow-lg transition duration-300">
                    <h3 class="text-2xl font-semibold mb-2">IT Support</h3>
                    <p class="text-gray-700 mb-2">Kami sedang mencari IT Support yang berpengalaman dan memiliki kemampuan yang baik dalam memberikan dukungan teknis kepada pelanggan.</p>
                    <p class="text-gray-700 hidden job-description" id="itSupportDescription">
                        Keterangan lebih lanjut tentang karir ini adalah sebagai berikut: Kami sedang mencari IT Support yang berpengalaman dan memiliki kemampuan yang baik dalam memberikan dukungan teknis kepada pelanggan. Kandidat yang kami cari harus memiliki kemampuan yang baik dalam memberikan dukungan teknis kepada pelanggan. Kandidat juga harus memiliki kemampuan yang baik dalam mengkomunikasikan ide-ide dan hasil kerja kepada tim.
                    </p>
                    <button class="text-blue-500 underline hover:text-blue-700 transition duration-300" onclick="toggleJobDescription('itSupportDescription')">Baca selengkapnya</button>
                </article>
            </div>
        </section>
    </main>

    <!-- Include Footer -->
    <?php include_once('../views/layouts/footer.php'); ?>


    <script>
        function toggleJobDescription(id) {
            const description = document.getElementById(id);
            description.classList.toggle('hidden');
        }
    </script>
</body>