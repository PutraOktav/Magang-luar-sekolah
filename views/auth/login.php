<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Nokt Tech</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../public/styles/style.css">
</head>

<body id="login-page">

    <!-- Konten utama -->
    <main>
        <section class="login-box">
            <h1 class="text-4xl font-bold text-center mb-6 text-gray-900">Login</h1>
            <h2 class="text-2xl font-semibold mb-4 text-gray-800">Selamat Datang Kembali!</h2>
            <form id="loginForm" class="space-y-6" action="process_login.php" method="POST">
                <div>
                    <label for="username" class="block text-gray-700">Username</label>
                    <input type="text" id="username" name="username" class="w-full p-3 rounded-lg" required>
                </div>
                <div>
                    <label for="password" class="block text-gray-700">Password</label>
                    <input type="password" id="password" name="password" class="w-full p-3 rounded-lg" required>
                </div>
                <button type="submit" class="w-full py-3 rounded-lg bg-blue-600 hover:bg-blue-700">Login</button>
                <p class="text-center text-gray-600 mt-4">Belum punya akun? <a href="register.php" class="hover:underline">Daftar disini</a></p>
            </form>

        </section>
    </main>

    <script src="../../public/js/scripts.js"></script>
</body>

</html>