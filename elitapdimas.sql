-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table elitapdimas.contributors
CREATE TABLE IF NOT EXISTS `contributors` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `proposal_id` bigint unsigned NOT NULL,
  `nama_depan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_belakang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nidn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google_scholar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `contributors_proposal_id_foreign` (`proposal_id`),
  CONSTRAINT `contributors_proposal_id_foreign` FOREIGN KEY (`proposal_id`) REFERENCES `proposals` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table elitapdimas.contributors: ~0 rows (approximately)
INSERT INTO `contributors` (`id`, `proposal_id`, `nama_depan`, `nama_belakang`, `email`, `nidn`, `prodi`, `google_scholar`, `role`, `created_at`, `updated_at`) VALUES
	(2, 1, 'coba1', 'coba1', 'coba1@gmail.com', '111111', 'coba1', NULL, 'author', '2025-08-21 20:27:20', '2025-08-21 20:27:20');

-- Dumping structure for table elitapdimas.contributorsx
CREATE TABLE IF NOT EXISTS `contributorsx` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `proposal_id` bigint unsigned NOT NULL,
  `nama_depan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_belakang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nidn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google_scholar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `contributorsx_proposal_id_foreign` (`proposal_id`),
  CONSTRAINT `contributorsx_proposal_id_foreign` FOREIGN KEY (`proposal_id`) REFERENCES `proposalsx` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table elitapdimas.contributorsx: ~2 rows (approximately)
INSERT INTO `contributorsx` (`id`, `proposal_id`, `nama_depan`, `nama_belakang`, `email`, `nidn`, `prodi`, `google_scholar`, `role`, `created_at`, `updated_at`) VALUES
	(1, 1, 'coba1', 'coba1', 'coba1@gmail.com', '111111', 'coba1', NULL, 'author', '2025-08-21 18:41:09', '2025-08-21 18:41:09'),
	(2, 1, 'coba1111', 'coba1111', 'coba3@gmail.com', '1111111111', 'coba', 'https://youtu.be/1-1TGNmQqZA?si=lNSH5NZqzDuys8Wc', 'author', '2025-08-21 18:41:09', '2025-08-21 18:41:09');

-- Dumping structure for table elitapdimas.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table elitapdimas.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table elitapdimas.jenis_penelitians
CREATE TABLE IF NOT EXISTS `jenis_penelitians` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama_jenis_penelitian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table elitapdimas.jenis_penelitians: ~2 rows (approximately)
INSERT INTO `jenis_penelitians` (`id`, `nama_jenis_penelitian`, `created_at`, `updated_at`) VALUES
	(1, 'Individu', '2025-08-21 18:35:50', '2025-08-21 18:35:50'),
	(2, 'Gabungan', '2025-08-21 18:35:54', '2025-08-21 18:35:54');

-- Dumping structure for table elitapdimas.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table elitapdimas.migrations: ~0 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2025_07_29_043400_create_temas_table', 1),
	(6, '2025_07_29_043930_create_jenis_penelitians_table', 1),
	(7, '2025_07_29_045627_create_sumbers_table', 1),
	(8, '2025_07_30_010152_create_pembiayaans_table', 1),
	(9, '2025_07_30_021248_create_nominals_table', 1),
	(10, '2025_07_31_013640_create_proposals_table', 1),
	(11, '2025_07_31_013737_create_contributors_table', 1),
	(12, '2025_07_31_013806_create_proposal_comments_table', 1),
	(13, '2025_08_04_011108_create_proposalsx_table', 1),
	(14, '2025_08_04_021448_create_contributorsx_table', 1),
	(15, '2025_08_06_061843_create_nominalsx_table', 1),
	(16, '2025_08_11_070335_create_proposal_commentsx_table', 1);

