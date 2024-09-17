<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Nokt Tech</title>
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

        .register-box {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            max-width: 500px;
            width: 100%;
            animation: fadeIn 1s ease;
        }

        .register-box input {
            background-color: rgba(255, 255, 255, 0.7);
            border: none;
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        .register-box input:focus {
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

<main>
    <section id="registerSection" class="bg-white p-6 rounded-lg shadow-lg mt-10 register-box">
        <h2 class="text-3xl font-semibold mb-4">Data Diri</h2>
        <form action="process_register.php" method="POST" enctype="multipart/form-data" class="space-y-6">
            <div>
                <label for="fullName" class="block text-gray-700">Nama Lengkap</label>
                <input type="text" id="fullName" name="fullName" class="w-full p-3 rounded-lg" required>
            </div>
            <div>
                <label for="jenisKelamin" class="block text-gray-700">Jenis Kelamin</label>
                <select id="jenisKelamin" name="jenisKelamin" class="w-full p-3 rounded-lg" required>
                    <option value="">Pilih</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div>
                <label for="tempatLahir" class="block text-gray-700">Tempat Lahir</label>
                <input type="text" id="tempatLahir" name="tempatLahir" class="w-full p-3 rounded-lg" required>
            </div>
            <div>
                <label for="tanggalLahir" class="block text-gray-700">Tanggal Lahir</label>
                <input type="date" id="tanggalLahir" name="tanggalLahir" class="w-full p-3 rounded-lg" required>
            </div>
            <div>
                <label for="alamat" class="block text-gray-700">Alamat</label>
                <textarea id="alamat" name="alamat" rows="4" class="w-full p-3 rounded-lg" required></textarea>
            </div>
            <div>
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" id="email" name="email" class="w-full p-3 rounded-lg" required>
            </div>
            <div>
                <label for="noHp" class="block text-gray-700">No HP</label>
                <input type="text" id="noHp" name="noHp" class="w-full p-3 rounded-lg" required>
            </div>
            <div>
                <label for="hobi" class="block text-gray-700">Hobi</label>
                <input type="text" id="hobi" name="hobi" class="w-full p-3 rounded-lg" required>
            </div>
            <div>
                <label for="fotoDiri" class="block text-gray-700">Upload Foto Diri</label>
                <input type="file" id="fotoDiri" name="fotoDiri" class="w-full p-3 rounded-lg" required>
            </div>
            <button type="submit" class="w-full py-3 rounded-lg bg-blue-600 hover:bg-blue-700">Simpan</button>
            <p class="text-center">Sudah punya akun? <a href="login.php" class="text-blue-600 font-semibold">Login</a></p>
        </form>
    </section>
</main>
</body>
</html>
