<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Kontak - Nokt Tech</title>
  <link rel="shortcut icon" href="../public/images/logo/logo.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
</head>

<body>
  <!-- Include Header -->
  <?php include_once('../views/layouts/header.php'); ?>

  <!-- Konten utama -->
  <main class="mt-10">
    <h1 class="text-4xl font-bold text-center mb-6 text-white">Kontak Kami</h1>
    <section class="container mx-auto px-4">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-3xl font-semibold mb-4">Hubungi Kami</h2>
            <p class="text-gray-700 mb-4">
                Jika Anda memiliki pertanyaan atau ingin mengetahui lebih lanjut tentang layanan kami, jangan ragu untuk menghubungi kami melalui informasi berikut:
            </p>
            <ul class="mb-6">
                <li class="mb-2">
                    <i class="fas fa-map-marker-alt mr-2"></i>
                    Alamat: Jl. New York No. 123, Magelang, Indonesia
                </li>
                <li class="mb-2">
                    <i class="fas fa-phone mr-2"></i>
                    Telepon: (082) 220-926125
                </li>
                <li class="mb-2">
                    <i class="fas fa-envelope mr-2"></i>
                    Email:
                    <a href="mailto:nokt.tech@gmail.com" class="text-blue-600">nokt.tech@gmail.com</a>
                </li>
            </ul>
            <form class="space-y-4" action="mailto:nokt.tech@gmail.com" method="POST">
                <div>
                    <label for="name" class="block text-gray-700">Nama</label>
                    <input type="text" id="name" name="name" class="w-full p-2 border border-gray-300 rounded-md" required />
                </div>
                <div>
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" id="email" name="email" class="w-full p-2 border border-gray-300 rounded-md" required />
                </div>
                <div>
                    <label for="message" class="block text-gray-700">Pesan</label>
                    <textarea id="message" name="message" rows="4" class="w-full p-2 border border-gray-300 rounded-md" required></textarea>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-300">
                    Kirim Pesan
                </button>
            </form>
        </div>
    </section>
</main>

    <!-- Include Footer -->
    <?php include_once('../views/layouts/footer.php'); ?>

  <script src="../../public/js/scripts.js"></script>
</body>

</html>