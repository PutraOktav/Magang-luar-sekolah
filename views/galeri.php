<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri - Nokt Tech</title>
    <link rel="shortcut icon" href="../public/logo/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Slideshow container */
        .slideshow-container {
            position: relative;
            max-width: 100%;
            margin: auto;
            overflow: hidden;
        }

        /* Hide the slides by default */
        .myVideoSlides, .myPhotoSlides {
            display: none;
            transition: opacity 0.5s ease-in-out;
        }

        /* Slide fade effect */
        .fade {
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        /* On showing the slide */
        .myVideoSlides.show, .myPhotoSlides.show {
            display: block;
            opacity: 1;
        }

        /* Next & previous buttons */
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
            background-color: rgba(0, 0, 0, 0.5);
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800">

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

    <script src="../../public/js/scripts.js"></script>
    <script>
        // Slide Show 
        let videoSlideIndex = 1;
        let photoSlideIndex = 1;
        showSlides(videoSlideIndex, 'video');
        showSlides(photoSlideIndex, 'photo');

        function plusSlides(n, type) {
            if (type === 'video') {
                showSlides(videoSlideIndex += n, 'video');
            } else if (type === 'photo') {
                showSlides(photoSlideIndex += n, 'photo');
            }
        }

        function showSlides(n, type) {
            let i;
            let slides;
            if (type === 'video') {
                slides = document.getElementsByClassName("myVideoSlides");
                if (n > slides.length) {videoSlideIndex = 1}    
                if (n < 1) {videoSlideIndex = slides.length}
            } else if (type === 'photo') {
                slides = document.getElementsByClassName("myPhotoSlides");
                if (n > slides.length) {photoSlideIndex = 1}    
                if (n < 1) {photoSlideIndex = slides.length}
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].classList.remove('show');
                slides[i].style.display = "none";  
            }
            slides[type === 'video' ? videoSlideIndex-1 : photoSlideIndex-1].style.display = "block";  
            slides[type === 'video' ? videoSlideIndex-1 : photoSlideIndex-1].classList.add('show');
        }
    </script>
</body>
</html>