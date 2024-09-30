<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Nokt Tech</title>
    <link rel="shortcut icon" href="../../public/images/logo/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../public/styles/style.css">
</head>

<body id="register-page">
    <main>
        <section id="registerSection" class="bg-white p-6 rounded-lg shadow-lg mt-10 register-box">
            <h2 class="text-3xl font-semibold mb-4">Register</h2>
            <form action="process_register.php" method="POST" enctype="multipart/form-data" class="space-y-6">
                <div>
                    <label for="username" class="block text-gray-700">Username</label>
                    <input type="text" id="username" name="username" class="w-full p-3 rounded-lg" required>
                </div>
                <div>
                    <label for="password" class="block text-gray-700">Password</label>
                    <input type="password" id="password" name="password" class="w-full p-3 rounded-lg" required minlength="8">
                </div>
                <div>
                    <label for="alamat" class="block text-gray-700">Alamat</label>
                    <textarea id="alamat" name="alamat" rows="4" class="w-full p-3 rounded-lg" required></textarea>
                </div>
                <div>
                    <label for="no_telp" class="block text-gray-700">No. Telp</label>
                    <input type="text" id="no_telp" name="no_telp" class="w-full p-3 rounded-lg" required>
                </div>
                <div>
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" id="email" name="email" class="w-full p-3 rounded-lg" required>
                </div>
                <div>
                    <label for="foto" class="block text-gray-700">Foto</label>
                    <input type="file" id="foto" name="foto" class="w-full p-3 rounded-lg" required>
                </div>
                <div>
                    <label for="role" class="block text-gray-700">Role</label>
                    <select id="role" name="role" class="w-full p-3 rounded-lg" required>
                        <option value="">Pilih</option>
                        <option value="1">Admin</option>
                        <option value="2">Pelatih</option>
                        <option value="3">Peserta</option>
                    </select>
                </div>
                <button type="submit" class="w-full py-3 rounded-lg bg-blue-600 hover:bg-blue-700">Simpan</button>
                <p class="text-center">Sudah punya akun? <a href="login.php" class="text-blue-600 font-semibold">Login</a></p>
            </form>
        </section>
    </main>
</body>

</html>