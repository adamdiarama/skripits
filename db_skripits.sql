-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2018 at 12:45 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_skripits`
--

-- --------------------------------------------------------

--
-- Table structure for table `evaluasi`
--

CREATE TABLE IF NOT EXISTS `evaluasi` (
`id` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `id_materi` int(11) NOT NULL,
  `judul_evaluasi` varchar(255) NOT NULL,
  `waktu` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluasi`
--

INSERT INTO `evaluasi` (`id`, `id_mapel`, `id_materi`, `judul_evaluasi`, `waktu`) VALUES
(1, 1, 1, 'Pre-Test', 30);

-- --------------------------------------------------------

--
-- Table structure for table `kontrak_mapel`
--

CREATE TABLE IF NOT EXISTS `kontrak_mapel` (
`id` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontrak_mapel`
--

INSERT INTO `kontrak_mapel` (`id`, `id_siswa`, `id_mapel`) VALUES
(3, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `latihan`
--

CREATE TABLE IF NOT EXISTS `latihan` (
`id` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `id_materi` int(11) NOT NULL,
  `judul` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `latihan`
--

INSERT INTO `latihan` (`id`, `id_mapel`, `id_materi`, `judul`) VALUES
(1, 1, 1, 'Latihan 1');

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

CREATE TABLE IF NOT EXISTS `mata_pelajaran` (
`id` int(11) NOT NULL,
  `nama_mapel` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`id`, `nama_mapel`, `deskripsi`) VALUES
(1, 'Pemrograman Dasar', 'mata pelajaran pemrograman dasar'),
(2, 'Sistem Operasi Jaringan', 'mata pelajaran sistem operasi jaringan');

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE IF NOT EXISTS `materi` (
`id` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `judul_materi` varchar(255) NOT NULL,
  `deksripsi` varchar(255) NOT NULL,
  `location` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id`, `id_mapel`, `judul_materi`, `deksripsi`, `location`) VALUES
