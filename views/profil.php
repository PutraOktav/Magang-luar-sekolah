<head>
  <title>Profil - Nokt Tech</title>
  <link rel="shortcut icon" href="../public/images/logo/logo.png" type="image/x-icon">
</head>

<body id="profil-page">

  <!-- Include Header -->
  <?php include_once('../views/layouts/header.php'); ?>

  <!-- Konten utama -->
  <main class="mt-20">
    <div class="container mx-auto px-4">
      <h1 class="text-5xl font-bold text-center mb-10 text-white">Profil Kami</h1>
      <section class="bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-3xl font-semibold mb-4">Tentang Kami</h2>
        <p class="text-gray-700 leading-relaxed">
          Nokt Tech adalah perusahaan web developer yang berdedikasi untuk
          memberikan solusi teknologi terdepan bagi perusahaan dan individu.
          Kami memiliki tim profesional yang berpengalaman dalam berbagai
          bidang teknologi, siap untuk membantu Anda mencapai kesuksesan.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
          <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl">
            <h3 class="text-2xl font-semibold mb-4">Visi</h3>
            <p class="text-gray-700">
              Visi kami adalah menjadi perusahaan web developer terkemuka di
              Indonesia yang dapat membantu perusahaan dan individu untuk
              meningkatkan kinerja dan efisiensi dengan menggunakan teknologi
              yang inovatif.
            </p>
          </div>
          <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl">
            <h3 class="text-2xl font-semibold mb-4">Misi</h3>
            <p class="text-gray-700">
              Misi kami adalah memberikan layanan pengembangan web yang
              berkualitas dan inovatif untuk membantu perusahaan dan individu
              dalam meningkatkan kinerja dan efisiensi, serta memberikan solusi
              yang optimal dan efisien.
            </p>
          </div>
        </div>
      </section>
      <section class="bg-white p-6 rounded-lg shadow-lg mt-10">
        <h2 class="text-3xl font-semibold mb-4">Team</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <div class="bg-gray-200 p-4 rounded-lg hover:shadow-lg">
            <img src="../public/images/team/team-1.jpeg" class="rounded-lg w-full h-48 object-cover" alt="Tim 1">
            <div class="flex items-center justify-center mt-4">
              <h3 class="text-lg font-semibold">Freya J</h3>
              <p class="text-gray-600 text-sm">( Web Developer )</p>
            </div>
          </div>
          <div class="bg-gray-200 p-4 rounded-lg hover:shadow-lg">
            <img src="../public/images/team/team-2.jpg" class="rounded-lg w-full h-48 object-cover" alt="Tim 2">
            <div class="flex items-center justify-center mt-4">
              <h3 class="text-lg font-semibold">IU </h3>
              <p class="text-gray-600 text-sm">( UI/UX Designer )</p>
            </div>
          </div>
          <div class="bg-gray-200 p-4 rounded-lg hover:shadow-lg">
            <img src="../public/images/team/team-3.jpg" class="rounded-lg w-full h-48 object-cover" alt="Tim 3">
            <div class="flex items-center justify-center mt-4">
              <h3 class="text-lg font-semibold">Park Jihyo</h3>
              <p class="text-gray-600 text-sm">( Manager )</p>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>

  <!-- Include Footer -->
  <?php include_once('../views/layouts/footer.php'); ?>

</body>