<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Nokt Tech</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #0f172a, #1e3a8a, #2563eb);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Inter', sans-serif;
        }

        .login-box {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            max-width: 400px;
            width: 100%;
            animation: fadeIn 1s ease;
        }

        .login-box input {
            background-color: rgba(255, 255, 255, 0.7);
            border: none;
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        .login-box input:focus {
            background-color: rgba(255, 255, 255, 1);
            box-shadow: inset 0 4px 8px rgba(0, 0, 0, 0.2);
            outline: none;
        }

        button {
            background-color: #1d4ed8;
            color: white;
            font-weight: bold;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        button:hover {
            background-color: #2563eb;
            transform: translateY(-3px);
            box-shadow: 0 8px 16px rgba(37, 99, 235, 0.3);
        }

        a {
            color: #2563eb;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #1e40af;
        }

        /* Animasi Fade In */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>

    <!-- Konten utama -->
    <main>
        <section class="login-box">
            <h1 class="text-4xl font-bold text-center mb-6 text-gray-900">Login</h1>
            <h2 class="text-2xl font-semibold mb-4 text-gray-800">Selamat Datang Kembali!</h2>
            <form id="loginForm" class="space-y-6">
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