(1, 1, 'Percabangan', 'Materi mengenai percabangan', 'percabangan.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_siswa`
--

CREATE TABLE IF NOT EXISTS `nilai_siswa` (
`id` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `id_materi` int(11) NOT NULL,
  `latihan1_v1` int(11) NOT NULL,
  `latihan1_v2` int(11) NOT NULL,
  `latihan1_v3` int(11) NOT NULL,
  `ket_latihan1` varchar(10) NOT NULL,
  `latihan2_v1` int(11) NOT NULL,
  `latihan2_v2` int(11) NOT NULL,
  `latihan2_v3` int(11) NOT NULL,
  `ket_latihan2` varchar(10) NOT NULL,
  `latihan3_v1` int(11) NOT NULL,
  `latihan3_v2` int(11) NOT NULL,
  `latihan3_v3` int(11) NOT NULL,
  `ket_latihan3` varchar(10) NOT NULL,
  `hasil_evaluasi` int(11) NOT NULL,
  `ket_hasil_evaluasi` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_siswa`
--

INSERT INTO `nilai_siswa` (`id`, `id_siswa`, `id_mapel`, `id_materi`, `latihan1_v1`, `latihan1_v2`, `latihan1_v3`, `ket_latihan1`, `latihan2_v1`, `latihan2_v2`, `latihan2_v3`, `ket_latihan2`, `latihan3_v1`, `latihan3_v2`, `latihan3_v3`, `ket_latihan3`, `hasil_evaluasi`, `ket_hasil_evaluasi`) VALUES
(1, 2, 1, 1, 5, 0, 0, 'cukup', 1, 0, 0, 'baik', 3, 0, 0, 'baik', 88, 'baik'),
(2, 2, 1, 1, 5, 0, 0, 'cukup', 1, 0, 0, 'baik', 3, 0, 0, 'baik', 88, 'baik'),
(3, 2, 1, 1, 4, 0, 0, 'cukup', 5, 0, 0, 'cukup', 1, 0, 0, 'baik', 10, 'kurang'),
(4, 2, 1, 1, 10, 0, 0, 'kurang', 10, 0, 0, 'kurang', 5, 0, 0, 'cukup', 88, 'baik'),
(5, 2, 1, 1, 3, 0, 0, 'baik', 2, 0, 0, 'baik', 5, 0, 0, 'cukup', 31, 'kurang'),
(6, 2, 1, 1, 7, 0, 0, 'kurang', 6, 0, 0, 'cukup', 5, 0, 0, 'cukup', 50, 'cukup'),
(7, 2, 1, 1, 1, 0, 0, 'baik', 6, 0, 0, 'cukup', 1, 0, 0, 'baik', 70, 'baik'),
(8, 2, 1, 1, 7, 0, 0, 'kurang', 10, 0, 0, 'kurang', 8, 0, 0, 'kurang', 52, 'cukup'),
(9, 2, 1, 1, 6, 0, 0, 'cukup', 8, 0, 0, 'kurang', 10, 0, 0, 'kurang', 67, 'baik'),
(10, 2, 1, 1, 5, 0, 0, 'cukup', 9, 0, 0, 'kurang', 8, 0, 0, 'kurang', 45, 'cukup'),
(11, 2, 1, 1, 1, 0, 0, 'baik', 8, 0, 0, 'kurang', 1, 0, 0, 'baik', 93, 'baik'),
(12, 2, 1, 1, 3, 0, 0, 'baik', 2, 0, 0, 'baik', 5, 0, 0, 'cukup', 41, 'cukup'),
(13, 2, 1, 1, 9, 0, 0, 'kurang', 2, 0, 0, 'baik', 7, 0, 0, 'kurang', 39, 'cukup'),
(14, 2, 1, 1, 4, 0, 0, 'cukup', 2, 0, 0, 'baik', 1, 0, 0, 'baik', 50, 'cukup'),
(15, 2, 1, 1, 3, 0, 0, 'baik', 6, 0, 0, 'cukup', 5, 0, 0, 'cukup', 37, 'cukup'),
(16, 2, 1, 1, 3, 0, 0, 'cukup', 5, 0, 0, 'cukup', 8, 0, 0, 'kurang', 60, 'cukup'),
(17, 2, 1, 1, 3, 0, 0, 'baik', 1, 0, 0, 'baik', 8, 0, 0, 'kurang', 6, 'kurang'),
(18, 2, 1, 1, 1, 0, 0, 'baik', 4, 0, 0, 'cukup', 10, 0, 0, 'kurang', 32, 'kurang'),
(19, 2, 1, 1, 7, 0, 0, 'kurang', 3, 0, 0, 'baik', 10, 0, 0, 'kurang', 18, 'kurang'),
(20, 2, 1, 1, 1, 0, 0, 'baik', 3, 0, 0, 'baik', 4, 0, 0, 'cukup', 57, 'cukup'),
(21, 2, 1, 1, 10, 0, 0, 'kurang', 1, 0, 0, 'baik', 8, 0, 0, 'kurang', 72, 'baik'),
(22, 2, 1, 1, 1, 0, 0, 'baik', 9, 0, 0, 'kurang', 4, 0, 0, 'cukup', 9, 'kurang'),
(23, 2, 1, 1, 5, 0, 0, 'cukup', 1, 0, 0, 'baik', 6, 0, 0, 'cukup', 72, 'baik'),
(24, 2, 1, 1, 9, 0, 0, 'kurang', 2, 0, 0, 'baik', 10, 0, 0, 'kurang', 79, 'baik'),
(25, 2, 1, 1, 1, 0, 0, 'baik', 5, 0, 0, 'cukup', 10, 0, 0, 'kurang', 57, 'cukup'),
(26, 2, 1, 1, 2, 0, 0, 'baik', 1, 0, 0, 'baik', 10, 0, 0, 'kurang', 18, 'kurang'),
(27, 2, 1, 1, 5, 0, 0, 'cukup', 4, 0, 0, 'cukup', 7, 0, 0, 'kurang', 98, 'baik'),
(28, 2, 1, 1, 8, 0, 0, 'kurang', 3, 0, 0, 'baik', 2, 0, 0, 'baik', 54, 'cukup'),
(29, 2, 1, 1, 6, 0, 0, 'cukup', 9, 0, 0, 'kurang', 4, 0, 0, 'cukup', 55, 'cukup'),
(30, 2, 1, 1, 10, 0, 0, 'kurang', 6, 0, 0, 'cukup', 6, 0, 0, 'cukup', 46, 'cukup'),
(31, 2, 1, 1, 7, 0, 0, 'kurang', 2, 0, 0, 'baik', 7, 0, 0, 'kurang', 30, 'kurang'),
(32, 2, 1, 1, 5, 0, 0, 'cukup', 8, 0, 0, 'kurang', 2, 0, 0, 'baik', 32, 'kurang'),
(33, 2, 1, 1, 10, 0, 0, 'kurang', 1, 0, 0, 'baik', 8, 0, 0, 'kurang', 45, 'cukup'),
(34, 2, 1, 1, 10, 0, 0, 'kurang', 6, 0, 0, 'cukup', 2, 0, 0, 'baik', 70, 'baik'),
(35, 2, 1, 1, 10, 0, 0, 'kurang', 9, 0, 0, 'kurang', 5, 0, 0, 'cukup', 33, 'kurang'),
(36, 2, 1, 1, 5, 0, 0, 'cukup', 3, 0, 0, 'baik', 9, 0, 0, 'kurang', 100, 'baik'),
(37, 2, 1, 1, 5, 0, 0, 'cukup', 9, 0, 0, 'kurang', 7, 0, 0, 'kurang', 23, 'kurang'),
(38, 2, 1, 1, 3, 0, 0, 'baik', 4, 0, 0, 'cukup', 2, 0, 0, 'baik', 33, 'kurang'),
(39, 2, 1, 1, 3, 0, 0, 'baik', 8, 0, 0, 'kurang', 8, 0, 0, 'kurang', 65, 'baik'),
(40, 2, 1, 1, 2, 0, 0, 'baik', 6, 0, 0, 'cukup', 2, 0, 0, 'baik', 50, 'cukup'),
(41, 2, 1, 1, 9, 0, 0, 'kurang', 1, 0, 0, 'baik', 8, 0, 0, 'kurang', 47, 'cukup'),
(42, 2, 1, 1, 2, 0, 0, 'baik', 2, 0, 0, 'baik', 2, 0, 0, 'baik', 86, 'baik'),
(43, 2, 1, 1, 10, 0, 0, 'kurang', 1, 0, 0, 'baik', 1, 0, 0, 'baik', 26, 'kurang'),
(44, 2, 1, 1, 3, 0, 0, 'baik', 9, 0, 0, 'kurang', 5, 0, 0, 'cukup', 41, 'cukup'),
(45, 2, 1, 1, 1, 0, 0, 'baik', 2, 0, 0, 'baik', 3, 0, 0, 'baik', 58, 'cukup'),
(46, 2, 1, 1, 8, 0, 0, 'kurang', 2, 0, 0, 'baik', 5, 0, 0, 'cukup', 23, 'kurang'),
(47, 2, 1, 1, 9, 0, 0, 'kurang', 7, 0, 0, 'kurang', 8, 0, 0, 'kurang', 28, 'kurang'),
(48, 2, 1, 1, 7, 0, 0, 'kurang', 2, 0, 0, 'baik', 2, 0, 0, 'baik', 36, 'cukup'),
(49, 2, 1, 1, 1, 0, 0, 'baik', 4, 0, 0, 'cukup', 6, 0, 0, 'cukup', 79, 'baik'),
(50, 2, 1, 1, 8, 0, 0, 'kurang', 7, 0, 0, 'kurang', 6, 0, 0, 'cukup', 78, 'baik'),
(51, 2, 1, 1, 1, 0, 0, 'baik', 9, 0, 0, 'kurang', 4, 0, 0, 'cukup', 7, 'kurang'),
(52, 2, 1, 1, 10, 0, 0, 'kurang', 8, 0, 0, 'kurang', 5, 0, 0, 'cukup', 84, 'baik'),
(53, 2, 1, 1, 8, 0, 0, 'kurang', 4, 0, 0, 'cukup', 1, 0, 0, 'baik', 37, 'cukup'),
(54, 2, 1, 1, 10, 0, 0, 'kurang', 2, 0, 0, 'baik', 2, 0, 0, 'baik', 32, 'kurang'),
(55, 2, 1, 1, 5, 0, 0, 'cukup', 10, 0, 0, 'kurang', 3, 0, 0, 'baik', 24, 'kurang'),
(56, 2, 1, 1, 6, 0, 0, 'cukup', 8, 0, 0, 'kurang', 10, 0, 0, 'kurang', 85, 'baik'),
(57, 2, 1, 1, 8, 0, 0, 'kurang', 7, 0, 0, 'kurang', 9, 0, 0, 'kurang', 87, 'baik'),
(58, 2, 1, 1, 6, 0, 0, 'cukup', 5, 0, 0, 'cukup', 5, 0, 0, 'cukup', 4, 'kurang'),
(59, 2, 1, 1, 9, 0, 0, 'kurang', 3, 0, 0, 'baik', 4, 0, 0, 'cukup', 31, 'kurang'),
(60, 2, 1, 1, 5, 0, 0, 'cukup', 4, 0, 0, 'cukup', 8, 0, 0, 'kurang', 95, 'baik'),
(61, 2, 1, 1, 8, 0, 0, 'kurang', 1, 0, 0, 'baik', 2, 0, 0, 'baik', 32, 'kurang'),
(62, 2, 1, 1, 6, 0, 0, 'cukup', 4, 0, 0, 'cukup', 3, 0, 0, 'baik', 46, 'cukup'),
(63, 2, 1, 1, 7, 0, 0, 'kurang', 1, 0, 0, 'baik', 1, 0, 0, 'baik', 34, 'kurang'),
(64, 2, 1, 1, 4, 0, 0, 'cukup', 8, 0, 0, 'kurang', 8, 0, 0, 'kurang', 67, 'baik'),
(65, 2, 1, 1, 5, 0, 0, 'cukup', 7, 0, 0, 'kurang', 2, 0, 0, 'baik', 22, 'kurang'),
(66, 2, 1, 1, 7, 0, 0, 'kurang', 6, 0, 0, 'cukup', 10, 0, 0, 'kurang', 2, 'kurang'),
(67, 2, 1, 1, 7, 0, 0, 'kurang', 4, 0, 0, 'cukup', 10, 0, 0, 'kurang', 49, 'cukup'),
(68, 2, 1, 1, 5, 0, 0, 'cukup', 5, 0, 0, 'cukup', 4, 0, 0, 'cukup', 69, 'baik'),
(69, 2, 1, 1, 4, 0, 0, 'cukup', 7, 0, 0, 'kurang', 10, 0, 0, 'kurang', 20, 'kurang'),
(70, 2, 1, 1, 10, 0, 0, 'kurang', 8, 0, 0, 'kurang', 2, 0, 0, 'baik', 18, 'kurang'),
(71, 2, 1, 1, 9, 0, 0, 'kurang', 5, 0, 0, 'cukup', 2, 0, 0, 'baik', 33, 'kurang'),
(72, 2, 1, 1, 10, 0, 0, 'kurang', 2, 0, 0, 'baik', 6, 0, 0, 'cukup', 10, 'kurang'),
(73, 2, 1, 1, 10, 0, 0, 'kurang', 9, 0, 0, 'kurang', 5, 0, 0, 'cukup', 32, 'kurang'),
(74, 2, 1, 1, 10, 0, 0, 'kurang', 4, 0, 0, 'cukup', 10, 0, 0, 'kurang', 26, 'kurang'),
(75, 2, 1, 1, 9, 0, 0, 'kurang', 6, 0, 0, 'cukup', 6, 0, 0, 'cukup', 11, 'kurang'),
(76, 2, 1, 1, 4, 0, 0, 'cukup', 5, 0, 0, 'cukup', 1, 0, 0, 'baik', 12, 'kurang'),
(77, 2, 1, 1, 9, 0, 0, 'kurang', 1, 0, 0, 'baik', 2, 0, 0, 'baik', 41, 'cukup'),
(78, 2, 1, 1, 6, 0, 0, 'cukup', 4, 0, 0, 'cukup', 6, 0, 0, 'cukup', 65, 'baik'),
(79, 2, 1, 1, 5, 0, 0, 'cukup', 6, 0, 0, 'cukup', 5, 0, 0, 'cukup', 18, 'kurang'),
(80, 2, 1, 1, 5, 0, 0, 'cukup', 10, 0, 0, 'kurang', 6, 0, 0, 'cukup', 95, 'baik'),
(81, 2, 1, 1, 8, 0, 0, 'kurang', 4, 0, 0, 'cukup', 10, 0, 0, 'kurang', 66, 'baik'),
(82, 2, 1, 1, 5, 0, 0, 'cukup', 2, 0, 0, 'baik', 9, 0, 0, 'kurang', 40, 'cukup'),
(83, 2, 1, 1, 6, 0, 0, 'cukup', 7, 0, 0, 'kurang', 6, 0, 0, 'cukup', 14, 'kurang'),
(84, 2, 1, 1, 4, 0, 0, 'cukup', 5, 0, 0, 'cukup', 1, 0, 0, 'baik', 18, 'kurang'),
(85, 2, 1, 1, 6, 0, 0, 'cukup', 2, 0, 0, 'baik', 8, 0, 0, 'kurang', 4, 'kurang'),
(86, 2, 1, 1, 6, 0, 0, 'cukup', 10, 0, 0, 'kurang', 3, 0, 0, 'baik', 51, 'cukup'),
(87, 2, 1, 1, 9, 0, 0, 'kurang', 7, 0, 0, 'kurang', 2, 0, 0, 'baik', 13, 'kurang'),
(88, 2, 1, 1, 5, 0, 0, 'cukup', 5, 0, 0, 'cukup', 4, 0, 0, 'cukup', 51, 'cukup'),
(89, 2, 1, 1, 8, 0, 0, 'kurang', 9, 0, 0, 'kurang', 5, 0, 0, 'cukup', 8, 'kurang'),
(90, 2, 1, 1, 8, 0, 0, 'kurang', 8, 0, 0, 'kurang', 2, 0, 0, 'baik', 68, 'baik'),
(91, 2, 1, 1, 10, 0, 0, 'kurang', 6, 0, 0, 'cukup', 3, 0, 0, 'baik', 76, 'baik'),
(92, 2, 1, 1, 7, 0, 0, 'kurang', 1, 0, 0, 'baik', 1, 0, 0, 'baik', 70, 'baik'),
(93, 2, 1, 1, 6, 0, 0, 'cukup', 5, 0, 0, 'cukup', 1, 0, 0, 'baik', 42, 'cukup'),
(94, 2, 1, 1, 10, 0, 0, 'kurang', 9, 0, 0, 'kurang', 2, 0, 0, 'baik', 41, 'cukup'),
(95, 2, 1, 1, 10, 0, 0, 'kurang', 7, 0, 0, 'kurang', 9, 0, 0, 'kurang', 7, 'kurang'),
(96, 2, 1, 1, 5, 0, 0, 'cukup', 7, 0, 0, 'kurang', 4, 0, 0, 'cukup', 81, 'baik'),
(97, 2, 1, 1, 8, 0, 0, 'kurang', 2, 0, 0, 'baik', 7, 0, 0, 'kurang', 85, 'baik'),
(98, 2, 1, 1, 2, 0, 0, 'baik', 6, 0, 0, 'cukup', 10, 0, 0, 'kurang', 18, 'kurang'),
(99, 2, 1, 1, 4, 0, 0, 'cukup', 6, 0, 0, 'cukup', 7, 0, 0, 'kurang', 8, 'kurang'),
(100, 2, 1, 1, 10, 0, 0, 'kurang', 7, 0, 0, 'kurang', 7, 0, 0, 'kurang', 36, 'cukup');

-- --------------------------------------------------------

--
-- Table structure for table `soalevaluasi`
--

CREATE TABLE IF NOT EXISTS `soalevaluasi` (
`id` int(11) NOT NULL,
  `id_evaluasi` int(11) NOT NULL,
  `no_soal` int(11) NOT NULL,
  `pertanyaan` text NOT NULL,
  `opsi_a` text NOT NULL,
  `opsi_b` text NOT NULL,
  `opsi_c` text NOT NULL,
  `opsi_d` text NOT NULL,
  `opsi_e` text NOT NULL,
  `jawaban_benar` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soalevaluasi`
--

INSERT INTO `soalevaluasi` (`id`, `id_evaluasi`, `no_soal`, `pertanyaan`, `opsi_a`, `opsi_b`, `opsi_c`, `opsi_d`, `opsi_e`, `jawaban_benar`) VALUES
(1, 1, 1, 'Soal Nomor 1', 'Benar', 'Salah', 'Salah', 'Salah', 'Salah', 'Benar'),
(2, 1, 2, 'Soal Nomor 2', 'Benar', 'Salah', 'Salah', 'Salah', 'Salah', 'Benar'),
(3, 1, 3, 'Soal Nomor 3', 'Salah', 'Benar', 'Salah', 'Salah', 'Salah', 'Benar'),
(4, 1, 4, 'Soal Nomor 4', 'Salah', 'Benar', 'Salah', 'Salah', 'Salah', 'Benar'),
(5, 1, 5, 'Soal No 5', 'Salah', 'Salah', 'Benar', 'Salah', 'Salah', 'Benar'),
(6, 1, 6, 'Soal No 6', 'Salah', 'Salah', 'Benar', 'Salah', 'Salah', 'Benar'),
(7, 1, 7, 'Soal No 7', 'Salah', 'Salah', 'Salah', 'Benar', 'Salah', 'Benar'),
(8, 1, 8, 'Soal No 8', 'Salah', 'Salah', 'Salah', 'Benar', 'Salah', 'Benar'),
(9, 1, 9, 'Soal No 9', 'Salah', 'Salah', 'Salah', 'Salah', 'Benar', 'Benar'),
(10, 1, 10, 'Soal No 10', 'Salah', 'Salah', 'Salah', 'Salah', 'Benar', 'Benar');

-- --------------------------------------------------------

--
-- Table structure for table `t_its_hasil`
--

CREATE TABLE IF NOT EXISTS `t_its_hasil` (
`id` int(11) NOT NULL,
  `latihan1` varchar(255) NOT NULL,
  `latihan2` varchar(255) NOT NULL,
  `latihan3` varchar(255) NOT NULL,
  `hasil_baik` float NOT NULL,
  `hasil_cukup` float NOT NULL,
  `hasil_kurang` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_its_hasil`
--

INSERT INTO `t_its_hasil` (`id`, `latihan1`, `latihan2`, `latihan3`, `hasil_baik`, `hasil_cukup`, `hasil_kurang`) VALUES
(1, 'baik', 'baik', 'baik', 0.5, 0.5, 0),
(2, 'baik', 'baik', 'cukup', 0, 0.666667, 0.333333),
(3, 'baik', 'baik', 'kurang', 0, 0, 1),
(4, 'baik', 'cukup', 'baik', 0.333333, 0.333333, 0.333333),
(5, 'baik', 'cukup', 'cukup', 0.5, 0.5, 0),
(6, 'baik', 'cukup', 'kurang', 0, 0.333333, 0.666667),
(7, 'baik', 'kurang', 'baik', 1, 0, 0),
(8, 'baik', 'kurang', 'cukup', 0, 0.333333, 0.666667),
(9, 'baik', 'kurang', 'kurang', 1, 0, 0),
(10, 'cukup', 'baik', 'baik', 0.666667, 0.333333, 0),
(11, 'cukup', 'baik', 'cukup', 1, 0, 0),
(12, 'cukup', 'baik', 'kurang', 0.333333, 0.333333, 0.333333),
(13, 'cukup', 'cukup', 'baik', 0, 0.4, 0.6),
(14, 'cukup', 'cukup', 'cukup', 0.4, 0.2, 0.4),
(15, 'cukup', 'cukup', 'kurang', 0.5, 0.25, 0.25),
(16, 'cukup', 'kurang', 'baik', 0, 0.25, 0.75),
(17, 'cukup', 'kurang', 'cukup', 0.5, 0.25, 0.25),
(18, 'cukup', 'kurang', 'kurang', 0.5, 0.166667, 0.333333),
(19, 'kurang', 'baik', 'baik', 0.125, 0.375, 0.5),
(20, 'kurang', 'baik', 'cukup', 0, 0, 1),
(21, 'kurang', 'baik', 'kurang', 0.375, 0.375, 0.25),
(22, 'kurang', 'cukup', 'baik', 0.5, 0.25, 0.25),
(23, 'kurang', 'cukup', 'cukup', 0, 0.666667, 0.333333),
(24, 'kurang', 'cukup', 'kurang', 0.25, 0.25, 0.5),
(25, 'kurang', 'kurang', 'baik', 0.25, 0.25, 0.5),
(26, 'kurang', 'kurang', 'cukup', 0.5, 0, 0.5),
(27, 'kurang', 'kurang', 'kurang', 0.2, 0.4, 0.4);

-- --------------------------------------------------------

--
-- Table structure for table `t_its_lat2`
--

CREATE TABLE IF NOT EXISTS `t_its_lat2` (
`id` int(11) NOT NULL,
  `latihan1` varchar(255) NOT NULL,
  `lat2_baik` float NOT NULL,
  `lat2_cukup` float NOT NULL,
  `lat2_kurang` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_its_lat2`
--

INSERT INTO `t_its_lat2` (`id`, `latihan1`, `lat2_baik`, `lat2_cukup`, `lat2_kurang`) VALUES
(1, 'baik', 0.35, 0.4, 0.25),
(2, 'cukup', 0.2, 0.4, 0.4),
(3, 'kurang', 0.422222, 0.244444, 0.333333);

-- --------------------------------------------------------

--
-- Table structure for table `t_its_lat3`
--

CREATE TABLE IF NOT EXISTS `t_its_lat3` (
`id` int(11) NOT NULL,
  `latihan1` varchar(255) NOT NULL,
  `latihan2` varchar(255) NOT NULL,
  `lat3_baik` float NOT NULL,
  `lat3_cukup` float NOT NULL,
  `lat3_kurang` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_its_lat3`
--

INSERT INTO `t_its_lat3` (`id`, `latihan1`, `latihan2`, `lat3_baik`, `lat3_cukup`, `lat3_kurang`) VALUES
(1, 'baik', 'baik', 0.285714, 0.428571, 0.285714),
(2, 'baik', 'cukup', 0.375, 0.25, 0.375),
(3, 'baik', 'kurang', 0.2, 0.6, 0.2),
(4, 'cukup', 'baik', 0.428571, 0.142857, 0.428571),
(5, 'cukup', 'cukup', 0.357143, 0.357143, 0.285714),
(6, 'cukup', 'kurang', 0.285714, 0.285714, 0.428571),
(7, 'kurang', 'baik', 0.421053, 0.157895, 0.421053),
(8, 'kurang', 'cukup', 0.363636, 0.272727, 0.363636),
(9, 'kurang', 'kurang', 0.266667, 0.4, 0.333333);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(2, 'adamd', 'e69d272d66377ded1cc69b372cb29792', 1),
(3, 'siswa1', '013f0f67779f3b1686c604db150d12ea', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `evaluasi`
--
ALTER TABLE `evaluasi`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id_materi` (`id_materi`), ADD KEY `id_mapel` (`id_mapel`);

--
-- Indexes for table `kontrak_mapel`
--
ALTER TABLE `kontrak_mapel`
 ADD PRIMARY KEY (`id`), ADD KEY `id_siswa` (`id_siswa`), ADD KEY `id_mapel` (`id_mapel`);

--
-- Indexes for table `latihan`
--
ALTER TABLE `latihan`
 ADD PRIMARY KEY (`id`), ADD KEY `id_mapel` (`id_mapel`), ADD KEY `id_materi` (`id_materi`);

--
-- Indexes for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
 ADD PRIMARY KEY (`id`), ADD KEY `id_mapel` (`id_mapel`);

--
-- Indexes for table `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
 ADD PRIMARY KEY (`id`), ADD KEY `id_siswa` (`id_siswa`), ADD KEY `id_mapel` (`id_mapel`), ADD KEY `id_materi` (`id_materi`);

--
-- Indexes for table `soalevaluasi`
--
ALTER TABLE `soalevaluasi`
 ADD PRIMARY KEY (`id`), ADD KEY `id_evaluasi` (`id_evaluasi`);

--
-- Indexes for table `t_its_hasil`
--
ALTER TABLE `t_its_hasil`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_its_lat2`
--
ALTER TABLE `t_its_lat2`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_its_lat3`
--
ALTER TABLE `t_its_lat3`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `evaluasi`
--
ALTER TABLE `evaluasi`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kontrak_mapel`
--
ALTER TABLE `kontrak_mapel`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `latihan`
--
ALTER TABLE `latihan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `soalevaluasi`
--
ALTER TABLE `soalevaluasi`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `t_its_hasil`
--
ALTER TABLE `t_its_hasil`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `t_its_lat2`
--
ALTER TABLE `t_its_lat2`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `t_its_lat3`
--
ALTER TABLE `t_its_lat3`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `evaluasi`
--
ALTER TABLE `evaluasi`
ADD CONSTRAINT `evaluasi_ibfk_1` FOREIGN KEY (`id_mapel`) REFERENCES `mata_pelajaran` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `evaluasi_ibfk_2` FOREIGN KEY (`id_materi`) REFERENCES `materi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kontrak_mapel`
--
ALTER TABLE `kontrak_mapel`
ADD CONSTRAINT `fk_id_mapel` FOREIGN KEY (`id_mapel`) REFERENCES `mata_pelajaran` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `fk_id_siswa` FOREIGN KEY (`id_siswa`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `latihan`
--
ALTER TABLE `latihan`
ADD CONSTRAINT `latihan_ibfk_1` FOREIGN KEY (`id_mapel`) REFERENCES `mata_pelajaran` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `latihan_ibfk_2` FOREIGN KEY (`id_materi`) REFERENCES `materi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `materi`
--
ALTER TABLE `materi`
ADD CONSTRAINT `materi_ibfk_1` FOREIGN KEY (`id_mapel`) REFERENCES `mata_pelajaran` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
ADD CONSTRAINT `nilai_siswa_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `nilai_siswa_ibfk_2` FOREIGN KEY (`id_mapel`) REFERENCES `mata_pelajaran` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `nilai_siswa_ibfk_3` FOREIGN KEY (`id_materi`) REFERENCES `materi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `soalevaluasi`
--
ALTER TABLE `soalevaluasi`
ADD CONSTRAINT `soalevaluasi_ibfk_1` FOREIGN KEY (`id_evaluasi`) REFERENCES `evaluasi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
