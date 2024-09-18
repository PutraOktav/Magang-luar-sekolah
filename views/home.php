<head>
    <title>Home - Nokt Tech</title>
    <link rel="shortcut icon" href="../public/images/logo/logo.png" type="image/x-icon">
</head>

<body>

    <!-- Include Header -->
    <?php include_once('../views/layouts/header.php'); ?>

    <!-- Hero Section -->
    <section class="bg-cover bg-center h-screen" style="background-image: url('../public/images/background/bg.jpg');">
        <div class="h-full flex items-center justify-center bg-black bg-opacity-50">
            <div class="text-center text-white">
                <h1 class="text-5xl font-bold mb-4">Selamat Datang di Nokt Tech</h1>
                <p class="text-lg mb-8">Kami adalah perusahaan teknologi inovatif yang berdedikasi untuk memberikan layanan IT yang terbaik untuk Anda. Kami juga merupakan lembaga pendidikan yang berfokus pada pengembangan kompetensi di bidang teknologi.</p>
                <a href="#services" class="bg-gradient-to-r from-[#2563eb] via-[#1e3a8a] to-black text-white text-white px-6 py-3 rounded-md text-lg hover:bg-blue-700">Pelajari Lebih Lanjut</a>
            </div>
        </div>
    </section>

    <!-- Layanan Kami Section -->
    <section id="services" class="py-16 bg-white mb-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-8">Layanan Kami</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-gray-200 p-6 rounded-lg shadow-lg hover:bg-gray-300 transition">
                    <div class="flex items-center justify-center mb-4">
                        <svg class="h-10 w-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1.245M15.665 8.485a1.23 1.23 0 011.668-.245l3.522 3.52a1.23 1.23 0 01-1.669 1.245V14a1 1 0 01-1 1h-2a1 1 0 01-1-1V6.414a1 1 0 011-1H4.89a1 1 0 01-1.668-.245l-3.522-3.52a1.23 1.23 0 011.669-1.245V3a1 1 0 011 1h2a1 1 0 011 1V10.59"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Web Development</h3>
                    <p class="text-gray-600">Kami membangun solusi web yang modern, responsif, dan cepat untuk kebutuhan bisnis Anda.</p>
                </div>
                <div class="bg-gray-200 p-6 rounded-lg shadow-lg hover:bg-gray-300 transition">
                    <div class="flex items-center justify-center mb-4">
                        <svg class="h-10 w-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01"></path>
                            <path d="M8 21a6 6 0 00-6-6V5a6 6 0 016 6v10a6 6 0 00-6 6h3"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Mobile App Development</h3>
                    <p class="text-gray-600">Kami mengembangkan aplikasi mobile yang intuitif dan mudah digunakan untuk berbagai platform.</p>
                </div>
                <div class="bg-gray-200 p-6 rounded-lg shadow-lg hover:bg-gray-300 transition">
                    <div class="flex items-center justify-center mb-4">
                        <svg class="h-10 w-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2.828V7H7.172V5H5v12h12v-2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">IT Consulting</h3>
                    <p class="text-gray-600">Kami memberikan konsultasi teknologi untuk membantu Anda merumuskan strategi IT yang tepat.</p>
                </div>
                <div class="bg-gray-200 p-6 rounded-lg shadow-lg hover:bg-gray-300 transition">
                    <div class="flex items-center justify-center mb-4">
                        <svg class="h-10 w-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m0 4.87V19l3.75 3.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Cyber Security</h3>
                    <p class="text-gray-600">Kami menyediakan layanan keamanan siber untuk melindungi aset digital Anda dari ancaman.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Include Footer -->
    <?php include_once('../views/layouts/footer.php'); ?>

    <!-- Include Scripts -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>