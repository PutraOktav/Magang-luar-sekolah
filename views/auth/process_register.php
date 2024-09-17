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
        
        // Tentukan direktori upload menggunakan path absolut
        $uploadDir = __DIR__ . '/uploads/';
        
        // Pastikan folder uploads ada, jika tidak maka buat
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }
        
        $destination = $uploadDir . $fileName;

        // Pindahkan file yang diunggah ke folder tujuan
        if (move_uploaded_file($fileTmpPath, $destination)) {
            $fotoDiri = $destination;
        } else {
            echo "Error: Gagal mengunggah file.";
        }
    }

    $bgColor = ($jenisKelamin === 'Laki-laki') ? 'bg-blue-500 text-black' : 'bg-red-500 text-white';

    echo "
    <link href='https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css' rel='stylesheet'>
    <div class='$bgColor p-6 rounded-lg shadow-lg'>
        <h3 class='text-2xl font-semibold mb-4'>$fullName</h3>
        <table class='w-full'>
            <tbody>
                <tr><th class='px-4 py-2 text-left'>Jenis Kelamin</th><td class='px-4 py-2'>: $jenisKelamin</td></tr>
                <tr><th class='px-4 py-2 text-left'>Tempat Lahir</th><td class='px-4 py-2'>: $tempatLahir</td></tr>
                <tr><th class='px-4 py-2 text-left'>Tanggal Lahir</th><td class='px-4 py-2'>: $tanggalLahir</td></tr>
                <tr><th class='px-4 py-2 text-left'>Alamat</th><td class='px-4 py-2'>: $alamat</td></tr>
                <tr><th class='px-4 py-2 text-left'>Email</th><td class='px-4 py-2'>: $email</td></tr>
                <tr><th class='px-4 py-2 text-left'>No HP</th><td class='px-4 py-2'>: $noHp</td></tr>
                <tr><th class='px-4 py-2 text-left'>Hobi</th><td class='px-4 py-2'>: $hobi</td></tr>
            </tbody>
        </table>";
    
    // Tampilkan foto jika berhasil diunggah
     // Tampilkan foto jika berhasil diunggah
     if (isset($fotoDiri)) {
        echo "<img src='" . str_replace($_SERVER['DOCUMENT_ROOT'], '', $fotoDiri) . "' alt='Foto Diri' class='mt-4'>";
    }
    echo "</div>";
}
?>
