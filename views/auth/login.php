<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Nokt Tech</title>
    <link rel="shortcut icon" href="../../public/images/logo/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../public/styles/style.css">
</head>

<body id="login-page" class="bg-gray-100">
    <main class="flex items-center justify-center min-h-screen">
        <section class="login-box mx-auto p-8 bg-white shadow-xl rounded-lg max-w-md">
            <h1 class="text-4xl font-bold text-center mb-6 text-gray-900">Login</h1>
            <h2 class="text-xl font-medium mb-6 text-center text-gray-700">Selamat Datang Kembali!</h2>

            <!-- Tampilkan pesan error jika ada -->
            <?php if (isset($_GET['error'])): ?>
                <p class="text-red-600 text-center mb-4"><?php echo htmlspecialchars($_GET['error']); ?></p>
            <?php endif; ?>

            <!-- Form Login -->
            <form id="loginForm" class="space-y-6" action="process_login.php" method="POST">
                <div>
                    <label for="username" class="block text-gray-600 font-medium">Username</label>
                    <input type="text" id="username" name="username" class="w-full p-3 rounded-lg border border-gray-300 focus:ring focus:ring-blue-200" required>
                </div>
                <div>
                    <label for="password" class="block text-gray-600 font-medium">Password (minimal 8 karakter)</label>
                    <input type="password" id="password" name="password" class="w-full p-3 rounded-lg border border-gray-300 focus:ring focus:ring-blue-200" required minlength="8">
                    <span id="togglePassword" class="text-gray-600 font-medium ml-2 cursor-pointer" onclick="togglePasswordVisibility()">Lihat Password</span>
                </div>

                <button type="submit" class="w-full py-3 rounded-lg bg-blue-600 hover:bg-blue-700 text-white font-semibold transition duration-300">Login</button>
                <p class="text-center text-gray-600 mt-4">Belum punya akun? <a href="register.php" class="text-blue-600 hover:underline">Daftar disini</a></p>
            </form>
        </section>
    </main>

    <script src="../../public/js/scripts.js"></script>
</body>

</html>
