<!-- galeri.php -->
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
        $sql = "SELECT * FROM galeri where category = 'foto'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<section class="mb-16">';
            echo '<div class="relative slideshow-container">';

            $counter = 0;

            while ($row = $result->fetch_assoc()) {
                $counter++; 
                
                echo '<div class="myPhotoSlides fade" style="display: ' . ($counter === 1 ? 'block' : 'none') . ';">';
                echo '<img src="../public/images/photo/' . $row['nama_galeri'] . '" alt="' . $row['nama_galeri'] . '" class="w-full h-64 object-cover rounded-lg shadow-lg">';
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

        <?php

        $sql2 = "SELECT * FROM galeri where category = 'video'";
        $result2 = $conn->query($sql2);

        if ($result2->num_rows > 0) {
            echo '<section class="mb-16">';
            echo '<div class="relative slideshow-container">';

            $counter = 0;

            while ($row2 = $result2->fetch_assoc()) {
                $counter++; 

                echo '<div class="myVideoSlides fade" style="display: ' . ($counter === 1 ? 'block' : 'none') . ';">';
                echo '<video src="../public/videos/' . $row2['nama_galeri'] . '" alt="' . $row2['nama_galeri'] . '" class="w-full h-64 object-cover" controls autoplay muted loop>';
                echo '</div>';
            }

            echo '<a class="prev absolute top-1/2 left-0 transform -translate-y-1/2 bg-gray-700 text-white px-4 py-2 cursor-pointer" onclick="plusSlides2(-1)">&#10094;</a>';
            echo '<a class="next absolute top-1/2 right-0 transform -translate-y-1/2 bg-gray-700 text-white px-4 py-2 cursor-pointer" onclick="plusSlides2(1)">&#10095;</a>';

            echo '</div>';
            echo '</section>';
        } else {
            echo '<p class="text-gray-700">Tidak ada video yang tersedia saat ini.</p>';
        }
        ?>


    </main>

    <!-- Include Footer -->
    <?php include_once('../views/layouts/footer.php'); ?>
    <script src="../public/js/slides.js"></script>
</body>