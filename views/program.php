<head>
  <title>Program Pelatihan - Nokt Tech</title>
  <link rel="shortcut icon" href="../public/images/logo/logo.png" type="image/x-icon">
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
      <?php
      include_once('../config/conn.php');

      $sql = "SELECT * FROM program";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        echo '<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">';

        while ($row = $result->fetch_assoc()) {
      ?>
          <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition">
            <img src="../public/images/program/<?php echo $row['foto']; ?>" alt="<?php echo $row['nama_program']; ?>" class="w-full h-48 object-cover" />
            <div class="p-4">
              <h3 class="text-xl font-semibold mb-2"><?php echo $row['nama_program']; ?></h3>
              <p class="text-gray-600 mb-4">
                <?php echo $row['deskripsi']; ?>
              </p>
              <button class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 mb-4" onclick="toggleDetails('programDetails<?php echo $row['id_program']; ?>')">Lihat Detail</button>
              <div id="programDetails<?php echo $row['id_program']; ?>" class="hidden">
                <h4 class="text-lg font-semibold mb-2">Kurikulum</h4>
                <ul class="list-disc pl-5 mb-4">
                  <?php foreach (explode(",", $row['materi']) as $materi) { ?>
                    <li><?php echo $materi; ?></li>
                  <?php } ?>
                </ul>
                <h4 class="text-lg font-semibold mb-2">Jadwal</h4>
                <p class="mb-4"><?php echo $row['jadwal']; ?></p>
                <h4 class="text-lg font-semibold mb-2">Tenaga Pelatih</h4>
                <p class="mb-4"><?php echo $row['pelatih']; ?></p>
                <h4 class="text-lg font-semibold mb-2">Biaya</h4>
                <p class="mb-4">Rp. <?php echo  $row['biaya']; ?></p>
              </div>
            </div>
          </div>
      <?php
        }
        echo '</div>';
      } else {
        echo '<p class="text-gray-700">Tidak ada program yang tersedia saat ini.</p>';
      }
      ?>
    </section>
  </main>

  <!-- Include Footer -->
  <?php include_once('../views/layouts/footer.php'); ?>

  <script src="../public/js/scripts.js"></script>

  <script>
    function toggleDetails(detailsId) {
      const detailsElement = document.getElementById(detailsId);
      detailsElement.classList.toggle('hidden');
    }
  </script>
</body>