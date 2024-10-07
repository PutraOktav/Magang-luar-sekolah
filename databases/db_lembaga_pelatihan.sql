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
CREATE DATABASE IF NOT EXISTS `db_lembaga_pelatihan` /*!40100 DEFAULT CHARACTER SET utf16 COLLATE utf16_bin */ /*!80016 DEFAULT ENCRYPTION='N' */;
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

-- Pengeluaran data tidak dipilih.

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

-- Pengeluaran data tidak dipilih.

-- membuang struktur untuk table db_lembaga_pelatihan.galeri
CREATE TABLE IF NOT EXISTS `galeri` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_galeri` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Pengeluaran data tidak dipilih.

-- membuang struktur untuk table db_lembaga_pelatihan.karir
CREATE TABLE IF NOT EXISTS `karir` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_karir` varchar(50) NOT NULL DEFAULT '',
  `deskripsi_karir` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `selengkapnya` text NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Pengeluaran data tidak dipilih.

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

-- Pengeluaran data tidak dipilih.

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

-- Pengeluaran data tidak dipilih.

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

-- Pengeluaran data tidak dipilih.

-- membuang struktur untuk table db_lembaga_pelatihan.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` enum('1','2','3') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `role_name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Pengeluaran data tidak dipilih.

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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Pengeluaran data tidak dipilih.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
