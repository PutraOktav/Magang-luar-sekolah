<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST['fullName'];
    $jenisKelamin = $_POST['jenisKelamin'];
    $tempatLahir = $_POST['tempatLahir'];
    $tanggalLahir = $_POST['tanggalLahir'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $noHp = $_POST['noHp'];
    $hobi = $_POST['hobi'];

    // Proses upload foto
    if (isset($_FILES['fotoDiri']) && $_FILES['fotoDiri']['error'] == 0) {
        $fileTmpPath = $_FILES['fotoDiri']['tmp_name'];
        $fileName = $_FILES['fotoDiri']['name'];
        
        // Tentukan direktori upload
        $uploadDir = __DIR__ . '/uploads/';
        
        // Pastikan folder 'uploads/' ada
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        $destination = $uploadDir . $fileName;

        // Pindahkan file yang diunggah ke folder tujuan
        if (move_uploaded_file($fileTmpPath, $destination)) {
            // Gunakan URL HTTP untuk mengakses file
            $fotoDiri = './uploads/' . $fileName;
        } else {
            echo "Error: Gagal mengunggah file.";
        }
    }

    $bgColor = ($jenisKelamin === 'Laki-laki') ? 'bg-blue-500 text-black' : 'bg-red-500 text-white';

    echo "
    <div class='max-w-md mx-auto $bgColor p-6 rounded-lg shadow-lg'>
        <div class='flex justify-center mb-4'>
            <img src='$fotoDiri' alt='Foto Diri' class='w-24 h-24 rounded-full'>
        </div>
        <h3 class='text-xl font-semibold text-center mb-4'>$fullName</h3>
        <table class='w-full text-sm'>
            <tbody>
                <tr><th class='px-2 py-1 text-left'>Jenis Kelamin</th><td class='px-2 py-1'>: $jenisKelamin</td></tr>
                <tr><th class='px-2 py-1 text-left'>Tempat Lahir</th><td class='px-2 py-1'>: $tempatLahir</td></tr>
                <tr><th class='px-2 py-1 text-left'>Tanggal Lahir</th><td class='px-2 py-1'>: $tanggalLahir</td></tr>
                <tr><th class='px-2 py-1 text-left'>Alamat</th><td class='px-2 py-1'>: $alamat</td></tr>
                <tr><th class='px-2 py-1 text-left'>Email</th><td class='px-2 py-1'>: $email</td></tr>
                <tr><th class='px-2 py-1 text-left'>No HP</th><td class='px-2 py-1'>: $noHp</td></tr>
                <tr><th class='px-2 py-1 text-left'>Hobi</th><td class='px-2 py-1'>: $hobi</td></tr>
            </tbody>
        </table>
    </div>";
}
?>

<!-- Muat Tailwind CSS -->
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">