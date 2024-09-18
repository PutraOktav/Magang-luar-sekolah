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

        <?php
        include_once('../config/conn.php');

        $sql = "SELECT * FROM galeri";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<section class="mb-16">';
            echo '<div class="relative slideshow-container">';

            $counter = 0;

            while ($row = $result->fetch_assoc()) {
                $counter++; // Counter untuk membuat setiap slide unik

                // Membuat div untuk setiap gambar
                echo '<div class="myPhotoSlides fade" style="display: ' . ($counter === 1 ? 'block' : 'none') . ';">';
                echo '<img src="../public/images/photo/' . $row['nama_gambar'] . '" alt="' . $row['nama_gambar'] . '" class="w-full h-64 object-cover rounded-lg shadow-lg">';
                echo '</div>';
            }

            echo '<a class="prev absolute top-1/2 left-0 transform -translate-y-1/2 bg-gray-700 text-white px-4 py-2 cursor-pointer" onclick="plusSlides(-1)">&#10094;</a>';
            echo '<a class="next absolute top-1/2 right-0 transform -translate-y-1/2 bg-gray-700 text-white px-4 py-2 cursor-pointer" onclick="plusSlides(1)">&#10095;</a>';

            echo '</div>';
            echo '</section>';
        } else {
            echo '<p class="text-gray-700">Tidak ada gambar yang tersedia saat ini.</p>';
        }
        ?>

        <section class="mb-16">
            <div class="relative">
                <div class="slideshow-container">
                    <div class="myVideoSlides fade show">
                        <video class="w-full h-64 object-cover" controls autoplay muted loop>
                            <source src="../public/videos/video1.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </section>



    </main>

    <!-- Include Footer -->
    <?php include_once('../views/layouts/footer.php'); ?>

    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function showSlides(n) {
            let slides = document.getElementsByClassName("myPhotoSlides");

            if (n > slides.length) {
                slideIndex = 1;
            }
            if (n < 1) {
                slideIndex = slides.length;
            }

            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }

            slides[slideIndex - 1].style.display = "block";
        }
    </script>
</body>