-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 8.0.30 - MySQL Community Server - GPL
-- OS Server:                    Win64
-- HeidiSQL Versi:               12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Membuang struktur basisdata untuk db_lembaga_pelatihan
CREATE DATABASE IF NOT EXISTS `db_lembaga_pelatihan` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_lembaga_pelatihan`;

-- membuang struktur untuk table db_lembaga_pelatihan.agenda
CREATE TABLE IF NOT EXISTS `agenda` (
  `id` int NOT NULL AUTO_INCREMENT,
  `judul_agenda` varchar(255) DEFAULT NULL,
  `tanggal_agenda` date DEFAULT NULL,
  `waktu_agenda` time DEFAULT NULL,
  `lokasi_agenda` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Membuang data untuk tabel db_lembaga_pelatihan.agenda: ~3 rows (lebih kurang)
INSERT INTO `agenda` (`id`, `judul_agenda`, `tanggal_agenda`, `waktu_agenda`, `lokasi_agenda`) VALUES
	(1, 'Web Dev Workshop', '2024-09-24', '09:00:00', 'Main Hall'),
	(2, 'UI/UX Workshop', '2024-09-23', '20:36:51', 'Jakarta Hall'),
	(3, 'Sosial Data Marketing', '2024-09-29', '20:37:17', 'Sleman City Mall');

-- membuang struktur untuk table db_lembaga_pelatihan.berita
CREATE TABLE IF NOT EXISTS `berita` (
  `id` int NOT NULL AUTO_INCREMENT,
  `judul_berita` varchar(255) DEFAULT NULL,
  `isi_berita` text,
  `selengkap` text,
  `tanggal_publikasi` date DEFAULT NULL,
  `foto_berita` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Membuang data untuk tabel db_lembaga_pelatihan.berita: ~9 rows (lebih kurang)
INSERT INTO `berita` (`id`, `judul_berita`, `isi_berita`, `selengkap`, `tanggal_publikasi`, `foto_berita`) VALUES
	(1, 'Peluncuran Produk Terbaru', 'Kami dengan bangga mengumumkan peluncuran produk terbaru kami yang akan merevolusi industri teknologi', 'Peluncuran produk terbaru kami ini dilakukan setelah beberapa bulan kami melakukan riset dan pengembangan produk.', '2024-09-18', 'berita1.jpg'),
	(3, 'Penghargaan Teknologi 2024', 'Jangan lewatkan kesempatan untuk bergabung dengan kami di event teknologi mendatang.', 'Kami akan mengadakan event teknologi yang dihadiri oleh beberapa tokoh teknologi terkemuka di Indonesia.', '2024-09-25', 'berita2.jpg'),
	(4, 'Kerjasama Penghargaan Teknologi 2024', 'Perusahaan kami telah dinominasikan untuk beberapa penghargaan teknologi bergengsi tahun ini.', 'Kami sangat bangga karena telah dinominasikan untuk beberapa penghargaan teknologi bergengsi tahun ini.', '2024-09-25', 'berita3.jpg'),
	(5, 'Kolaborasi dengan Startup Lokal', 'Kami telah bermitra dengan beberapa startup lokal untuk mengembangkan solusi teknologi yang inovatif.', 'Kami sangat bangga karena telah bermitra dengan beberapa startup lokal untuk mengembangkan solusi teknologi yang inovatif.', '2024-09-25', 'berita1.jpg'),
	(6, 'Peluncuran Aplikasi Mobile', 'Kami akan segera meluncurkan aplikasi mobile terbaru kami yang dirancang untuk meningkatkan produktivitas Anda.', 'Kami sangat bangga karena akan segera meluncurkan aplikasi mobile terbaru kami yang dirancang untuk meningkatkan produktivitas Anda.', '2024-09-25', 'berita2.jpg'),
	(7, 'Pengembangan Teknologi AI', 'Teknologi AI kami terus berkembang dan kami siap untuk meluncurkan beberapa fitur baru.', 'Kami sangat bangga karena teknologi AI kami terus berkembang dan kami siap untuk meluncurkan beberapa fitur baru.', '2024-09-25', 'berita3.jpg'),
	(8, 'Acara Pelatihan Online', 'Kami akan mengadakan serangkaian pelatihan online yang mencakup berbagai topik teknologi terkini.', 'Kami sangat bangga karena akan mengadakan serangkaian pelatihan online yang mencakup berbagai topik teknologi terkini.', '2024-09-25', 'berita1.jpg'),
	(9, 'Pembukaan Kantor Baru', 'Kami telah membuka kantor baru di beberapa kota utama untuk memperluas jangkauan layanan kami.', 'Kami sangat bangga karena telah membuka kantor baru di beberapa kota utama untuk memperluas jangkauan layanan kami.', '2024-09-25', 'berita2.jpg'),
	(10, 'Kerjasama Internasional', 'Perusahaan kami telah memulai kerjasama dengan beberapa perusahaan internasional terkemuka.', 'Kami sangat bangga karena telah memulai kerjasama dengan beberapa perusahaan internasional terkemuka.', '2024-09-25', 'berita3.jpg');

-- membuang struktur untuk table db_lembaga_pelatihan.galeri
CREATE TABLE IF NOT EXISTS `galeri` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_galeri` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Membuang data untuk tabel db_lembaga_pelatihan.galeri: ~10 rows (lebih kurang)
INSERT INTO `galeri` (`id`, `nama_galeri`, `category`) VALUES
	(1, 'photo1.jpg', 'foto'),
	(2, 'photo2.jpg', 'foto'),
	(3, 'photo3.jpg', 'foto'),
	(4, 'photo4.jpg', 'foto'),
	(5, 'photo5.jpg', 'foto'),
	(6, 'photo6.jpg', 'foto'),
	(7, 'photo7.jpg', 'foto'),
	(8, 'video1.mp4', 'video'),
	(9, 'video2.mp4', 'video'),
	(10, 'video3.mp4', 'video');

