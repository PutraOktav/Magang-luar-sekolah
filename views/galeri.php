<head>
    <title>Berita - Nokt Tech</title>
    <link rel="shortcut icon" href="../public/images/logo/logo.png" type="image/x-icon">
</head>

<body>

    <!-- Include Header -->
    <?php include_once('../views/layouts/header.php'); ?>

    <!-- Konten utama -->
    <main class="container mx-auto mt-10 px-4">
        <h1 class="text-4xl font-bold text-center mb-10 text-white ">Galeri</h1>

        <!-- Video Galeri -->
        <section class="mb-16">
            <h2 class="text-2xl font-semibold mb-6 text-white">Video</h2>
            <div class="relative">
                <div class="slideshow-container">
                    <div class="myVideoSlides fade show">
                        <video class="w-full h-64 object-cover" controls autoplay muted loop>
                            <source src="../public/videos/video1.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="myVideoSlides fade">
                        <video class="w-full h-64 object-cover" controls autoplay muted loop>
                            <source src="../public/videos/video2.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="myVideoSlides fade">
                        <video class="w-full h-64 object-cover" controls autoplay muted loop>
                            <source src="../public/videos/video3.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
                <a class="prev absolute top-1/2 left-0 transform -translate-y-1/2 bg-gray-700 text-white px-4 py-2 cursor-pointer" onclick="plusSlides(-1, 'video')">&#10094;</a>
                <a class="next absolute top-1/2 right-0 transform -translate-y-1/2 bg-gray-700 text-white px-4 py-2 cursor-pointer" onclick="plusSlides(1, 'video')">&#10095;</a>
            </div>
        </section>

        <!-- Foto Galeri -->
        <section class="mb-16">
            <h2 class="text-2xl font-semibold mb-6 text-white">Foto</h2>
            <div class="relative">
                <div class="slideshow-container">
                    <div class="myPhotoSlides fade show">
                        <img src="../public/images/photo/photo1.jpg" alt="Kegiatan 1" class="w-full h-64 object-cover">
                    </div>
                    <div class="myPhotoSlides fade">
                        <img src="../public/images/photo/photo2.jpg" alt="Kegiatan 2" class="w-full h-64 object-cover">
                    </div>
                    <div class="myPhotoSlides fade">
                        <img src="../public/images/photo/photo3.jpg" alt="Kegiatan 3" class="w-full h-64 object-cover">
                    </div>
                    <div class="myPhotoSlides fade">
                        <img src="../public/images/photo/photo4.jpg" alt="Kegiatan 4" class="w-full h-64 object-cover">
                    </div>
                    <div class="myPhotoSlides fade">
                        <img src="../public/images/photo/photo5.jpg" alt="Kegiatan 5" class="w-full h-64 object-cover">
                    </div>
                    <div class="myPhotoSlides fade">
                        <img src="../public/images/photo/photo6.jpg" alt="Kegiatan 6" class="w-full h-64 object-cover">
                    </div>
                    <div class="myPhotoSlides fade">
                        <img src="../public/images/photo/photo7.jpg" alt="Kegiatan 7" class="w-full h-64 object-cover">
                    </div>
                </div>
                <a class="prev absolute top-1/2 left-0 transform -translate-y-1/2 bg-gray-700 text-white px-4 py-2 cursor-pointer" onclick="plusSlides(-1, 'photo')">&#10094;</a>
                <a class="next absolute top-1/2 right-0 transform -translate-y-1/2 bg-gray-700 text-white px-4 py-2 cursor-pointer" onclick="plusSlides(1, 'photo')">&#10095;</a>
            </div>
        </section>
    </main>

    <!-- Include Footer -->
    <?php include_once('../views/layouts/footer.php'); ?>
    <script src="../public/js/slide.js"></script>
</body>