-- Dumping structure for table elitapdimas.nominals
CREATE TABLE IF NOT EXISTS `nominals` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `pembiayaan_id` bigint unsigned NOT NULL,
  `total_nominal` bigint NOT NULL,
  `nominal_awal` bigint NOT NULL,
  `nominal_akhir` bigint NOT NULL,
  `status` enum('Belum Cair','Sebagian Cair','Sudah Cair') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Belum Cair',
  `komentar` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nominals_pembiayaan_id_foreign` (`pembiayaan_id`),
  CONSTRAINT `nominals_pembiayaan_id_foreign` FOREIGN KEY (`pembiayaan_id`) REFERENCES `pembiayaans` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table elitapdimas.nominals: ~0 rows (approximately)
INSERT INTO `nominals` (`id`, `pembiayaan_id`, `total_nominal`, `nominal_awal`, `nominal_akhir`, `status`, `komentar`, `created_at`, `updated_at`) VALUES
	(1, 1, 200, 200, 0, 'Belum Cair', NULL, '2025-08-21 18:37:50', '2025-08-21 18:37:50');

-- Dumping structure for table elitapdimas.nominalsx
CREATE TABLE IF NOT EXISTS `nominalsx` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `proposal_id` bigint unsigned NOT NULL,
  `sumber_id` bigint unsigned NOT NULL,
  `jenis_penelitian_id` bigint unsigned NOT NULL,
  `nominal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Proses Pencairan','Pencairan Selesai') COLLATE utf8mb4_unicode_ci NOT NULL,
  `komentar` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nominalsx_proposal_id_foreign` (`proposal_id`),
  KEY `nominalsx_sumber_id_foreign` (`sumber_id`),
  KEY `nominalsx_jenis_penelitian_id_foreign` (`jenis_penelitian_id`),
  CONSTRAINT `nominalsx_jenis_penelitian_id_foreign` FOREIGN KEY (`jenis_penelitian_id`) REFERENCES `jenis_penelitians` (`id`) ON DELETE CASCADE,
  CONSTRAINT `nominalsx_proposal_id_foreign` FOREIGN KEY (`proposal_id`) REFERENCES `proposalsx` (`id`) ON DELETE CASCADE,
  CONSTRAINT `nominalsx_sumber_id_foreign` FOREIGN KEY (`sumber_id`) REFERENCES `sumbers` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table elitapdimas.nominalsx: ~0 rows (approximately)

-- Dumping structure for table elitapdimas.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table elitapdimas.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table elitapdimas.pembiayaans
CREATE TABLE IF NOT EXISTS `pembiayaans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tema_id` bigint unsigned NOT NULL,
  `jenis_penelitian_id` bigint unsigned NOT NULL,
  `sumber_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pembiayaans_tema_id_foreign` (`tema_id`),
  KEY `pembiayaans_jenis_penelitian_id_foreign` (`jenis_penelitian_id`),
  KEY `pembiayaans_sumber_id_foreign` (`sumber_id`),
  CONSTRAINT `pembiayaans_jenis_penelitian_id_foreign` FOREIGN KEY (`jenis_penelitian_id`) REFERENCES `jenis_penelitians` (`id`),
  CONSTRAINT `pembiayaans_sumber_id_foreign` FOREIGN KEY (`sumber_id`) REFERENCES `sumbers` (`id`),
  CONSTRAINT `pembiayaans_tema_id_foreign` FOREIGN KEY (`tema_id`) REFERENCES `temas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table elitapdimas.pembiayaans: ~0 rows (approximately)
INSERT INTO `pembiayaans` (`id`, `tema_id`, `jenis_penelitian_id`, `sumber_id`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, 1, '2025-08-21 18:36:10', '2025-08-21 18:36:10');