-- membuang struktur untuk table db_lembaga_pelatihan.karir
CREATE TABLE IF NOT EXISTS `karir` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_karir` varchar(50) NOT NULL DEFAULT '',
  `deskripsi_karir` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `selengkapnya` text NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Membuang data untuk tabel db_lembaga_pelatihan.karir: ~3 rows (lebih kurang)
INSERT INTO `karir` (`id`, `nama_karir`, `deskripsi_karir`, `selengkapnya`) VALUES
	(1, 'Software Engineer', 'Kami sedang mencari Software Engineer yang berpengalaman dan memiliki kemampuan yang baik dalam mengembangkan aplikasi web dan mobile.', 'Keterangan lebih lanjut tentang karir ini adalah sebagai berikut: Kami sedang mencari Software Engineer yang berpengalaman dan memiliki kemampuan yang baik dalam mengembangkan aplikasi web dan mobile. Kandidat yang kami cari harus memiliki kemampuan yang baik dalam mengembangkan aplikasi yang scalable, reliable, dan maintainable. Kandidat juga harus memiliki kemampuan yang baik dalam mengkomunikasikan ide-ide dan hasil kerja kepada tim.'),
	(2, 'UI/UX Designer', 'Kami sedang mencari UI/UX Designer yang berpengalaman dan memiliki kemampuan yang baik dalam mendesain antarmuka yang menarik dan mudah digunakan.', 'Keterangan lebih lanjut tentang karir ini adalah sebagai berikut: Kami sedang mencari UI/UX Designer yang berpengalaman dan memiliki kemampuan yang baik dalam mendesain antarmuka yang menarik dan mudah digunakan. Kandidat yang kami cari harus memiliki kemampuan yang baik dalam mendesain antarmuka yang scalable, reliable, dan maintainable. Kandidat juga harus memiliki kemampuan yang baik dalam mengkomunikasikan ide-ide dan hasil kerja kepada tim.'),
	(3, 'IT Support', 'Kami sedang mencari IT Support yang berpengalaman dan memiliki kemampuan yang baik dalam memberikan dukungan teknis kepada pelanggan.', 'Keterangan lebih lanjut tentang karir ini adalah sebagai berikut: Kami sedang mencari IT Support yang berpengalaman dan memiliki kemampuan yang baik dalam memberikan dukungan teknis kepada pelanggan. Kandidat yang kami cari harus memiliki kemampuan yang baik dalam memberikan dukungan teknis kepada pelanggan. Kandidat juga harus memiliki kemampuan yang baik dalam mengkomunikasikan ide-ide dan hasil kerja kepada tim.');

-- membuang struktur untuk table db_lembaga_pelatihan.nilai
CREATE TABLE IF NOT EXISTS `nilai` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_peserta` int DEFAULT NULL,
  `id_program` int DEFAULT NULL,
  `nilai_ujian` int DEFAULT NULL,
  `nilai_tugas` int DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `id_peserta` (`id_peserta`),
  KEY `id_program` (`id_program`),
  CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`id_peserta`) REFERENCES `users` (`id`),
  CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`id_program`) REFERENCES `program` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Membuang data untuk tabel db_lembaga_pelatihan.nilai: ~3 rows (lebih kurang)
INSERT INTO `nilai` (`id`, `id_peserta`, `id_program`, `nilai_ujian`, `nilai_tugas`) VALUES
	(1, 1, 1, 85, 90),
	(2, 2, 3, 55, 22),
	(3, 1, 3, 44, 99);

