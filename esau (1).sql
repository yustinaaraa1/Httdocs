-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2019 at 08:18 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `esau`
--

-- --------------------------------------------------------

--
-- Table structure for table `ambang_batas`
--

CREATE TABLE IF NOT EXISTS `ambang_batas` (
  `id_ambang_batas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_ambang_batas` enum('Sangat Sering','Cukup','Kurang') DEFAULT NULL,
  `batas_atas` int(11) DEFAULT NULL,
  `batas_bawah` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_ambang_batas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ambang_batas`
--

INSERT INTO `ambang_batas` (`id_ambang_batas`, `nama_ambang_batas`, `batas_atas`, `batas_bawah`) VALUES
(1, 'Sangat Sering', 6, 5),
(2, 'Cukup', 4, 3),
(3, 'Kurang', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `centroid_produk_temp`
--

CREATE TABLE IF NOT EXISTS `centroid_produk_temp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_group` int(11) DEFAULT NULL,
  `id_buku` int(11) DEFAULT NULL,
  `c1` int(11) DEFAULT NULL,
  `c2` int(11) DEFAULT NULL,
  `c3` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=281 ;

--
-- Dumping data for table `centroid_produk_temp`
--

INSERT INTO `centroid_produk_temp` (`id`, `id_group`, `id_buku`, `c1`, `c2`, `c3`) VALUES
(1, 1, 11, 1, 0, 0),
(2, 1, 12, 1, 0, 0),
(3, 1, 13, 1, 0, 0),
(4, 1, 14, 0, 0, 1),
(5, 1, 15, 1, 0, 0),
(6, 1, 16, 1, 0, 0),
(7, 1, 17, 1, 0, 0),
(8, 1, 18, 1, 0, 0),
(9, 1, 19, 1, 0, 0),
(10, 1, 20, 1, 0, 0),
(11, 1, 21, 1, 0, 0),
(12, 1, 22, 1, 0, 0),
(13, 1, 23, 0, 0, 1),
(14, 1, 24, 1, 0, 0),
(15, 1, 25, 1, 0, 0),
(16, 1, 26, 1, 0, 0),
(17, 1, 27, 1, 0, 0),
(18, 1, 28, 1, 0, 0),
(19, 1, 29, 0, 0, 1),
(20, 1, 30, 1, 0, 0),
(21, 1, 31, 0, 0, 1),
(22, 1, 32, 1, 0, 0),
(23, 1, 33, 1, 0, 0),
(24, 1, 34, 1, 0, 0),
(25, 1, 35, 1, 0, 0),
(26, 1, 36, 1, 0, 0),
(27, 1, 37, 1, 0, 0),
(28, 1, 38, 1, 0, 0),
(29, 1, 39, 0, 0, 1),
(30, 1, 40, 1, 0, 0),
(31, 1, 41, 1, 0, 0),
(32, 1, 42, 0, 0, 1),
(33, 1, 43, 0, 0, 1),
(34, 1, 44, 0, 0, 1),
(35, 1, 45, 0, 0, 1),
(36, 1, 46, 0, 0, 1),
(37, 1, 47, 0, 0, 1),
(38, 1, 48, 0, 0, 1),
(39, 1, 49, 0, 0, 1),
(40, 1, 50, 0, 0, 1),
(41, 2, 11, 1, 0, 0),
(42, 2, 12, 1, 0, 0),
(43, 2, 13, 0, 0, 1),
(44, 2, 14, 0, 0, 1),
(45, 2, 15, 0, 0, 1),
(46, 2, 16, 1, 0, 0),
(47, 2, 17, 1, 0, 0),
(48, 2, 18, 1, 0, 0),
(49, 2, 19, 0, 0, 1),
(50, 2, 20, 1, 0, 0),
(51, 2, 21, 0, 0, 1),
(52, 2, 22, 1, 0, 0),
(53, 2, 23, 0, 0, 1),
(54, 2, 24, 1, 0, 0),
(55, 2, 25, 1, 0, 0),
(56, 2, 26, 1, 0, 0),
(57, 2, 27, 1, 0, 0),
(58, 2, 28, 1, 0, 0),
(59, 2, 29, 0, 0, 1),
(60, 2, 30, 1, 0, 0),
(61, 2, 31, 0, 0, 1),
(62, 2, 32, 1, 0, 0),
(63, 2, 33, 1, 0, 0),
(64, 2, 34, 1, 0, 0),
(65, 2, 35, 1, 0, 0),
(66, 2, 36, 1, 0, 0),
(67, 2, 37, 1, 0, 0),
(68, 2, 38, 1, 0, 0),
(69, 2, 39, 0, 0, 1),
(70, 2, 40, 0, 0, 1),
(71, 2, 41, 0, 0, 1),
(72, 2, 42, 0, 1, 0),
(73, 2, 43, 0, 1, 0),
(74, 2, 44, 0, 1, 0),
(75, 2, 45, 0, 1, 0),
(76, 2, 46, 0, 1, 0),
(77, 2, 47, 0, 1, 0),
(78, 2, 48, 0, 1, 0),
(79, 2, 49, 0, 1, 0),
(80, 2, 50, 0, 1, 0),
(81, 3, 11, 1, 0, 0),
(82, 3, 12, 0, 0, 1),
(83, 3, 13, 0, 0, 1),
(84, 3, 14, 0, 0, 1),
(85, 3, 15, 0, 0, 1),
(86, 3, 16, 1, 0, 0),
(87, 3, 17, 1, 0, 0),
(88, 3, 18, 1, 0, 0),
(89, 3, 19, 0, 0, 1),
(90, 3, 20, 1, 0, 0),
(91, 3, 21, 0, 0, 1),
(92, 3, 22, 0, 0, 1),
(93, 3, 23, 0, 0, 1),
(94, 3, 24, 1, 0, 0),
(95, 3, 25, 0, 0, 1),
(96, 3, 26, 0, 0, 1),
(97, 3, 27, 1, 0, 0),
(98, 3, 28, 1, 0, 0),
(99, 3, 29, 0, 1, 0),
(100, 3, 30, 1, 0, 0),
(101, 3, 31, 0, 0, 1),
(102, 3, 32, 1, 0, 0),
(103, 3, 33, 1, 0, 0),
(104, 3, 34, 1, 0, 0),
(105, 3, 35, 1, 0, 0),
(106, 3, 36, 1, 0, 0),
(107, 3, 37, 1, 0, 0),
(108, 3, 38, 1, 0, 0),
(109, 3, 39, 0, 1, 0),
(110, 3, 40, 0, 0, 1),
(111, 3, 41, 0, 0, 1),
(112, 3, 42, 0, 1, 0),
(113, 3, 43, 0, 1, 0),
(114, 3, 44, 0, 1, 0),
(115, 3, 45, 0, 1, 0),
(116, 3, 46, 0, 1, 0),
(117, 3, 47, 0, 1, 0),
(118, 3, 48, 0, 1, 0),
(119, 3, 49, 0, 1, 0),
(120, 3, 50, 0, 1, 0),
(121, 4, 11, 0, 0, 1),
(122, 4, 12, 0, 0, 1),
(123, 4, 13, 0, 0, 1),
(124, 4, 14, 0, 0, 1),
(125, 4, 15, 0, 0, 1),
(126, 4, 16, 1, 0, 0),
(127, 4, 17, 0, 0, 1),
(128, 4, 18, 1, 0, 0),
(129, 4, 19, 0, 0, 1),
(130, 4, 20, 1, 0, 0),
(131, 4, 21, 0, 0, 1),
(132, 4, 22, 0, 0, 1),
(133, 4, 23, 0, 0, 1),
(134, 4, 24, 1, 0, 0),
(135, 4, 25, 0, 0, 1),
(136, 4, 26, 0, 0, 1),
(137, 4, 27, 1, 0, 0),
(138, 4, 28, 1, 0, 0),
(139, 4, 29, 0, 1, 0),
(140, 4, 30, 1, 0, 0),
(141, 4, 31, 0, 1, 0),
(142, 4, 32, 1, 0, 0),
(143, 4, 33, 1, 0, 0),
(144, 4, 34, 1, 0, 0),
(145, 4, 35, 0, 0, 1),
(146, 4, 36, 1, 0, 0),
(147, 4, 37, 0, 0, 1),
(148, 4, 38, 1, 0, 0),
(149, 4, 39, 0, 1, 0),
(150, 4, 40, 0, 0, 1),
(151, 4, 41, 0, 0, 1),
(152, 4, 42, 0, 1, 0),
(153, 4, 43, 0, 1, 0),
(154, 4, 44, 0, 1, 0),
(155, 4, 45, 0, 1, 0),
(156, 4, 46, 0, 1, 0),
(157, 4, 47, 0, 1, 0),
(158, 4, 48, 0, 1, 0),
(159, 4, 49, 0, 1, 0),
(160, 4, 50, 0, 1, 0),
(161, 5, 11, 0, 0, 1),
(162, 5, 12, 0, 0, 1),
(163, 5, 13, 0, 0, 1),
(164, 5, 14, 0, 0, 1),
(165, 5, 15, 0, 0, 1),
(166, 5, 16, 1, 0, 0),
(167, 5, 17, 0, 0, 1),
(168, 5, 18, 1, 0, 0),
(169, 5, 19, 0, 0, 1),
(170, 5, 20, 1, 0, 0),
(171, 5, 21, 0, 0, 1),
(172, 5, 22, 0, 0, 1),
(173, 5, 23, 0, 0, 1),
(174, 5, 24, 1, 0, 0),
(175, 5, 25, 0, 0, 1),
(176, 5, 26, 0, 0, 1),
(177, 5, 27, 1, 0, 0),
(178, 5, 28, 1, 0, 0),
(179, 5, 29, 0, 1, 0),
(180, 5, 30, 0, 0, 1),
(181, 5, 31, 0, 1, 0),
(182, 5, 32, 1, 0, 0),
(183, 5, 33, 1, 0, 0),
(184, 5, 34, 1, 0, 0),
(185, 5, 35, 0, 0, 1),
(186, 5, 36, 1, 0, 0),
(187, 5, 37, 0, 0, 1),
(188, 5, 38, 1, 0, 0),
(189, 5, 39, 0, 1, 0),
(190, 5, 40, 0, 0, 1),
(191, 5, 41, 0, 0, 1),
(192, 5, 42, 0, 1, 0),
(193, 5, 43, 0, 1, 0),
(194, 5, 44, 0, 1, 0),
(195, 5, 45, 0, 1, 0),
(196, 5, 46, 0, 1, 0),
(197, 5, 47, 0, 1, 0),
(198, 5, 48, 0, 1, 0),
(199, 5, 49, 0, 1, 0),
(200, 5, 50, 0, 1, 0),
(201, 6, 11, 0, 0, 1),
(202, 6, 12, 0, 0, 1),
(203, 6, 13, 0, 0, 1),
(204, 6, 14, 0, 0, 1),
(205, 6, 15, 0, 0, 1),
(206, 6, 16, 1, 0, 0),
(207, 6, 17, 0, 0, 1),
(208, 6, 18, 1, 0, 0),
(209, 6, 19, 0, 0, 1),
(210, 6, 20, 1, 0, 0),
(211, 6, 21, 0, 0, 1),
(212, 6, 22, 0, 0, 1),
(213, 6, 23, 0, 0, 1),
(214, 6, 24, 1, 0, 0),
(215, 6, 25, 0, 0, 1),
(216, 6, 26, 0, 0, 1),
(217, 6, 27, 1, 0, 0),
(218, 6, 28, 1, 0, 0),
(219, 6, 29, 0, 1, 0),
(220, 6, 30, 0, 0, 1),
(221, 6, 31, 0, 1, 0),
(222, 6, 32, 1, 0, 0),
(223, 6, 33, 1, 0, 0),
(224, 6, 34, 1, 0, 0),
(225, 6, 35, 0, 0, 1),
(226, 6, 36, 1, 0, 0),
(227, 6, 37, 0, 0, 1),
(228, 6, 38, 1, 0, 0),
(229, 6, 39, 0, 1, 0),
(230, 6, 40, 0, 0, 1),
(231, 6, 41, 0, 0, 1),
(232, 6, 42, 0, 1, 0),
(233, 6, 43, 0, 1, 0),
(234, 6, 44, 0, 1, 0),
(235, 6, 45, 0, 1, 0),
(236, 6, 46, 0, 1, 0),
(237, 6, 47, 0, 1, 0),
(238, 6, 48, 0, 1, 0),
(239, 6, 49, 0, 1, 0),
(240, 6, 50, 0, 1, 0),
(241, 7, 11, 0, 0, 1),
(242, 7, 12, 0, 0, 1),
(243, 7, 13, 0, 0, 1),
(244, 7, 14, 0, 0, 1),
(245, 7, 15, 0, 0, 1),
(246, 7, 16, 1, 0, 0),
(247, 7, 17, 0, 0, 1),
(248, 7, 18, 1, 0, 0),
(249, 7, 19, 0, 0, 1),
(250, 7, 20, 1, 0, 0),
(251, 7, 21, 0, 0, 1),
(252, 7, 22, 0, 0, 1),
(253, 7, 23, 0, 0, 1),
(254, 7, 24, 1, 0, 0),
(255, 7, 25, 0, 0, 1),
(256, 7, 26, 0, 0, 1),
(257, 7, 27, 1, 0, 0),
(258, 7, 28, 1, 0, 0),
(259, 7, 29, 0, 1, 0),
(260, 7, 30, 0, 0, 1),
(261, 7, 31, 0, 1, 0),
(262, 7, 32, 1, 0, 0),
(263, 7, 33, 1, 0, 0),
(264, 7, 34, 1, 0, 0),
(265, 7, 35, 0, 0, 1),
(266, 7, 36, 1, 0, 0),
(267, 7, 37, 0, 0, 1),
(268, 7, 38, 1, 0, 0),
(269, 7, 39, 0, 1, 0),
(270, 7, 40, 0, 0, 1),
(271, 7, 41, 0, 0, 1),
(272, 7, 42, 0, 1, 0),
(273, 7, 43, 0, 1, 0),
(274, 7, 44, 0, 1, 0),
(275, 7, 45, 0, 1, 0),
(276, 7, 46, 0, 1, 0),
(277, 7, 47, 0, 1, 0),
(278, 7, 48, 0, 1, 0),
(279, 7, 49, 0, 1, 0),
(280, 7, 50, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `centroid_temp`
--

CREATE TABLE IF NOT EXISTS `centroid_temp` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `c1_a` varchar(50) DEFAULT NULL,
  `c1_b` varchar(50) DEFAULT NULL,
  `c2_a` varchar(50) DEFAULT NULL,
  `c2_b` varchar(20) DEFAULT NULL,
  `c3_a` varchar(21) DEFAULT NULL,
  `c3_b` varchar(21) DEFAULT NULL,
  `rasio` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `centroid_temp`
--

INSERT INTO `centroid_temp` (`id`, `c1_a`, `c1_b`, `c2_a`, `c2_b`, `c3_a`, `c3_b`, `rasio`) VALUES
(1, '9.1923076923077', '9.1923076923077', '0', '0', '0.71428571428571', '0.71428571428571', 0.24274382146484),
(2, '10.75', '10.75', '0', '0', '3.0909090909091', '3.0909090909091', 0.83962467340421),
(3, '12.0625', '12.0625', '0.18181818181818', '0.18181818181818', '4.1538461538462', '4.1538461538462', 1.4657529636213),
(4, '13.583333333333', '13.583333333333', '0.33333333333333', '0.33333333333333', '5.125', '5.125', 2.0215498318398),
(5, '14', '14', '0.33333333333333', '0.33333333333333', '5.3529411764706', '5.3529411764706', 2.6453302063126),
(6, '14', '14', '0.33333333333333', '0.33333333333333', '5.3529411764706', '5.3529411764706', 2.7556803270172),
(7, '14', '14', '0.33333333333333', '0.33333333333333', '5.3529411764706', '5.3529411764706', 2.7556803270172);

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(200) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_lengkap`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE IF NOT EXISTS `tb_buku` (
  `id_buku` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) DEFAULT NULL,
  `sku` varchar(50) DEFAULT NULL,
  `judul_buku` varchar(200) DEFAULT NULL,
  `pengarang` varchar(200) DEFAULT NULL,
  `penerbit` varchar(50) DEFAULT NULL,
  `tahun_terbit` int(11) DEFAULT NULL,
  `jumlah_buku` int(11) DEFAULT NULL,
  `gambar_produk` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_buku`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `tb_buku`
--

INSERT INTO `tb_buku` (`id_buku`, `id_kategori`, `sku`, `judul_buku`, `pengarang`, `penerbit`, `tahun_terbit`, `jumlah_buku`, `gambar_produk`) VALUES
(11, 1, '978-979-3925-98-1', 'Buku Kerja Prinsip Disain Pembelajaran', 'Santi Maudiarti', 'Kencana', 2009, 1, NULL),
(12, 1, '979-9075-09-2', 'Dasar-Dasar Penguasaan Bahasa Inggris', 'Azhar Arsyad', 'Pustaka Pelajar', 2008, 1, NULL),
(13, 1, '979-692-196-0', 'Manajemen Berbasis sekolah', 'E. Mulyasa', 'PT.Remaja Rosda', 2011, 1, NULL),
(14, 1, '979-421-086-2', 'Pengantar Statistik Pendidikan', 'Anas Sudijono', 'PT. Raja Grafin', 2012, 1, NULL),
(15, 1, '978-602-8300-95-7', 'Menjadi Guru Inspiratif', 'Ngainun Naim', 'Pustaka Pelajar', 2011, 1, NULL),
(16, 1, '978-979-518-824-7', 'Profesi Keguruan', 'Soetjipto', 'PT. Rineka Cipt', 2012, 1, NULL),
(17, 1, '979-062-144-2', 'Penelitian Tindakan Kelas dalam Pengajaran Bahasa Inggris', 'Herudjati Purwo', 'PT. Indeks', 2010, 1, NULL),
(18, 1, '978-602-8432-78-8', 'Strategi Mengajar Bilingual', 'Astrid Triastar', 'Cerdas Pustaka', 2011, 1, NULL),
(19, 1, '979-3931-95-7', 'A Handbook of English Grammar', 'Imam Baehaqi', 'Cakrawala Ilmu', 2012, 1, NULL),
(20, 1, '978-602-98043-9-3', 'Complete English Grammar fo Everyone', 'Mettayana Anggu', 'Pelangi Indones', 2012, 1, NULL),
(21, 1, '978-602-7515-08-6', 'Manajemen Pendidikan Karakter', 'Novan Ardy Wiya', 'Pedagogia', 2012, 1, NULL),
(22, 1, '979-26-8544-8', 'Model Pembelajaran Berbasis Kognitif Moral', 'Sarbaini', 'Aswaja Pressind', 2012, 1, NULL),
(23, 1, '979-420-393-9', 'Asas-Asas Linguistik Umum', 'J. W. M. Verhaa', 'Gadjah Mada Uni', 2010, 1, NULL),
(24, 1, '978-979-670-151-3', 'Semantik', 'Aminuddin', 'Sinar Baru Alge', 2011, 1, NULL),
(25, 1, '979-2462-12-0', 'Test Your Word Power', 'Jerome Agel', 'Baca!', 2007, 1, NULL),
(26, 1, '978-602-191-213-3', 'Pedoman Pembelajaran & Instruksi Pendidikan', 'Kelvin Seifert', 'IRCiSod', 2012, 1, NULL),
(27, 1, '978-979-075-120-0', 'Sosiopragmatik', 'Kunjana Rahardi', 'Erlangga', 2009, 1, NULL),
(28, 1, '978-979-033-743-5', 'Dasar-dasar Analisis Sintaksis', 'J.D. Parera', 'Erlangga', 2009, 1, NULL),
(29, 1, '978-979-3984-44-5', 'Hakikat Linguistik Bandingan', 'Djoko Saryono', 'Adityamedia', 2011, 1, NULL),
(30, 1, '979-741-501-5', 'Schaum''s Outlines English Grammar', 'Eugene Ehrlich', 'Erlangga', 2004, 1, NULL),
(31, 2, '979-421-215-5', 'Kamus Psikologi', 'Kartini Kartono', 'Pioner Jaya', 2000, 1, NULL),
(32, 2, '979-421-215-6', 'Kamus Lengkap Psikologi', 'James P. Chapli', 'PT. RajaGrafind', 2005, 1, NULL),
(33, 2, '979-9327-33-4', 'Ensiklopedi Ekonomi, Bisnis & Manajemen', 'Liz Wiwiek Widi', 'PT. Delta Pamun', 1997, 2, NULL),
(34, 2, '979-416-761-4', 'Kamus Manajemen', 'B.N. Marbun', 'Pustaka Sinar H', 2003, 1, NULL),
(35, 2, '979-96446-6-6', 'Kamus Komputer dan Istilah Tehnologi Informasi', 'Jack Febrian', 'Informatika', 2002, 1, NULL),
(36, 2, '979-9550-42-4', 'Kamus Lengkap Jaringan Komputer', 'Tim Penelitian', 'Salemba Infotek', 2004, 1, NULL),
(37, 2, '979-8855-06-X', 'Ensiklopedi Matematika & Peradaban Manusia', 'Wahyudin', 'CV. Tarity Samu', 2003, 1, NULL),
(38, 2, '979-489-347-1', 'Kamus Pertanian Umum', 'TIM Penyusun Ka', 'Penebar Swadaya', 2008, 1, NULL),
(39, 2, '979-421-731-x', 'Ensiklopedi Ilmu-Ilmu Sosial 1', 'Adam Kuper', 'PT. RajaGrafind', 2000, 1, NULL),
(40, 2, '979-3858-08-7', 'Ensiklopedia', 'Abdul Mun', 'Grafindo Khazan', 2006, 1, NULL),
(41, 2, '0-8160-1901-0', 'Seri Manajemen Sumber Daya Manusia 1', 'A. Dale Timpe', 'PT. Elex Media', 2000, 1, NULL),
(42, 2, '0-8160-1462-0', 'Seri Manajemen Sumber Daya Manusia 2', 'A. Dale Timpe', 'PT. Elex Media', 2000, 1, NULL),
(43, 2, '0-8160-1460-4', 'Seri Manajemen Sumber Daya Manusia 3', 'A. Dale Timpe', 'PT. Elex Media', 2000, 1, NULL),
(44, 2, '0-8160-1461-2', 'Seri Manajemen Sumber Daya Manusia 4', 'A. Dale Timpe', 'PT. Elex Media', 2000, 1, NULL),
(45, 2, '979-537-038-3', 'Seri Manajemen Sumber Daya Manusia 5', 'A. Dale Timpe', 'PT. Elex Media', 2000, 1, NULL),
(46, 2, '979-421-732-8', 'Ensiklopedi Fiqih Umar Bin Khathab ra', 'Muhammad Rawwas', 'PT RajaGrafindo', 1999, 1, NULL),
(47, 2, '979-9226-18-X', 'Ensiklopedi Tematis Dunia Islam 1', 'Dr. Taufik Abdu', 'PT. Ichtiar Bar', 2003, 1, NULL),
(48, 2, '979-9226-19-8', 'Ensiklopedi Tematis Dunia Islam 2', 'Dr. Taufik Abdu', 'PT. Ichtiar Bar', 2003, 1, NULL),
(49, 2, '979-9226-20-1', 'Ensiklopedi Tematis Dunia Islam 3', 'Dr. Taufik Abdu', 'PT. Ichtiar Bar', 2003, 1, NULL),
(50, 2, '979-9226-21-X', 'Ensiklopedi Tematis Dunia Islam 4', 'Dr. Taufik Abdu', 'PT. Ichtiar Bar', 2003, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE IF NOT EXISTS `tb_kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Inggris'),
(2, 'Referensi'),
(3, 'Umum'),
(4, 'Indonesia'),
(5, 'PPS'),
(6, 'Manajemen');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pinjam`
--

CREATE TABLE IF NOT EXISTS `tb_pinjam` (
  `id_pinjam` int(11) NOT NULL AUTO_INCREMENT,
  `id_buku` int(11) DEFAULT NULL,
  `bulan` enum('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember') DEFAULT NULL,
  `tahun` int(11) DEFAULT NULL,
  `jumlah_dipinjam` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_pinjam`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=80 ;

--
-- Dumping data for table `tb_pinjam`
--

INSERT INTO `tb_pinjam` (`id_pinjam`, `id_buku`, `bulan`, `tahun`, `jumlah_dipinjam`) VALUES
(49, 11, 'Agustus', 2019, 8),
(50, 12, 'Agustus', 2019, 6),
(51, 13, 'Agustus', 2019, 4),
(52, 14, 'Agustus', 2019, 3),
(53, 15, 'Agustus', 2019, 4),
(54, 16, 'Agustus', 2019, 10),
(55, 17, 'Agustus', 2019, 7),
(56, 18, 'Agustus', 2019, 14),
(57, 19, 'Agustus', 2019, 4),
(58, 20, 'Agustus', 2019, 11),
(59, 21, 'Agustus', 2019, 4),
(60, 22, 'Agustus', 2019, 5),
(61, 23, 'Agustus', 2019, 3),
(62, 24, 'Agustus', 2019, 22),
(63, 25, 'Agustus', 2019, 6),
(64, 26, 'Agustus', 2019, 5),
(65, 27, 'Agustus', 2019, 10),
(66, 28, 'Agustus', 2019, 23),
(67, 29, 'Agustus', 2019, 1),
(68, 30, 'Agustus', 2019, 9),
(69, 31, 'Agustus', 2019, 2),
(70, 32, 'Agustus', 2019, 16),
(71, 33, 'Agustus', 2019, 12),
(72, 34, 'Agustus', 2019, 15),
(73, 35, 'Agustus', 2019, 7),
(74, 36, 'Agustus', 2019, 11),
(75, 37, 'Agustus', 2019, 8),
(76, 38, 'Agustus', 2019, 10),
(77, 39, 'Agustus', 2019, 1),
(78, 40, 'Agustus', 2019, 4),
(79, 41, 'Agustus', 2019, 4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
