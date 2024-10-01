# Version
Project Magang Luar Sekolah (PBI) <br>
Hosting ( https://magang.nokt.tech ) <br>
nokt.tech ( https://github.com/PutraOktav )

# Project Name

Welcome to the Project Name repository! This project is structured into different weeks, each focusing on a specific aspect of web development. Below you'll find details about each week's focus and the technologies used.

## Table of Contents

- [Week 1 - HTML]
- [Week 2 - Add CSS]
- [Week 3 - Add JavaScript]
- [Week 4 - Make Web Lembaga Sederhana]
- [Week 5 - Add PHP] [ Logout Button Belum Jadi ]
- [Week 6 - mysql]
- [Week 7 - Integrasi]



## Detail 

- [Week 1]
    Detail Tugas:
    1.  Buatlah tampilan sederhana Landing Page Website Lembaga Pelatihan yang terdiri dari:
        Profil Lembaga Pendidikan
        Program Pelatihan
        Informasi Pelatihan
        Berita dan Artikel
        Galeri Foto dan Video
        Kontak
    2.  Gunakan beberapa tools HTML yang telah dipelajari
    3.  Cukup menggunakan tools HTML tanpa menggunakan tools CSS
    4.  Kemudian simpan project degan nama BATCH4_WEB_DEVELOPER_TM1_NAMA.zip
    5.  Upload ke Google Drive masing-masing dan masukkan link tugas pada Magang+
    Poin yang dinilai:
    Pengunaan tools HTML
    Variasi tools HTML yang digunakan
    Kerapihan tampilan biodata diri
    Tools:
    Text Editor (Visual Studio Code, Sublime Text, Notepad, dll)

- [Week 2]
    Detail Tugas:
    Tambahkan style css tugas yang telah dikerjakan di minggu 1
    Tambahkan halaman formulir HTML Login dan Register untuk website Lembaga Pelatihan dengan desain yang menarik dan mengatur elemen-elemen input, tombol dan label dengan menggunakan CSS.
    Implementasikan beberapa tools CSS yang telah dipelajari.
    Kemudian simpan project degan nama BATCH4_WEB_DEVELOPER_TM2_NAMA.zip
    Upload ke Google Drive masing-masing dan masukkan link tugas pada Magang+
    Poin yang dinilai:
    Penguunaan tools CSS
    Variasi tools CSS yang digunakan
    Visualisasi formulir yang dibuat
    Tools:
    Text Editor (Visual Studio Code, Sublime Text, Notepad, dll)

- [Week 3]
    Detail Tugas:
    Buatlah validasi input form Login dan Register yang telah dibuat pada minggu 2 dengan menggunakan javascript
    Membuat slideshow foto dan video pada section Galeri Foto dan Video yang telah dikerjakan pada minggu sebelumnya
    Memfilter berita dan artikel berdasarkan kategori pada section Berita dan Artikel
    Kemudian simpan project degan nama BATCH4_WEB_DEVELOPER_TM3_NAMA.zip
    Upload ke Google Drive masing-masing dan masukkan link tugas pada Magang+
    Poin yang dinilai:
    Penguunaan tools Javascript
    Logic yang dibuat
    Hasil perhitungan
    Tools:
    Text Editor (Visual Studio Code, Sublime Text, Notepad, dll)

- [Week 4]
    Detail Tugas:
    1.  Kembangkan tugas sebelumnya dengan menambahkan beberapa komponen berikut:
        Header (berisi logo lembaga pendidikan, menu navigasi, kotak pencarian dan informasi akun pengguna)
        Kembangkan menu Program Pelatihan dengan menambahkan program pelatihan yang ditawarkan, termasuk kurikulum, jadwal, informasi tenaga pelatih, biaya dan lain sebagainya
        Akun Sosial Media
        Footer
        Tambahkan 1 menu atau 1 landing page (bebas) yang berkaitan dengan lembaga pelatihan sesuai dengan kreativitas masing-masing
    2.  Implementasikan tools HTML, CSS dan Javascript yang telah dipelajari.
    3.  Kemudian simpan project degan nama BATCH4_WEB_DEVELOPER_TM4_NAMA.zip
    4.  Upload ke Google Drive masing-masing dan masukkan link tugas pada Magang+
    Poin yang dinilai:
    Penguunaan tools HTML, CSS dan Javascript
    Hasil website yang dibuat
    Tools:
    Text Editor (Visual Studio Code, Sublime Text, Notepad, dll)

- [Week 5]
    Detail Tugas:
    1.  Buatlah program Formulir Registrasi dengan menggunakan bahasa pemrograman PHP.
    2.  Formulir Registrasi tersebut berjumlah 2 bagian, yaitu bagian input(formulir pengisian) dan bagian output(hasil dari pengisian).
    3.  Pada bagian input, user mengisi data nama lengkap, jenis kelamin, tempat tgl lahir, alamat, email, no hp, hobi, upload foto diri dan data lainnya yang diperlukan
    4.  Tambah 1 tombol untuk menyimpan data yang sudah diinputkan.
    5.  Jika ada data yang tidak terisi ketika tombol simpan diklik, maka program menampilkan alert warning.
    6.  Jika data yang diinput sudah lengkap maka program akan menampilkan:
        Kartu hasil registrasi (dibuat mirip seperti KTP)
        Jika jenis kelamin yang diinput laki-laki, maka background color kartu berwarna biru dengan font berwarna hitam.
        Dan jika jenis kelamin yang diinput perempuan, maka background color kartu berwarna merah dengan font berwarna putih.
    7.  Implementasikan tools HTML, CSS dan Javascript yang telah dipelajari.
    8.  Kemudian simpan project degan nama BATCH4_WEB_DEVELOPER_TM5_NAMA.zip
    9.  Upload ke Google Drive masing-masing dan masukkan link tugas pada magang+
    Tools:
    Text Editor (Visual Studio Code, Sublime Text, Notepad, dll)

-  [Week 6]
    Detail Tugas:
    1. Buatlah database MySQL untuk website lembaga pelatihan dengan nama db_lembaga_pelatihan yang dapat menyimpan data peserta, tenaga pelatih, program pelatihan, nilai, berita, agenda
    2. Buatlah tabel user
        id (INT, PRIMARY KEY, AUTO_INCREMENT)
        nama (VARCHAR(255))
        alamat (TEXT)
        no_telp (VARCHAR(15))
        email (VARCHAR(255))
        foto (VARCHAR(255))
        role (ENUM ('1', '2', '3')) // 1:admin, 2:peserta, 3:tenaga pelatih
    2. Buatlah tabel program
        id_program (INT, PRIMARY KEY, AUTO_INCREMENT)
        nama_program (VARCHAR(255))
        deskripsi (TEXT)
        jadwal (TEXT)
        biaya (INT)
        materi (TEXT)
    3. Buatlah tabel nilai
        id_nilai (INT, PRIMARY KEY, AUTO_INCREMENT)
        id_peserta (INT)
        id_program (INT)
        nilai_ujian (INT)
        nilai_tugas (INT)
    4. Buatlah tabel berita
        id_berita (INT, PRIMARY KEY, AUTO_INCREMENT)
        judul_berita (VARCHAR(255))
        isi_berita (TEXT)
        tanggal_publikasi (DATE)
        foto_berita (VARCHAR(255))
    5. Buatlah tabel agenda
        id_agenda (INT, PRIMARY KEY, AUTO_INCREMENT)
        judul_agenda (VARCHAR(255))
        tanggal_agenda (DATE)
        waktu_agenda (TIME)
        lokasi_agenda (VARCHAR(255))
    6. Buatlah hubungan antar tabel dengan foreign key.
    7. Masukkan beberapa data contoh ke dalam setiap tabel.
    8. Buatlah beberapa query SQL untuk:
        Menampilkan daftar peserta beserta program pelatihannya.
        Menampilkan daftar pelatih beserta program pelatihan yang diajar.
        Menampilkan nilai rata-rata setiap peserta.
        Menampilkan pengumuman terbaru.
        Menampilkan berita berdasarkan kategori.
        Menampilkan agenda yang akan datang.
    9. Simpan tugas degan nama BATCH4_WEB_DEVELOPER_TM6_NAMA.zip dengan isi (db_lembaga_pelatihan.sql & query.docs)
    10. Upload ke Google Drive masing-masing dan masukkan link tugas pada Magang
        Tools:
        MySQL

-   [Week 7]
    Detail Tugas:
    Buatlah database (tambah tabel sesuai kebutuhan) sesuai dengan project Lembaga Pelatihan yang sudah dibuat pada minggu sebelumnya
    Kemudian integrasikan antara database yang sudah dibuat dengan project.
    Jika sudah terintegrasi buat fitur login (input username/email dan password) untuk mengakses website.
    Kemudian simpan project degan nama BATCH4_WEB_DEVELOPER_TM7_NAMA.zip termasuk di dalamnya file database (.sql)
    Upload ke Google Drive masing-masing dan masukkan link tugas pada Magang+
    Tools:
    Text Editor (Visual Studio Code, Sublime Text, Notepad, dll), MySQL, XAMPP Control Panel