-- membuang struktur untuk table db_lembaga_pelatihan.program
CREATE TABLE IF NOT EXISTS `program` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_program` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `jadwal` text,
  `biaya` int DEFAULT NULL,
  `materi` text,
  `foto` varchar(50) DEFAULT NULL,
  `id_pelatih` int DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `fk_program_pelatih` (`id_pelatih`),
  CONSTRAINT `fk_program_pelatih` FOREIGN KEY (`id_pelatih`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Membuang data untuk tabel db_lembaga_pelatihan.program: ~3 rows (lebih kurang)
INSERT INTO `program` (`id`, `nama_program`, `deskripsi`, `jadwal`, `biaya`, `materi`, `foto`, `id_pelatih`) VALUES
	(1, 'Pengembangan Perangkat Lunak', 'Pelatihan ini dirancang untuk mengajarkan Anda cara mengembangkan perangkat lunak yang efisien dan scalable.', 'Setiap Senin & Rabu, 18:00 - 20:00', 5000000, 'Pengenalan Pemrograman, Pengembangan Web dan Mobile, Manajemen Proyek Perangkat Lunak  ', 'program1.jpg', 1),
	(2, 'Sistem Informasi Terintegrasi', 'Pelatihan ini mencakup desain dan implementasi sistem informasi yang dapat meningkatkan efisiensi bisnis Anda.', 'Setiap Selasa & Kamis, 18:00 - 20:00', 400000000, 'Pemodelan Data, Integrasi Sistem, Keamanan Sistem Informasi ', 'program2.jpg', 3),
	(3, 'Konsultasi Teknologi', 'Pelajari bagaimana merancang strategi teknologi yang efektif untuk bisnis Anda dengan para ahli kami.', 'Setiap Jumat, 18:00 - 20:00', 6000000, 'Analisis Kebutuhan Teknologi, Strategi Implementasi Teknologi, Evaluasi dan Pemeliharaan', 'program3.jpg', 2);

-- membuang struktur untuk table db_lembaga_pelatihan.program_user
CREATE TABLE IF NOT EXISTS `program_user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_user` int NOT NULL,
  `id_program` int NOT NULL,
  `role` enum('2','3') NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `id_user` (`id_user`),
  KEY `id_program` (`id_program`),
  CONSTRAINT `fk_program_user_program` FOREIGN KEY (`id_program`) REFERENCES `program` (`id`),
  CONSTRAINT `fk_program_user_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Membuang data untuk tabel db_lembaga_pelatihan.program_user: ~3 rows (lebih kurang)
INSERT INTO `program_user` (`id`, `id_user`, `id_program`, `role`) VALUES
	(1, 3, 3, '3'),
	(2, 3, 2, '3'),
	(3, 2, 1, '2');

-- membuang struktur untuk table db_lembaga_pelatihan.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` enum('1','2','3') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `role_name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Membuang data untuk tabel db_lembaga_pelatihan.roles: ~3 rows (lebih kurang)
INSERT INTO `roles` (`id`, `role_name`) VALUES
	('1', 'Admin'),
	('2', 'Pelatih'),
	('3', 'Peserta');

-- membuang struktur untuk table db_lembaga_pelatihan.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `alamat` text,
  `no_telp` varchar(15) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `role` enum('1','2','3') DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_role_fk` (`role`),
  CONSTRAINT `user_role_fk` FOREIGN KEY (`role`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Membuang data untuk tabel db_lembaga_pelatihan.users: ~8 rows (lebih kurang)
INSERT INTO `users` (`id`, `username`, `password`, `alamat`, `no_telp`, `email`, `foto`, `role`) VALUES
	(1, 'Oktavv', '90da9876474dc0f3783baa0d3bc79fcfbb660dee7bdbfdfac193a07e813a2d33', 'Jl.  No.1', '0811111', 'oktav@nokt.tech', 'oktav.jpeg', '2'),
	(2, 'Winly', '90da9876474dc0f3783baa0d3bc79fcfbb660dee7bdbfdfac193a07e813a2d33', 'Jl. No.2', '0822222', 'winly@nokt.tech', 'winly.jpg', '2'),
	(3, 'Putra', '90da9876474dc0f3783baa0d3bc79fcfbb660dee7bdbfdfac193a07e813a2d33', 'Jl. No.3', '0833333', 'putra@nokt.tech', 'putra.jpg', '2'),
	(4, 'Vatko', '240be518fabd2724ddb6f04eeb1da5967448d7e831c08c8fa822809f74c720a9', 'Jl. No.4', '0844444', 'vatko@nokt.tech', 'vatko.jpeg', '1'),
	(5, 'Ylniw', 'b1d0478adc310cdc9ee7ed33b201677e5fd3cd3d10eb10e5086472b2248f00c5', 'Jl. No.5', '0855555', 'ylniw@nokt.tech', 'ylniw.jpg', '3'),
	(6, 'Artup', 'b1d0478adc310cdc9ee7ed33b201677e5fd3cd3d10eb10e5086472b2248f00c5', 'Jl. No.6', '0866666', 'artup@nokt.tech', 'artup.jpg', '3'),
	(17, 'admin', '$2y$10$KIjaJypzsfgR3Hk15OtqOeEeF0r5fMFEWd0Zw0xN.s75grKAaV1fW', 'admin', '123', 'admin@gmail.com', './uploads/wallpaperflare.com_wallpaper.jpg', '1');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