-- Dumping structure for table elitapdimas.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table elitapdimas.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table elitapdimas.proposals
CREATE TABLE IF NOT EXISTS `proposals` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nominal_id` bigint unsigned NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keyword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abstract` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `referensi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_pdf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Incomplete','Submit','Accept Reviewer','Reject Reviewer','Accept Editor','Reject Editor','Publish','Rejected') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Incomplete',
  `comment` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `proposals_nominal_id_foreign` (`nominal_id`),
  CONSTRAINT `proposals_nominal_id_foreign` FOREIGN KEY (`nominal_id`) REFERENCES `nominals` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table elitapdimas.proposals: ~0 rows (approximately)
INSERT INTO `proposals` (`id`, `nominal_id`, `judul`, `keyword`, `abstract`, `referensi`, `file_pdf`, `status`, `comment`, `created_at`, `updated_at`) VALUES
	(1, 1, 'coba11', 'coba1;coba1;coba1', 'coba1;coba1;coba1', 'coba1;coba1;coba1', 'pdf_proposal/1755826698_data-kegiatan_2025-04-20_to_2025-04-25.pdf', 'Publish', NULL, '2025-08-21 18:38:19', '2025-08-21 20:27:38');

-- Dumping structure for table elitapdimas.proposalsx
CREATE TABLE IF NOT EXISTS `proposalsx` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tema_id` bigint unsigned NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keyword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abstract` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `referensi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_pdf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Incomplete','Submit','Accept Reviewer','Reject Reviewer','Accept Editor','Reject Editor','Publish','Rejected') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Incomplete',
  `comment` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `proposalsx_tema_id_foreign` (`tema_id`),
  CONSTRAINT `proposalsx_tema_id_foreign` FOREIGN KEY (`tema_id`) REFERENCES `temas` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table elitapdimas.proposalsx: ~0 rows (approximately)
INSERT INTO `proposalsx` (`id`, `tema_id`, `judul`, `keyword`, `abstract`, `referensi`, `file_pdf`, `status`, `comment`, `created_at`, `updated_at`) VALUES
	(1, 2, 'coba11', 'coba', '<p>coba11</p>', 'coba', 'pdf_proposal/1755826869_data-kegiatan_2025-04-07_to_2025-04-07.pdf', 'Publish', NULL, '2025-08-21 18:41:09', '2025-08-21 20:28:01');

-- Dumping structure for table elitapdimas.proposal_comments
CREATE TABLE IF NOT EXISTS `proposal_comments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `proposal_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `proposal_comments_proposal_id_foreign` (`proposal_id`),
  KEY `proposal_comments_user_id_foreign` (`user_id`),
  CONSTRAINT `proposal_comments_proposal_id_foreign` FOREIGN KEY (`proposal_id`) REFERENCES `proposals` (`id`) ON DELETE CASCADE,
  CONSTRAINT `proposal_comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table elitapdimas.proposal_comments: ~2 rows (approximately)
INSERT INTO `proposal_comments` (`id`, `proposal_id`, `user_id`, `role`, `file_path`, `comment`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, '["Admin"]', 'proposal_review/RRK3FHclpfaSnbewQgvvpy6XgojVTiXKLIpZ8TZ9.pdf', 'ok', '2025-08-21 20:18:08', '2025-08-21 20:18:08'),
	(2, 1, 1, '["Admin"]', 'proposal_review/Vp45UkZtK8OawQd7251Dyy4PTGiu6AcBTRH5pyTR.pdf', 'ok', '2025-08-21 20:27:38', '2025-08-21 20:27:38');

-- Dumping structure for table elitapdimas.proposal_commentsx
CREATE TABLE IF NOT EXISTS `proposal_commentsx` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `proposal_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `proposal_commentsx_proposal_id_foreign` (`proposal_id`),
  KEY `proposal_commentsx_user_id_foreign` (`user_id`),
  CONSTRAINT `proposal_commentsx_proposal_id_foreign` FOREIGN KEY (`proposal_id`) REFERENCES `proposalsx` (`id`) ON DELETE CASCADE,
  CONSTRAINT `proposal_commentsx_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table elitapdimas.proposal_commentsx: ~0 rows (approximately)
INSERT INTO `proposal_commentsx` (`id`, `proposal_id`, `user_id`, `role`, `file_path`, `comment`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, '["Admin"]', 'proposal_review/U9C63MFcTZOBD7s3DdRdGg5aB4fT1aujXirYgutR.pdf', 'ok', '2025-08-21 20:28:01', '2025-08-21 20:28:01');

-- Dumping structure for table elitapdimas.sumbers
CREATE TABLE IF NOT EXISTS `sumbers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama_sumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table elitapdimas.sumbers: ~2 rows (approximately)
INSERT INTO `sumbers` (`id`, `nama_sumber`, `created_at`, `updated_at`) VALUES
	(1, 'Internal (Yayasan)', '2025-08-21 18:35:43', '2025-08-21 18:35:43'),
	(2, 'Eksternal', '2025-08-21 18:35:46', '2025-08-21 18:35:46');

