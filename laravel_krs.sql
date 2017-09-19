-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2017 at 03:31 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_krs`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_09_05_042427_buat_table_dosen', 1),
('2016_09_05_082747_buat_tabel_mhs', 1),
('2016_09_06_130023_buat_tabel_mk', 1),
('2016_09_09_030257_buat_tabel_ruang', 1),
('2016_09_09_034324_buat_tabel_jadwal', 1),
('2016_09_11_033152_buat_tabel_thnajaran', 1),
('2016_09_13_054409_buat_tabel_krs', 1),
('2016_09_13_073007_buat_table_krs_detil', 1),
('2016_09_13_073547_buat_tabel_nilai', 1),
('2016_09_15_025204_buat_tabel_bobot', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bobot`
--

CREATE TABLE `tbl_bobot` (
  `id` int(10) UNSIGNED NOT NULL,
  `bobot` double(8,2) NOT NULL,
  `nilai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_bobot`
--

INSERT INTO `tbl_bobot` (`id`, `bobot`, `nilai`, `created_at`, `updated_at`) VALUES
(1, 4.00, 'A', '2017-09-06 08:33:01', '2017-09-06 08:33:01'),
(2, 3.00, 'B', '2017-09-06 08:33:01', '2017-09-06 08:33:01'),
(3, 2.00, 'C', '2017-09-06 08:33:01', '2017-09-06 08:33:01'),
(4, 1.00, 'D', '2017-09-06 08:33:01', '2017-09-06 08:33:01'),
(5, 0.00, 'E', '2017-09-06 08:33:01', '2017-09-06 08:33:01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dosen`
--

CREATE TABLE `tbl_dosen` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_dosen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nidn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama_dosen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_dosen`
--

INSERT INTO `tbl_dosen` (`id`, `kode_dosen`, `nidn`, `nama_dosen`, `user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'D190', '49591', 'Freddie Runolfsson', 2, NULL, '2017-09-06 08:33:02', '2017-09-06 08:33:02'),
(2, 'D601', '16168', 'Halie Kovacek', 4, NULL, '2017-09-06 08:33:02', '2017-09-06 08:33:02'),
(3, 'D884', '27856', 'Amely Mertz', 6, NULL, '2017-09-06 08:33:03', '2017-09-06 08:33:03'),
(4, 'D401', '99977', 'Henriette Douglas IV', 8, NULL, '2017-09-06 08:33:04', '2017-09-06 08:33:04'),
(5, 'D847', '36154', 'Dudley Jacobi', 10, NULL, '2017-09-06 08:33:05', '2017-09-06 08:33:05'),
(6, 'D68', '35707', 'Mr. Freddy Hartmann Jr.', 12, NULL, '2017-09-06 08:33:06', '2017-09-06 08:33:06'),
(7, 'D79', '76040', 'Torey Hackett', 14, NULL, '2017-09-06 08:33:07', '2017-09-06 08:33:07'),
(8, 'D979', '15732', 'Dr. Donnie Bechtelar DDS', 16, NULL, '2017-09-06 08:33:07', '2017-09-06 08:33:07'),
(9, 'D411', '6512', 'Cristina Gerhold IV', 18, NULL, '2017-09-06 08:33:08', '2017-09-06 08:33:08'),
(10, 'D36', '69468', 'Addison Hartmann', 20, NULL, '2017-09-06 08:33:08', '2017-09-06 08:33:08'),
(11, 'D231', '79439', 'Elissa Keebler II', 22, NULL, '2017-09-06 08:33:09', '2017-09-06 08:33:09'),
(12, 'D684', '85589', 'Germaine Lang', 24, NULL, '2017-09-06 08:33:10', '2017-09-06 08:33:10'),
(13, 'D292', '20237', 'Eloisa Fisher', 26, NULL, '2017-09-06 08:33:10', '2017-09-06 08:33:10'),
(14, 'D656', '41634', 'Ms. Raphaelle Larkin DDS', 28, NULL, '2017-09-06 08:33:11', '2017-09-06 08:33:11'),
(15, 'D800', '64973', 'Tanner Romaguera', 30, NULL, '2017-09-06 08:33:12', '2017-09-06 08:33:12'),
(16, 'D490', '3753', 'Terrance Weimann', 32, NULL, '2017-09-06 08:33:13', '2017-09-06 08:33:13'),
(17, 'D992', '19606', 'Miss Gia Lockman Jr.', 34, NULL, '2017-09-06 08:33:13', '2017-09-06 08:33:13'),
(18, 'D879', '70105', 'Luther Spinka', 36, NULL, '2017-09-06 08:33:14', '2017-09-06 08:33:14'),
(19, 'D151', '97835', 'Prof. Retha Boyle', 38, NULL, '2017-09-06 08:33:15', '2017-09-06 08:33:15'),
(20, 'D220', '32927', 'Dr. Darren Rau III', 40, '2017-09-06 08:38:15', '2017-09-06 08:33:15', '2017-09-06 08:38:15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_evaluasi`
--

CREATE TABLE `tbl_evaluasi` (
  `id` int(11) NOT NULL,
  `nama_pengguna` char(30) NOT NULL,
  `telp_penggguna` int(15) NOT NULL,
  `nama_instansi` char(100) NOT NULL,
  `alamat_instansi` text NOT NULL,
  `jabatan` char(100) NOT NULL,
  `nama` char(50) NOT NULL,
  `nim` int(20) NOT NULL,
  `posisi` char(100) NOT NULL,
  `telp` int(15) NOT NULL,
  `jurusan` char(50) NOT NULL,
  `devisi` char(50) NOT NULL,
  `masa_kerja` date NOT NULL,
  `integritas` char(100) NOT NULL,
  `keahlian` text NOT NULL,
  `kemampuan` text NOT NULL,
  `ti` text NOT NULL,
  `komunikasi` text NOT NULL,
  `tim` char(100) NOT NULL,
  `pengembangan` text NOT NULL,
  `saran` text NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_evaluasi`
--

INSERT INTO `tbl_evaluasi` (`id`, `nama_pengguna`, `telp_penggguna`, `nama_instansi`, `alamat_instansi`, `jabatan`, `nama`, `nim`, `posisi`, `telp`, `jurusan`, `devisi`, `masa_kerja`, `integritas`, `keahlian`, `kemampuan`, `ti`, `komunikasi`, `tim`, `pengembangan`, `saran`, `tanggal_daftar`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'sdsdsd', 0, '', '', '', '', 0, '', 0, '', '', '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', '2017-09-18 07:51:01', '2017-09-18 07:58:24', '2017-09-18 07:58:24'),
(2, 'sdsdsd', 0, '', '', '', '', 0, '', 0, '', '', '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', '2017-09-18 07:51:36', '2017-09-18 07:58:22', '2017-09-18 07:58:22'),
(3, 'kios', 0, '', '', '', '', 0, '', 0, '', '', '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', '2017-09-18 07:57:50', '2017-09-18 07:58:19', '2017-09-18 07:58:19');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jadwal`
--

CREATE TABLE `tbl_jadwal` (
  `id` int(10) UNSIGNED NOT NULL,
  `mk_id` int(11) NOT NULL,
  `dosen_id` int(11) NOT NULL,
  `thnajaran_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hari` enum('Mon','Tue','Wed','Thu','Fri','Sat') COLLATE utf8_unicode_ci NOT NULL,
  `waktu_mulai` time NOT NULL,
  `waktu_selesai` time NOT NULL,
  `program` enum('Sore','Pagi') COLLATE utf8_unicode_ci NOT NULL,
  `kelas` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `ruang_id` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_jadwal`
--

INSERT INTO `tbl_jadwal` (`id`, `mk_id`, `dosen_id`, `thnajaran_id`, `hari`, `waktu_mulai`, `waktu_selesai`, `program`, `kelas`, `kapasitas`, `ruang_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 16, 8, '16', 'Wed', '11:26:42', '04:16:22', 'Pagi', 'U', 7, 19, NULL, '2017-09-06 08:33:16', '2017-09-06 08:33:16'),
(2, 11, 17, '16', 'Wed', '12:16:49', '13:36:53', 'Sore', 'X', 80, 12, NULL, '2017-09-06 08:33:16', '2017-09-06 08:33:16'),
(3, 13, 18, '16', 'Fri', '00:11:13', '23:37:00', 'Pagi', 'B', 51, 8, NULL, '2017-09-06 08:33:16', '2017-09-06 08:33:16'),
(4, 1, 7, '16', 'Thu', '23:41:30', '17:56:04', 'Sore', 'V', 3, 18, NULL, '2017-09-06 08:33:16', '2017-09-06 08:33:16'),
(5, 17, 19, '16', 'Thu', '00:42:01', '12:46:00', 'Sore', 'K', 18, 14, NULL, '2017-09-06 08:33:16', '2017-09-06 08:33:16'),
(6, 18, 11, '16', 'Tue', '13:14:01', '02:57:18', 'Pagi', 'S', 17, 14, NULL, '2017-09-06 08:33:16', '2017-09-06 08:33:16'),
(7, 7, 1, '16', 'Fri', '13:15:11', '20:50:32', 'Pagi', 'I', 14, 13, NULL, '2017-09-06 08:33:16', '2017-09-06 08:33:16'),
(8, 17, 13, '16', 'Tue', '18:56:13', '20:13:22', 'Pagi', 'T', 44, 11, NULL, '2017-09-06 08:33:16', '2017-09-06 08:33:16'),
(9, 18, 8, '16', 'Fri', '23:03:32', '10:49:27', 'Pagi', 'C', 50, 15, NULL, '2017-09-06 08:33:16', '2017-09-06 08:33:16'),
(10, 15, 18, '16', 'Fri', '17:16:06', '14:52:22', 'Sore', 'D', 12, 18, NULL, '2017-09-06 08:33:16', '2017-09-06 08:33:16'),
(11, 6, 11, '16', 'Sat', '15:37:34', '06:23:59', 'Sore', 'M', 11, 2, NULL, '2017-09-06 08:33:16', '2017-09-06 08:33:16'),
(12, 3, 3, '16', 'Thu', '21:42:20', '03:06:40', 'Pagi', 'S', 69, 15, NULL, '2017-09-06 08:33:16', '2017-09-06 08:33:16'),
(13, 6, 9, '16', 'Tue', '18:02:14', '02:46:01', 'Pagi', 'T', 19, 1, NULL, '2017-09-06 08:33:16', '2017-09-06 08:33:16'),
(14, 19, 3, '16', 'Mon', '00:37:01', '19:58:58', 'Sore', 'P', 64, 2, NULL, '2017-09-06 08:33:16', '2017-09-06 08:33:16'),
(15, 9, 14, '16', 'Wed', '11:53:17', '17:34:42', 'Pagi', 'I', 1, 7, NULL, '2017-09-06 08:33:16', '2017-09-06 08:33:16'),
(16, 16, 20, '16', 'Fri', '19:17:29', '15:17:38', 'Pagi', 'G', 41, 10, NULL, '2017-09-06 08:33:16', '2017-09-06 08:33:16'),
(17, 3, 5, '16', 'Wed', '10:17:10', '11:13:14', 'Pagi', 'M', 82, 14, NULL, '2017-09-06 08:33:16', '2017-09-06 08:33:16'),
(18, 15, 6, '16', 'Fri', '10:06:11', '09:35:50', 'Pagi', 'E', 43, 17, NULL, '2017-09-06 08:33:16', '2017-09-06 08:33:16'),
(19, 8, 4, '16', 'Wed', '15:47:09', '04:59:00', 'Pagi', 'R', 75, 12, NULL, '2017-09-06 08:33:16', '2017-09-06 08:33:16'),
(20, 7, 1, '16', 'Thu', '12:37:57', '05:18:48', 'Pagi', 'P', 56, 9, NULL, '2017-09-06 08:33:16', '2017-09-06 08:33:16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_krs`
--

CREATE TABLE `tbl_krs` (
  `id` int(10) UNSIGNED NOT NULL,
  `mahasiswa_id` int(11) NOT NULL,
  `tgl_krs` date NOT NULL,
  `tgl_persetujuan` date DEFAULT NULL,
  `thnajaran_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `semester` int(11) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_krs`
--

INSERT INTO `tbl_krs` (`id`, `mahasiswa_id`, `tgl_krs`, `tgl_persetujuan`, `thnajaran_id`, `status`, `semester`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 21, '2017-09-07', NULL, 16, 0, 1, NULL, '2017-09-07 09:39:27', '2017-09-07 09:39:27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_krs_detil`
--

CREATE TABLE `tbl_krs_detil` (
  `id` int(10) UNSIGNED NOT NULL,
  `krs_id` int(11) NOT NULL,
  `jadwal_id` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_krs_detil`
--

INSERT INTO `tbl_krs_detil` (`id`, `krs_id`, `jadwal_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 4, NULL, '2017-09-07 09:39:27', '2017-09-07 09:39:27'),
(2, 1, 14, NULL, '2017-09-07 09:39:27', '2017-09-07 09:39:27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_loker`
--

CREATE TABLE `tbl_loker` (
  `id` int(11) NOT NULL,
  `perusahaan` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_loker`
--

INSERT INTO `tbl_loker` (`id`, `perusahaan`, `pekerjaan`, `isi`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Pt. Angin ribut', 'web programmer', 'developer php framework laravel', '2017-09-17 07:57:57', '2017-09-17 07:57:57', '0000-00-00 00:00:00'),
(3, 's', 's', 's', '2017-09-17 09:33:25', '2017-09-17 09:33:25', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mahasiswa`
--

CREATE TABLE `tbl_mahasiswa` (
  `id` int(10) UNSIGNED NOT NULL,
  `nim` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama_mahasiswa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `angkatan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jurusan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kelas_program` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dosen_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `lulus` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `bulan` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tahun` int(4) NOT NULL,
  `tempat_lahir` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jk` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `hp` int(15) NOT NULL,
  `hp1` int(15) NOT NULL,
  `hp2` int(15) NOT NULL,
  `noortu` int(15) NOT NULL,
  `fb` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ipk` int(5) NOT NULL,
  `skripsi` text COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_mahasiswa`
--

INSERT INTO `tbl_mahasiswa` (`id`, `nim`, `nama_mahasiswa`, `angkatan`, `jurusan`, `kelas_program`, `dosen_id`, `user_id`, `alamat`, `lulus`, `bulan`, `tahun`, `tempat_lahir`, `tanggal_lahir`, `jk`, `status`, `hp`, `hp1`, `hp2`, `noortu`, `fb`, `email`, `ipk`, `skripsi`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '57282', 'Gloria Schimmel', '2006', 'Manajemen Informatika', 'Pagi', 1, 3, '', '', '', 0, '', '0000-00-00', '', '', 0, 0, 0, 0, '', '', 0, '', NULL, '2017-09-06 08:33:02', '2017-09-06 08:33:02'),
(2, '4117', 'Adolphus Weimann', '1983', 'Teknik Informatika', 'Sore', 1, 5, '', '', '', 0, '', '0000-00-00', '', '', 0, 0, 0, 0, '', '', 0, '', NULL, '2017-09-06 08:33:03', '2017-09-06 08:33:03'),
(3, '38185', 'Lesly Batz', '1987', 'Manajemen Informatika', 'Pagi', 2, 7, '', '', '', 0, '', '0000-00-00', '', '', 0, 0, 0, 0, '', '', 0, '', NULL, '2017-09-06 08:33:04', '2017-09-06 08:33:04'),
(4, '71322', 'Assunta Jacobi V', '1977', 'Sistem Informasi', 'Sore', 2, 9, '', '', '', 0, '', '0000-00-00', '', '', 0, 0, 0, 0, '', '', 0, '', NULL, '2017-09-06 08:33:05', '2017-09-06 08:33:05'),
(5, '321', 'Mabelle Welch', '1970', 'Teknik Informatika', 'Sore', 3, 11, '', '', '', 0, '', '0000-00-00', '', '', 0, 0, 0, 0, '', '', 0, '', NULL, '2017-09-06 08:33:05', '2017-09-06 08:33:05'),
(6, '17762', 'Jamir Ullrich', '1980', 'Manajemen Informatika', 'Sore', 6, 13, '', '', '', 0, '', '0000-00-00', '', '', 0, 0, 0, 0, '', '', 0, '', NULL, '2017-09-06 08:33:06', '2017-09-06 08:33:06'),
(7, '89028', 'Kaleigh Wehner', '1978', 'Teknik Informatika', 'Pagi', 6, 15, '', '', '', 0, '', '0000-00-00', '', '', 0, 0, 0, 0, '', '', 0, '', NULL, '2017-09-06 08:33:07', '2017-09-06 08:33:07'),
(8, '6138', 'Mrs. Jena Jacobson V', '1988', 'Manajemen Informatika', 'Sore', 3, 17, '', '', '', 0, '', '0000-00-00', '', '', 0, 0, 0, 0, '', '', 0, '', NULL, '2017-09-06 08:33:07', '2017-09-06 08:33:07'),
(9, '94633', 'Miss Ashlynn Hyatt', '1978', 'Sistem Informasi', 'Sore', 6, 19, '', '', '', 0, '', '0000-00-00', '', '', 0, 0, 0, 0, '', '', 0, '', NULL, '2017-09-06 08:33:08', '2017-09-06 08:33:08'),
(10, '14777', 'Destiny Lueilwitz', '1973', 'Sistem Informasi', 'Pagi', 3, 21, '', '', '', 0, '', '0000-00-00', '', '', 0, 0, 0, 0, '', '', 0, '', NULL, '2017-09-06 08:33:09', '2017-09-06 08:33:09'),
(11, '93508', 'Hobart Dicki', '1979', 'Teknik Informatika', 'Pagi', 6, 23, '', '', '', 0, '', '0000-00-00', '', '', 0, 0, 0, 0, '', '', 0, '', NULL, '2017-09-06 08:33:09', '2017-09-06 08:33:09'),
(12, '77087', 'Candelario O\'Hara', '2008', 'Manajemen Informatika', 'Pagi', 9, 25, '', '', '', 0, '', '0000-00-00', '', '', 0, 0, 0, 0, '', '', 0, '', NULL, '2017-09-06 08:33:10', '2017-09-06 08:33:10'),
(13, '64792', 'Ms. Elisa Stokes', '1997', 'Sistem Informasi', 'Pagi', 13, 27, '', '', '', 0, '', '0000-00-00', '', '', 0, 0, 0, 0, '', '', 0, '', NULL, '2017-09-06 08:33:11', '2017-09-06 08:33:11'),
(14, '1110', 'sastro', '1994', 'Manajemen Informatika', 'Pagi', 11, 29, '', '', '', 0, '', '0000-00-00', '', '', 0, 0, 0, 0, '', '', 0, '', '2017-09-17 06:54:41', '2017-09-06 08:33:12', '2017-09-17 06:54:41'),
(15, '871', 'Dr. Vladimir Lind', '1972', 'Manajemen Informatika', 'Pagi', 4, 31, '', '', '', 0, '', '0000-00-00', '', '', 0, 0, 0, 0, '', '', 0, '', NULL, '2017-09-06 08:33:12', '2017-09-06 08:33:12'),
(16, '82825', 'Kolby Lakin MD', '2009', 'Teknik Informatika', 'Sore', 2, 33, '', '', '', 0, '', '0000-00-00', '', '', 0, 0, 0, 0, '', '', 0, '', NULL, '2017-09-06 08:33:13', '2017-09-06 08:33:13'),
(17, '56161', 'Evert Howe', '2006', 'Teknik Informatika', 'Sore', 10, 35, '', '', '', 0, '', '0000-00-00', '', '', 0, 0, 0, 0, '', '', 0, '', NULL, '2017-09-06 08:33:14', '2017-09-06 08:33:14'),
(18, '97995', 'Miss Valentine Beahan DVM', '1993', 'Sistem Informasi', 'Sore', 14, 37, '', '', '', 0, '', '0000-00-00', '', '', 0, 0, 0, 0, '', '', 0, '', NULL, '2017-09-06 08:33:14', '2017-09-06 08:33:14'),
(19, '16569', 'Mina Fadel I', '1994', 'Sistem Informasi', 'Pagi', 16, 39, '', '', '', 0, '', '0000-00-00', '', '', 0, 0, 0, 0, '', '', 0, '', NULL, '2017-09-06 08:33:15', '2017-09-06 08:33:15'),
(20, '47896', 'Mrs. Freda Purdy', '2005', 'Teknik Informatika', 'Pagi', 12, 41, '', '', '', 0, '', '0000-00-00', '', '', 0, 0, 0, 0, '', '', 0, '', NULL, '2017-09-06 08:33:15', '2017-09-06 08:33:15'),
(21, '123456789', 'ahmad ismail', '2014', 'Manajemen Informatika', 'Sore', 6, 42, '', 'Lulus', 'Juli', 0, '', '2017-09-15', 'Pria', 'Nikah', 0, 0, 0, 0, '', '', 0, '', NULL, '2017-09-07 09:38:37', '2017-09-09 08:25:32'),
(22, '12345678', 'hendra wijaya', '2017', 'Sistem Informasi', 'Pagi', 1, 43, 'test', '', '', 0, '', '0000-00-00', '', '', 0, 0, 0, 0, '', '', 0, '', NULL, '2017-09-07 10:06:35', '2017-09-07 10:06:35'),
(23, '11111', 'asal', '2018', 'Sistem Informasi', 'Pagi', 1, 44, 'test', '', '', 0, '', '0000-00-00', '', '', 0, 0, 0, 0, '', '', 0, '', '2017-09-17 06:54:45', '2017-09-07 10:23:12', '2017-09-17 06:54:45'),
(24, '12345', 'agus supriyanto', '2017', 'Sistem Informasi', 'Pagi', 1, 45, 'cigamea', '', '', 0, '', '0000-00-00', '', '', 0, 0, 0, 0, '', '', 0, '', NULL, '2017-09-08 08:41:22', '2017-09-08 08:41:22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mk`
--

CREATE TABLE `tbl_mk` (
  `id` int(10) UNSIGNED NOT NULL,
  `kd_mk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama_mk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sks` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `prasyarat_mk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `jurusan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_mk`
--

INSERT INTO `tbl_mk` (`id`, `kd_mk`, `nama_mk`, `sks`, `semester`, `prasyarat_mk`, `jurusan`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '91602', 'Ullrich-Gutmann', 6, 2, NULL, 'Sistem Informasi', NULL, '2017-09-06 08:33:02', '2017-09-06 08:33:02'),
(2, '688782', 'Reichel-Klein', 4, 5, NULL, 'Teknik Informatika', NULL, '2017-09-06 08:33:03', '2017-09-06 08:33:03'),
(3, '236554', 'Lynch PLC', 2, 1, NULL, 'Teknik Informatika', '2017-09-17 06:53:23', '2017-09-06 08:33:04', '2017-09-17 06:53:23'),
(4, '570219', 'Jakubowski-Heller', 1, 2, NULL, 'Manajemen Informatika', NULL, '2017-09-06 08:33:05', '2017-09-06 08:33:05'),
(5, '982710', 'Bins, Borer and Baumbach', 3, 5, NULL, 'Sistem Informasi', NULL, '2017-09-06 08:33:05', '2017-09-06 08:33:05'),
(6, '539136', 'Stoltenberg, Rempel and Stehr', 3, 5, NULL, 'Teknik Informatika', NULL, '2017-09-06 08:33:06', '2017-09-06 08:33:06'),
(7, '364904', 'Bode, Hegmann and Leuschke', 5, 7, NULL, 'Manajemen Informatika', NULL, '2017-09-06 08:33:07', '2017-09-06 08:33:07'),
(8, '15272', 'Moore-Bernier', 1, 8, NULL, 'Manajemen Informatika', NULL, '2017-09-06 08:33:08', '2017-09-06 08:33:08'),
(9, '932722', 'Rippin-Mayert', 6, 6, NULL, 'Manajemen Informatika', NULL, '2017-09-06 08:33:08', '2017-09-06 08:33:08'),
(10, '673794', 'Schowalter Inc', 2, 5, NULL, 'Manajemen Informatika', NULL, '2017-09-06 08:33:09', '2017-09-06 08:33:09'),
(11, '187451', 'Senger-Blanda', 3, 5, NULL, 'Manajemen Informatika', NULL, '2017-09-06 08:33:09', '2017-09-06 08:33:09'),
(12, '270158', 'Rutherford Group', 4, 7, NULL, 'Teknik Informatika', NULL, '2017-09-06 08:33:10', '2017-09-06 08:33:10'),
(13, '109232', 'Yundt, Fay and Rutherford', 2, 3, NULL, 'Manajemen Informatika', NULL, '2017-09-06 08:33:11', '2017-09-06 08:33:11'),
(14, '691859', 'Schmeler Group', 6, 3, NULL, 'Sistem Informasi', NULL, '2017-09-06 08:33:12', '2017-09-06 08:33:12'),
(15, '698261', 'Konopelski, Gaylord and Russel', 3, 8, NULL, 'Manajemen Informatika', NULL, '2017-09-06 08:33:12', '2017-09-06 08:33:12'),
(16, '333723', 'Toy-Franecki', 6, 4, NULL, 'Sistem Informasi', NULL, '2017-09-06 08:33:13', '2017-09-06 08:33:13'),
(17, '424725', 'Osinski Ltd', 2, 8, NULL, 'Manajemen Informatika', NULL, '2017-09-06 08:33:14', '2017-09-06 08:33:14'),
(18, '788286', 'Block, Bailey and Smith', 2, 6, NULL, 'Manajemen Informatika', NULL, '2017-09-06 08:33:14', '2017-09-06 08:33:14'),
(19, '153418', 'Walter Inc', 1, 7, NULL, 'Sistem Informasi', NULL, '2017-09-06 08:33:15', '2017-09-06 08:33:15'),
(20, '473257', 'Hagenes Group', 4, 8, NULL, 'Teknik Informatika', NULL, '2017-09-06 08:33:16', '2017-09-06 08:33:16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai`
--

CREATE TABLE `tbl_nilai` (
  `id` int(10) UNSIGNED NOT NULL,
  `krsdetil_id` int(11) NOT NULL,
  `mahasiswa_id` int(11) NOT NULL,
  `bobot_id` int(11) NOT NULL,
  `thnajaran_id` int(11) NOT NULL,
  `semester_ditempuh` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ruang`
--

CREATE TABLE `tbl_ruang` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_ruang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_ruang`
--

INSERT INTO `tbl_ruang` (`id`, `nama_ruang`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Kossstad', NULL, '2017-09-06 08:33:02', '2017-09-06 08:33:02'),
(2, 'Port Marionburgh', NULL, '2017-09-06 08:33:03', '2017-09-06 08:33:03'),
(3, 'Keeganborough', NULL, '2017-09-06 08:33:04', '2017-09-06 08:33:04'),
(4, 'Lake Darby', NULL, '2017-09-06 08:33:05', '2017-09-06 08:33:05'),
(5, 'Adellport', NULL, '2017-09-06 08:33:05', '2017-09-06 08:33:05'),
(6, 'Jeffmouth', NULL, '2017-09-06 08:33:06', '2017-09-06 08:33:06'),
(7, 'East Blanca', NULL, '2017-09-06 08:33:07', '2017-09-06 08:33:07'),
(8, 'Victoriahaven', NULL, '2017-09-06 08:33:08', '2017-09-06 08:33:08'),
(9, 'West Autumn', NULL, '2017-09-06 08:33:08', '2017-09-06 08:33:08'),
(10, 'Lottieville', NULL, '2017-09-06 08:33:09', '2017-09-06 08:33:09'),
(11, 'Beahanshire', NULL, '2017-09-06 08:33:09', '2017-09-06 08:33:09'),
(12, 'Lake Luna', NULL, '2017-09-06 08:33:10', '2017-09-06 08:33:10'),
(13, 'Armstrongbury', NULL, '2017-09-06 08:33:11', '2017-09-06 08:33:11'),
(14, 'Ernestinahaven', NULL, '2017-09-06 08:33:12', '2017-09-06 08:33:12'),
(15, 'Considinetown', NULL, '2017-09-06 08:33:12', '2017-09-06 08:33:12'),
(16, 'Summerborough', NULL, '2017-09-06 08:33:13', '2017-09-06 08:33:13'),
(17, 'Port Bernard', NULL, '2017-09-06 08:33:14', '2017-09-06 08:33:14'),
(18, 'North Verniehaven', NULL, '2017-09-06 08:33:14', '2017-09-06 08:33:14'),
(19, 'Ankundingborough', NULL, '2017-09-06 08:33:15', '2017-09-06 08:33:15'),
(20, 'Swaniawskimouth', NULL, '2017-09-06 08:33:16', '2017-09-06 08:33:16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_thnajaran`
--

CREATE TABLE `tbl_thnajaran` (
  `id` int(10) UNSIGNED NOT NULL,
  `kd_tahun` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8_unicode_ci NOT NULL,
  `tgl_kuliah` date NOT NULL,
  `tgl_awal_perwalian` date NOT NULL,
  `tgl_akhir_perwalian` date NOT NULL,
  `status` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_thnajaran`
--

INSERT INTO `tbl_thnajaran` (`id`, `kd_tahun`, `keterangan`, `tgl_kuliah`, `tgl_awal_perwalian`, `tgl_akhir_perwalian`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Genap-2000/2001', 'Genap 2000 - 2001', '2000-10-07', '2000-05-05', '2001-02-13', 0, NULL, '2017-09-06 08:33:02', '2017-09-06 08:33:13'),
(2, 'Genap-1984/1985', 'Genap 1984 - 1985', '1984-10-12', '1984-09-19', '1984-11-10', 0, NULL, '2017-09-06 08:33:03', '2017-09-06 08:33:13'),
(3, 'Ganjil-1974/1975', 'Ganjil 1974 - 1975', '1975-02-01', '1974-07-31', '1975-05-26', 0, NULL, '2017-09-06 08:33:04', '2017-09-06 08:33:13'),
(4, 'Ganjil-2011/2012', 'Ganjil 2011 - 2012', '2011-11-06', '2011-11-03', '2011-11-23', 0, NULL, '2017-09-06 08:33:05', '2017-09-06 08:33:13'),
(5, 'Ganjil-1993/1994', 'Ganjil 1993 - 1994', '1993-07-16', '1993-07-06', '1993-08-16', 0, NULL, '2017-09-06 08:33:05', '2017-09-06 08:33:13'),
(6, 'Genap-1984/1985', 'Genap 1984 - 1985', '1984-10-04', '1984-06-26', '1984-10-25', 0, NULL, '2017-09-06 08:33:06', '2017-09-06 08:33:13'),
(7, 'Genap-2010/2011', 'Genap 2010 - 2011', '2011-01-03', '2010-12-12', '2011-05-23', 0, NULL, '2017-09-06 08:33:07', '2017-09-06 08:33:13'),
(8, 'Genap-1971/1972', 'Genap 1971 - 1972', '1971-10-09', '1971-03-28', '1972-03-12', 0, NULL, '2017-09-06 08:33:08', '2017-09-06 08:33:13'),
(9, 'Genap-1981/1982', 'Genap 1981 - 1982', '1981-12-20', '1981-02-24', '1982-01-04', 0, NULL, '2017-09-06 08:33:08', '2017-09-06 08:33:13'),
(10, 'Genap-2003/2004', 'Genap 2003 - 2004', '2003-10-31', '2003-10-02', '2003-11-21', 0, NULL, '2017-09-06 08:33:09', '2017-09-06 08:33:13'),
(11, 'Genap-2015/2016', 'Genap 2015 - 2016', '2015-07-26', '2015-02-08', '2015-10-17', 0, NULL, '2017-09-06 08:33:09', '2017-09-06 08:33:13'),
(12, 'Ganjil-1996/1997', 'Ganjil 1996 - 1997', '1997-01-09', '1996-08-25', '1997-06-21', 0, NULL, '2017-09-06 08:33:10', '2017-09-06 08:33:13'),
(13, 'Genap-1998/1999', 'Genap 1998 - 1999', '1998-11-19', '1998-05-29', '1998-11-29', 0, NULL, '2017-09-06 08:33:11', '2017-09-06 08:33:13'),
(14, 'Genap-1991/1992', 'Genap 1991 - 1992', '1991-11-16', '1991-10-16', '1992-05-09', 0, NULL, '2017-09-06 08:33:12', '2017-09-06 08:33:13'),
(15, 'Ganjil-2009/2010', 'Ganjil 2009 - 2010', '2009-10-30', '2009-10-14', '2009-11-27', 0, NULL, '2017-09-06 08:33:12', '2017-09-06 08:33:13'),
(16, 'Ganjil-1972/1973', 'Ganjil 1972 - 1973', '1973-08-05', '1972-12-22', '1973-12-11', 1, NULL, '2017-09-06 08:33:13', '2017-09-06 08:33:13'),
(17, 'Genap-2014/2015', 'Genap 2014 - 2015', '2014-09-04', '2014-05-26', '2014-10-03', 0, NULL, '2017-09-06 08:33:14', '2017-09-06 08:33:14'),
(18, 'Genap-2011/2012', 'Genap 2011 - 2012', '2012-01-19', '2011-12-26', '2012-05-19', 0, NULL, '2017-09-06 08:33:14', '2017-09-06 08:33:14'),
(19, 'Genap-1985/1986', 'Genap 1985 - 1986', '1985-05-15', '1985-02-04', '1985-11-12', 0, NULL, '2017-09-06 08:33:15', '2017-09-06 08:33:15'),
(20, 'Ganjil-1988/1989', 'Ganjil 1988 - 1989', '1989-03-07', '1988-12-27', '1989-03-08', 0, NULL, '2017-09-06 08:33:16', '2017-09-06 08:33:16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tracer`
--

CREATE TABLE `tbl_tracer` (
  `id` int(11) NOT NULL,
  `nama_kantor` char(100) NOT NULL,
  `web_kantor` char(100) NOT NULL,
  `posisi` char(100) NOT NULL,
  `mulai_kerja` date NOT NULL,
  `pekerjaan` char(100) NOT NULL,
  `sumber` char(100) NOT NULL,
  `gaji` double NOT NULL,
  `lama` char(100) NOT NULL,
  `berkaitan` char(100) NOT NULL,
  `alamat` text NOT NULL,
  `bidang_usaha` char(100) NOT NULL,
  `jumkar` int(11) NOT NULL,
  `omact` char(100) NOT NULL,
  `pengeluaran` double NOT NULL,
  `kegiatan` char(100) NOT NULL,
  `usulan` char(100) NOT NULL,
  `keilmuan` char(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tracer`
--

INSERT INTO `tbl_tracer` (`id`, `nama_kantor`, `web_kantor`, `posisi`, `mulai_kerja`, `pekerjaan`, `sumber`, `gaji`, `lama`, `berkaitan`, `alamat`, `bidang_usaha`, `jumkar`, `omact`, `pengeluaran`, `kegiatan`, `usulan`, `keilmuan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'q', 'q', 'q', '2017-09-01', 'q', 'q', 0, '2017-09-02', 'q', 'q', 'q', 0, 'q', 0, 'q', 'q', 'q', '2017-09-09 23:24:23', '2017-09-09 23:24:23', NULL),
(2, 'q', 'q', 'q', '2017-09-17', 'w', 'w', 1000, '2017-09-22', 'w', 'ewre', 'ew', 90, 'e43', 90000, 'yu', 't', 'trty', '2017-09-17 06:50:24', '2017-09-17 06:58:29', '2017-09-17 06:58:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$A3d8Jeyc9lgt2.Fn2Li2W.9NKCdzcjXwBVxGunrc8ZrN8P2Q4DaFi', 'admin', 'MHQkkbnyfK3UvfnkcwDb71JhUnq7D22BPKwV1wb0A41GWLdnZG8ujxnk1ns5', '2017-09-06 08:33:01', '2017-09-17 06:54:59'),
(2, 'D190', '$2y$10$7Gu0PNmf66I3zMl1Veq5Zej3B9SB2phayA6hMBAWcGM/GYW98M.WO', 'dosen', 'umddSDNKSaM9OZotesve9XiVUlMj3wwl26OqEdbyx2r957FBVC3bMG5NRjyw', '2017-09-06 08:33:02', '2017-09-08 18:54:50'),
(3, '57282', '$2y$10$fPa5GjhSTVSvSHE5GRcTzOV3ydKfaLDBJ3i3RMZEsv6K4Ri0IxQoG', 'mahasiswa', 'mbHpmQOkRxy99k4FyydxzJA5MxJZwccWLTXbgzc4D4QlNTUfUHH0Fx5kAEPm', '2017-09-06 08:33:02', '2017-09-07 09:21:28'),
(4, 'D601', '$2y$10$pntTrnqDb7qusT8mxuoAOu38LVZHlvVT5eyKTNZ1B0iMSlnUpUFe.', 'dosen', NULL, '2017-09-06 08:33:02', '2017-09-06 08:33:02'),
(5, '4117', '$2y$10$IxrPLmEwF20e6lRFDj7KP.D/c.Kovo58qFAJCp/tpGLK4HNQ.ANwG', 'mahasiswa', NULL, '2017-09-06 08:33:03', '2017-09-06 08:33:03'),
(6, 'D884', '$2y$10$fu5QV9p070HkC6ShykGGIe1yJ/geWXnnbj4rMmX5TvbpJ1WFawLQ6', 'dosen', NULL, '2017-09-06 08:33:03', '2017-09-06 08:33:03'),
(7, '38185', '$2y$10$d4ZW6cPYvdBKBVR/bLtxreZrwhE8BcsnktEcEMecCNdJNCPt/ROPG', 'mahasiswa', NULL, '2017-09-06 08:33:04', '2017-09-06 08:33:04'),
(8, 'D401', '$2y$10$KuqScX2CAa3KGV/yzNMw3uvDvxhStkb4BQn6lz56DTdrzLlrUNOae', 'dosen', NULL, '2017-09-06 08:33:04', '2017-09-06 08:33:04'),
(9, '71322', '$2y$10$C05nSbi.dQeRXkwiS.y7puulkws4xkaApvi2bWNW/9IJQtMfJhGFe', 'mahasiswa', NULL, '2017-09-06 08:33:05', '2017-09-06 08:33:05'),
(10, 'D847', '$2y$10$elvaDqfLOMs6LYqstO9K4eKG7N6ELXfX6Q7yFdrzfGeKR8cX6wtJe', 'dosen', NULL, '2017-09-06 08:33:05', '2017-09-06 08:33:05'),
(11, '321', '$2y$10$agjd92WVBOv3Qs/nMVIdweZNDkCn5ZvU8JpV2rmksive6/QsDuhhu', 'mahasiswa', NULL, '2017-09-06 08:33:05', '2017-09-06 08:33:05'),
(12, 'D68', '$2y$10$FCJpRoSsZvV4Late/7jEYuoRMJ.z87BsmoMmU3DMzrpSzlz5xZJym', 'dosen', NULL, '2017-09-06 08:33:06', '2017-09-06 08:33:06'),
(13, '17762', '$2y$10$kU2Ak0n4tdD0mttFd4Y7XeGf2nslYGdle4ppdD8cs8urNMKFqGdea', 'mahasiswa', NULL, '2017-09-06 08:33:06', '2017-09-06 08:33:06'),
(14, 'D79', '$2y$10$0Jx5quuWfsQpSKM5Iva/QeOz.4I.FvRQD/tMB6RiAYTLv10F.Brd6', 'dosen', NULL, '2017-09-06 08:33:07', '2017-09-06 08:33:07'),
(15, '89028', '$2y$10$ZkNdmsHhbqTBqoJ57cuhd.M/WROR4Sr6fq6aWWzr9jmDiob1JMXXW', 'mahasiswa', NULL, '2017-09-06 08:33:07', '2017-09-06 08:33:07'),
(16, 'D979', '$2y$10$QT1ZjafiL4f5xYs.4ojmCuUvqXVv2s4rzpVY1oDU8/upbXe66wbpK', 'dosen', NULL, '2017-09-06 08:33:07', '2017-09-06 08:33:07'),
(17, '6138', '$2y$10$INpinGMEFwgzs8i6xHcE3.k/gcVWvCLj4Fld0d6a4s.aTCKvyKUDq', 'mahasiswa', NULL, '2017-09-06 08:33:07', '2017-09-06 08:33:07'),
(18, 'D411', '$2y$10$8qcXmOMwC34q0ostAPN4JORIWRqT5lSVsiNRDV9OCbaIBMwia70eO', 'dosen', NULL, '2017-09-06 08:33:08', '2017-09-06 08:33:08'),
(19, '94633', '$2y$10$TNCbhrYw4kzSwrG97ajE0OLt9VmzZcVyamNjrQEEX/XCdEaDQaphe', 'mahasiswa', NULL, '2017-09-06 08:33:08', '2017-09-06 08:33:08'),
(20, 'D36', '$2y$10$XJt2/DFir9mbthPfKdY8/eaWF59oNxNIrpxfmHyITsbibEjy.wQOa', 'dosen', NULL, '2017-09-06 08:33:08', '2017-09-06 08:33:08'),
(21, '14777', '$2y$10$pj4tfHLzgqPEJqDb/WXunevsMZ4Q1BTgHn/Vx.05cQYZLRBmpU/MW', 'mahasiswa', NULL, '2017-09-06 08:33:09', '2017-09-06 08:33:09'),
(22, 'D231', '$2y$10$mQJnct1fRDTo58QJbgQfBeKh5LKpZdRS72lff9j6DWXWQO/zKrej6', 'dosen', NULL, '2017-09-06 08:33:09', '2017-09-06 08:33:09'),
(23, '93508', '$2y$10$zmkFwIyQodjvACtMxb6V5.CwQNemdLIdgyfWLvHX4mZWFhxQUp5gm', 'mahasiswa', NULL, '2017-09-06 08:33:09', '2017-09-06 08:33:09'),
(24, 'D684', '$2y$10$iHjdHLZG6zfUWH/rskSaPeDePdiiswROJgICWBQKvW3YYW3c3JCxu', 'dosen', NULL, '2017-09-06 08:33:10', '2017-09-06 08:33:10'),
(25, '77087', '$2y$10$8mB0FoKsY/8hrhiS9ymSqO/2r4SvQ1q3FY5HkxNTwqJIH0dAo5/tu', 'mahasiswa', NULL, '2017-09-06 08:33:10', '2017-09-06 08:33:10'),
(26, 'D292', '$2y$10$C4PRa498G7X.df98NCRE7.62O6dWEUxcYMmpVVBT9IbbTYk./tXhu', 'dosen', NULL, '2017-09-06 08:33:10', '2017-09-06 08:33:10'),
(27, '64792', '$2y$10$g.daGq.TfordYqPuq7CgvuLHb/RRtVydaiRrShJZ3LDcnnkbkEnJC', 'mahasiswa', NULL, '2017-09-06 08:33:11', '2017-09-06 08:33:11'),
(28, 'D656', '$2y$10$fXdKyGBm2/tBPeU0WxVXaODfacBhZCXai7LdlCD25EKHqSo2fZ9Ba', 'dosen', NULL, '2017-09-06 08:33:11', '2017-09-06 08:33:11'),
(29, '1110', '$2y$10$5Wa8KGTMYeVdJD7MVCpaRekZjeEsfTD4l/9CgpRWXrVg2lAiq2TTC', 'mahasiswa', 'NaHyZLjHiiYrY1UGydC0CRfbVQVqilYLd4kAIln4CvkHa55u2KR1NwImUlkd', '2017-09-06 08:33:12', '2017-09-09 08:18:27'),
(30, 'D800', '$2y$10$HJebv8dkPgI2rJb6Yak49uLFjUuvm9SfgK097yHzc1oXyY.B5YYVm', 'dosen', NULL, '2017-09-06 08:33:12', '2017-09-06 08:33:12'),
(31, '871', '$2y$10$7maXlPU616ihj8iNSKuluOSpUluHD9LEq25JV.aDTNACOujWHR5O.', 'mahasiswa', NULL, '2017-09-06 08:33:12', '2017-09-06 08:33:12'),
(32, 'D490', '$2y$10$hxe7414HbQtMB7ask3XUAeetSKAXEymeZDzA620tbi0WeqeJtlfxq', 'dosen', NULL, '2017-09-06 08:33:13', '2017-09-06 08:33:13'),
(33, '82825', '$2y$10$JHIXG3Bke2hTQn31NkWtfu6z5seeaa9i1Q3cvnhIMNvVSzyP5X21O', 'mahasiswa', NULL, '2017-09-06 08:33:13', '2017-09-06 08:33:13'),
(34, 'D992', '$2y$10$hMBFJjSxMnjpaLfhJQb/E.nq8gHEOZu5smKLUXrBLZ1bJmNtxTX4u', 'dosen', NULL, '2017-09-06 08:33:13', '2017-09-06 08:33:13'),
(35, '56161', '$2y$10$eZVtBx2Q5JzFmSbesVpZyuKwyVfhzZyx7SyJkmMPtFWRQ53rOAbL6', 'mahasiswa', NULL, '2017-09-06 08:33:14', '2017-09-06 08:33:14'),
(36, 'D879', '$2y$10$wgrXzBSd8/0weooW9c9cFuR1vvDRZrx1K08n6X7Rs6Q/tzjCG7xy2', 'dosen', NULL, '2017-09-06 08:33:14', '2017-09-06 08:33:14'),
(37, '97995', '$2y$10$6gIv9Y6k6i90yufTO1N5dOhNQ9fWZr0qfdfaMHS.6i.7mxUMV7Rqa', 'mahasiswa', NULL, '2017-09-06 08:33:14', '2017-09-06 08:33:14'),
(38, 'D151', '$2y$10$WDx5wcM282/1vgLg9Z0lPupwwlzT7OAgWlR4PX4QoheazaFLq9ay2', 'dosen', NULL, '2017-09-06 08:33:15', '2017-09-06 08:33:15'),
(39, '16569', '$2y$10$8DSm7PRaBLcEecLPoDTC3O8DdB7CLQYRo1CX1fBXhg7hCx5BlcIMu', 'mahasiswa', NULL, '2017-09-06 08:33:15', '2017-09-06 08:33:15'),
(40, 'D220', '$2y$10$5fLEV2hKGI5nBoExZ.Lau.MqwG0dyLUYvVExIeJ1uUDgPnDPFb0sO', 'dosen', NULL, '2017-09-06 08:33:15', '2017-09-06 08:33:15'),
(41, '47896', '$2y$10$.Qjoce/Zvc577apGH37Lq.aT5E.mG5LJizNH9eRoYbgnIbZGGGH7C', 'mahasiswa', NULL, '2017-09-06 08:33:15', '2017-09-06 08:33:15'),
(42, '123456789', '$2y$10$xUtnHf0vR01qyoQzDkp5GO91QOuniaglF39eiLXheaf6gduI73L8e', 'mahasiswa', 'SaRU3Kcq2h3FMJHWq4KWqZDRLAjovPUke7TATrJ1oTpANOyHyRWQDlojC88I', '2017-09-07 09:38:36', '2017-09-17 07:33:40'),
(43, '12345678', '$2y$10$aeNX5HC9itp88hYQuu4tCextA5Ft0.YoPjXvX/IS.vRD38tmrw.LO', 'mahasiswa', NULL, '2017-09-07 10:06:35', '2017-09-07 10:06:35'),
(44, '11111', '$2y$10$5m9kAceldgleTdc8SJvioOrj9fVI30EkspIBVjyiwVEVG5zTMJTWW', 'mahasiswa', '0H3SzVa71HRz6YMn6HjAr5OnMBQXRYeIrvqvznVEYxzVs9OblBgHYSMTViN6', '2017-09-07 10:23:12', '2017-09-07 10:26:52'),
(45, '12345', '$2y$10$hRPaj0duGQo2FeE8MMtqm.1iWsUVL7dF.Fb0GAtrVBSBp00VZmA8m', 'mahasiswa', 'U5yCy5Lq1XsQzTQp0xbm4EFUjJfO7FmysYDnQIYHViQUvHwhKckNJAzZahen', '2017-09-08 08:41:22', '2017-09-08 08:42:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `tbl_bobot`
--
ALTER TABLE `tbl_bobot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_dosen`
--
ALTER TABLE `tbl_dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_evaluasi`
--
ALTER TABLE `tbl_evaluasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_krs`
--
ALTER TABLE `tbl_krs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_krs_detil`
--
ALTER TABLE `tbl_krs_detil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_loker`
--
ALTER TABLE `tbl_loker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_mk`
--
ALTER TABLE `tbl_mk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ruang`
--
ALTER TABLE `tbl_ruang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_thnajaran`
--
ALTER TABLE `tbl_thnajaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_tracer`
--
ALTER TABLE `tbl_tracer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_bobot`
--
ALTER TABLE `tbl_bobot`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_dosen`
--
ALTER TABLE `tbl_dosen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tbl_evaluasi`
--
ALTER TABLE `tbl_evaluasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tbl_krs`
--
ALTER TABLE `tbl_krs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_krs_detil`
--
ALTER TABLE `tbl_krs_detil`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_loker`
--
ALTER TABLE `tbl_loker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `tbl_mk`
--
ALTER TABLE `tbl_mk`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_ruang`
--
ALTER TABLE `tbl_ruang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tbl_thnajaran`
--
ALTER TABLE `tbl_thnajaran`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tbl_tracer`
--
ALTER TABLE `tbl_tracer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
