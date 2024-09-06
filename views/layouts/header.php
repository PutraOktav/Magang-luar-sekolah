<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header - Nokt Tech</title>
    <link rel="shortcut icon" href="../public/images/logo/logo.png" type="image/x-icon">
    
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #0f172a, #1e3a8a, #2563eb);
            height: 100vh;
        }
        .news {
            height: 200vh;
        }
      </style>
</head>
<body>
    <header class="bg-gradient-to-r from-black via-[#1e3a8a] to-[#2563eb] text-white">
        <nav class="container mx-auto flex justify-between items-center p-4">
            <!-- Logo / Brand -->
            <a href="../views/index.php" class="flex items-center">
                <img src="../public/images/logo/logo.png" alt="Logo Nokt Tech" class="h-8 w-auto">
                <span class="text-2xl font-bold ml-2">Nokt Tech</span>
            </a>
            
            <!-- Navbar Links -->
            <div class="hidden md:flex space-x-6">
                <a href="../views/index.php" class="hover:underline">Home</a>
                <a href="../views/profil.php" class="hover:underline">Profil</a>
                <a href="../views/karir.php" class="hover:underline">Karir</a>
                <a href="../views/program.php" class="hover:underline">Program</a>
                <a href="../views/informasi.php" class="hover:underline">Informasi</a>
                <a href="../views/berita.php" class="hover:underline">Berita</a>
                <a href="../views/galeri.php" class="hover:underline">Galeri</a>
                <a href="../views/kontak.php" class="hover:underline">Kontak</a>
            </div>

            <!-- Search Box -->
            <form class="hidden md:flex items-center bg-white rounded-full px-3 py-2 shadow-md" action="" method="GET">
                <label for="search" class="sr-only">Cari</label>
                <input type="text" name="search" id="search" class="w-full px-4 py-2 border-none outline-none" placeholder="Cari konten" />
                <button type="submit" class="bg-blue-600 px-4 py-2 rounded-full text-white hover:bg-blue-700 transition duration-300">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </button>
            </form>
            
            <!-- Authentication Links -->
            <div id="authLinks" class="space-x-4">
                <a href="../views/auth/login.php" class="bg-white text-blue-600 px-4 py-2 rounded-md hover:bg-gray-200">Login</a>
                <a href="../views/auth/register.php" class="bg-white text-blue-600 px-4 py-2 rounded-md hover:bg-gray-200">Register</a>
            </div>
        </nav>
    </header>
</body>
</html>