-- Dumping structure for table elitapdimas.temas
CREATE TABLE IF NOT EXISTS `temas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tema` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table elitapdimas.temas: ~2 rows (approximately)
INSERT INTO `temas` (`id`, `tema`, `created_at`, `updated_at`) VALUES
	(1, 'Manajemen', '2025-08-21 18:35:36', '2025-08-21 18:35:36'),
	(2, 'IT', '2025-08-21 18:35:39', '2025-08-21 18:35:39'),
	(3, 'Manajemen2', '2025-08-25 20:02:59', '2025-08-25 20:02:59'),
	(4, 'IT2', '2025-08-25 20:05:29', '2025-08-25 20:05:29');

-- Dumping structure for table elitapdimas.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` json NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table elitapdimas.users: ~7 rows (approximately)
INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'coba1', 'coba1@gmail.com', '$2y$12$Xs1HIigA1EwX7MMhmMRfzezzZhzm6uIQEJJUh6EGnNzQwSNA4Q4ZC', '["Admin"]', NULL, '2025-08-20 23:29:07', '2025-08-20 23:53:24'),
	(2, 'coba2', 'coba2@gmail.com', '$2y$12$W/relqSoDC25s5jh/r.FxeEIJGr7FUmQg2DmiE/HSG4mx5prtvIla', '["Jurnal Manager"]', NULL, '2025-08-20 23:33:13', '2025-08-20 23:53:18'),
	(3, 'coba3', 'coba3@gmail.com', '$2y$12$MmqMV.QSwky.d6ZZLI7qPegLmb.oRFAWtgpQu1e2n/fgmdnS5YE4a', '["Author"]', NULL, '2025-08-20 23:34:55', '2025-08-20 23:34:55'),
	(4, 'coba4', 'coba4@gmail.com', '$2y$12$c/Dj22iYwPqspXb4LnmAJeQ.hUJ5FRwfHZZ1WoFRd7foK6WHKkrom', '["Reviewer"]', NULL, '2025-08-20 23:38:33', '2025-08-20 23:53:38'),
	(5, 'coba5', 'coba5@gmail.com', '$2y$12$.j89Wt6MLpdkMau1wglnz.7jqruGlz/IYVU1mePIFVkQwvqDuXz9.', '["Editor"]', NULL, '2025-08-20 23:39:44', '2025-08-20 23:53:45'),
	(6, 'coba6', 'coba6@gmail.com', '$2y$12$UYnjMlVumnA.CC3QOut7dOBHmVXIJo2lkW5qlMHXukdIn/PuvnUvy', '["Bendahara"]', NULL, '2025-08-20 23:54:07', '2025-08-20 23:55:45'),
	(7, 'coba7', 'coba7@gmail.com', '$2y$12$Cm/SFAESWXmQKgE0qhDoK.UCLch.U5RssZ2pw1Yy1AIHJ5Dm9iKaq', '["Author", "Reviewer"]', NULL, '2025-08-20 23:55:37', '2025-08-20 23:55:37'),
	(8, 'Admin', 'staima.alhikam03@gmail.com', '$2y$12$w.ydfmDM7oNFmmYP8GIHuO2ablwQd1zu189YH.GIydFVkkG.O/eeq', '["Admin"]', NULL, '2025-08-26 21:19:00', '2025-08-26 21:19:00');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
