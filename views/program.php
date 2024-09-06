<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Program Pelatihan - Nokt Tech</title>
    <link rel="shortcut icon" href="../public/images/logo/logo.png" type="image/x-icon">
    <link
      href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- Include Header -->
    <?php include_once('../views/layouts/header.php'); ?>

    <!-- Konten utama -->
    <main class="mt-10">
      <h1 class="text-4xl font-bold text-center mb-6 text-white">Program Pelatihan Kami</h1>

      <section class="container mx-auto px-4">
        <!-- Tentang Program Pelatihan -->
        <div class="bg-gray-100 p-6 rounded-lg shadow-lg mb-6">
          <h2 class="text-3xl font-semibold mb-4">Tentang Program Kami</h2>
          <p class="text-gray-700 mb-4">
            Nokt Tech menyediakan berbagai program pelatihan teknologi yang
            dirancang untuk membantu Anda mengembangkan keterampilan dan
            pengetahuan dalam bidang teknologi terbaru. Program kami mencakup
            pelatihan untuk pengembangan perangkat lunak, manajemen sistem informasi,
            dan banyak lagi.
          </p>
          <p class="text-gray-700">
            Setiap program dirancang oleh para ahli di bidangnya dan mencakup
            kurikulum yang komprehensif untuk memastikan Anda mendapatkan
            pengetahuan dan keterampilan yang diperlukan untuk sukses di industri teknologi.
          </p>
        </div>

        <!-- Daftar Program Pelatihan -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <!-- Program 1 -->
          <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition">
            <img
              src="../public/images/program/program1.jpg"
              alt="Pengembangan Perangkat Lunak"
              class="w-full h-48 object-cover"
            />
            <div class="p-4">
              <h3 class="text-xl font-semibold mb-2">Pengembangan Perangkat Lunak</h3>
              <p class="text-gray-600 mb-4">
                Pelatihan ini dirancang untuk mengajarkan Anda cara mengembangkan perangkat lunak yang efisien dan scalable.
              </p>
              <button class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 mb-4" onclick="toggleDetails('program1Details')">Lihat Detail</button>
              <div id="program1Details" class="hidden">
                <h4 class="text-lg font-semibold mb-2">Kurikulum</h4>
                <ul class="list-disc pl-5 mb-4">
                  <li>Pengenalan Pemrograman</li>
                  <li>Pengembangan Web dan Mobile</li>
                  <li>Manajemen Proyek Perangkat Lunak</li>
                </ul>
                <h4 class="text-lg font-semibold mb-2">Jadwal</h4>
                <p class="mb-4">Setiap Senin & Rabu, 18:00 - 20:00</p>
                <h4 class="text-lg font-semibold mb-2">Tenaga Pelatih</h4>
                <p class="mb-4">John Doe - Senior Software Engineer di Nokt Tech</p>
                <h4 class="text-lg font-semibold mb-2">Biaya</h4>
                <p class="mb-4">Rp 5.000.000,-</p>
              </div>
            </div>
          </div>

          <!-- Program 2 -->
          <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition">
            <img
              src="../public/images/program/program2.jpg"
              alt="Sistem Informasi Terintegrasi"
              class="w-full h-48 object-cover"
            />
            <div class="p-4">
              <h3 class="text-xl font-semibold mb-2">Sistem Informasi Terintegrasi</h3>
              <p class="text-gray-600 mb-4">
                Pelatihan ini mencakup desain dan implementasi sistem informasi yang dapat meningkatkan efisiensi bisnis Anda.
              </p>
              <button class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 mb-4" onclick="toggleDetails('program2Details')">Lihat Detail</button>
              <div id="program2Details" class="hidden">
                <h4 class="text-lg font-semibold mb-2">Kurikulum</h4>
                <ul class="list-disc pl-5 mb-4">
                  <li>Pemodelan Data</li>
                  <li>Integrasi Sistem</li>
                  <li>Keamanan Sistem Informasi</li>
                </ul>
                <h4 class="text-lg font-semibold mb-2">Jadwal</h4>
                <p class="mb-4">Setiap Selasa & Kamis, 18:00 - 20:00</p>
                <h4 class="text-lg font-semibold mb-2">Tenaga Pelatih</h4>
                <p class="mb-4">Jane Smith - IT Consultant di Nokt Tech</p>
                <h4 class="text-lg font-semibold mb-2">Biaya</h4>
                <p class="mb-4">Rp 4.500.000,-</p>
              </div>
            </div>
          </div>

          <!-- Program 3 -->
          <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition">
            <img
              src="../public/images/program/program3.jpg"
              alt="Konsultasi Teknologi"
              class="w-full h-48 object-cover"
            />
            <div class="p-4">
              <h3 class="text-xl font-semibold mb-2">Konsultasi Teknologi</h3>
              <p class="text-gray-600 mb-4">
                Pelajari bagaimana merancang strategi teknologi yang efektif untuk bisnis Anda dengan para ahli kami.
              </p>
              <button class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 mb-4" onclick="toggleDetails('program3Details')">Lihat Detail</button>
              <div id="program3Details" class="hidden">
                <h4 class="text-lg font-semibold mb-2">Kurikulum</h4>
                <ul class="list-disc pl-5 mb-4">
                  <li>Analisis Kebutuhan Teknologi</li>
                  <li>Strategi Implementasi Teknologi</li>
                  <li>Evaluasi dan Pemeliharaan</li>
                </ul>
                <h4 class="text-lg font-semibold mb-2">Jadwal</h4>
                <p class="mb-4">Setiap Jumat, 18:00 - 20:00</p>
                <h4 class="text-lg font-semibold mb-2">Tenaga Pelatih</h4>
                <p class="mb-4">Michael Brown - CTO di Nokt Tech</p>
                <h4 class="text-lg font-semibold mb-2">Biaya</h4>
                <p class="mb-4">Rp 6.000.000,-</p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- Include Footer -->
    <?php include_once('../views/layouts/footer.php'); ?>

    <script src="../../public/js/scripts.js"></script>

    <script>
      function toggleDetails(detailsId) {
        const detailsElement = document.getElementById(detailsId);
        detailsElement.classList.toggle('hidden');
      }
    </script>
  </body>
</html>