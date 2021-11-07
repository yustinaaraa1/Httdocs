-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2019 at 05:13 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

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
`id_ambang_batas` int(11) NOT NULL,
  `nama_ambang_batas` enum('Sangat Sering','Cukup','Kurang') DEFAULT NULL,
  `batas_atas` int(11) DEFAULT NULL,
  `batas_bawah` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

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
`id` int(11) NOT NULL,
  `id_group` int(11) DEFAULT NULL,
  `id_buku` int(11) DEFAULT NULL,
  `c1` int(11) DEFAULT NULL,
  `c2` int(11) DEFAULT NULL,
  `c3` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `centroid_produk_temp`
--

INSERT INTO `centroid_produk_temp` (`id`, `id_group`, `id_buku`, `c1`, `c2`, `c3`) VALUES
(1, 1, 1, 1, 0, 0),
(2, 1, 2, 0, 0, 1),
(3, 1, 4, 1, 0, 0),
(4, 1, 5, 0, 0, 1),
(5, 1, 6, 0, 0, 1),
(6, 1, 7, 0, 0, 1),
(7, 1, 3, 0, 0, 1),
(8, 2, 1, 1, 0, 0),
(9, 2, 2, 0, 1, 0),
(10, 2, 4, 0, 1, 0),
(11, 2, 5, 0, 1, 0),
(12, 2, 6, 0, 1, 0),
(13, 2, 7, 0, 1, 0),
(14, 2, 3, 0, 1, 0),
(15, 3, 1, 1, 0, 0),
(16, 3, 2, 0, 0, 1),
(17, 3, 4, 0, 1, 0),
(18, 3, 5, 0, 0, 1),
(19, 3, 6, 0, 0, 1),
(20, 3, 7, 0, 0, 1),
(21, 3, 3, 0, 0, 1),
(22, 4, 1, 1, 0, 0),
(23, 4, 2, 0, 0, 1),
(24, 4, 4, 0, 1, 0),
(25, 4, 5, 0, 0, 1),
(26, 4, 6, 0, 0, 1),
(27, 4, 7, 0, 0, 1),
(28, 4, 3, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `centroid_temp`
--

CREATE TABLE IF NOT EXISTS `centroid_temp` (
`id` int(5) NOT NULL,
  `c1_a` varchar(50) DEFAULT NULL,
  `c1_b` varchar(50) DEFAULT NULL,
  `c2_a` varchar(50) DEFAULT NULL,
  `c2_b` varchar(20) DEFAULT NULL,
  `c3_a` varchar(21) DEFAULT NULL,
  `c3_b` varchar(21) DEFAULT NULL,
  `rasio` double DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `centroid_temp`
--

INSERT INTO `centroid_temp` (`id`, `c1_a`, `c1_b`, `c2_a`, `c2_b`, `c3_a`, `c3_b`, `rasio`) VALUES
(1, '93.5', '5', '0', '0', '0', '0', 0.0029980842925904),
(2, '182', '5', '0.83333333333333', '0.83333333333333', '0', '0', 0.16630661569733),
(3, '182', '5', '5', '5', '0', '0', 73.475489757321),
(4, '182', '5', '5', '5', '0', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
`id_admin` int(11) NOT NULL,
  `nama_lengkap` varchar(200) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

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
`id_buku` int(11) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `sku` varchar(50) DEFAULT NULL,
  `judul_buku` varchar(200) DEFAULT NULL,
  `pengarang` varchar(200) DEFAULT NULL,
  `penerbit` varchar(50) DEFAULT NULL,
  `tahun_terbit` int(11) DEFAULT NULL,
  `jumlah_buku` int(11) DEFAULT NULL,
  `gambar_produk` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_buku`
--

INSERT INTO `tb_buku` (`id_buku`, `id_kategori`, `sku`, `judul_buku`, `pengarang`, `penerbit`, `tahun_terbit`, `jumlah_buku`, `gambar_produk`) VALUES
(1, 1, '424234234', 'Sejarah Mataram', 'Ebied G. Dagu', 'Erlangga', 2019, 10, '498b7-qword.jpg'),
(2, 1, '234234', 'hahahaha', 'JONO', 'jono', 20109, 22, 'bc02d-qword.jpg'),
(3, 2, '1423423', 'hahah', 'dkjflskdj', 'lkjkljsdflkjlskjfdsal', 21312, 78, '7e0af-qword.jpg'),
(4, 1, 'svclsdkjfj', 'lkjlskdjflk', 'jlksdjlfkj', 'lkfjdslkjfl', 131, 22, '25eff-qword.jpg'),
(5, 1, '423SADF1324', 'JAN', 'Ir.Santoso', 'Erlangga', 2019, 22, NULL),
(6, 1, 'WDFSD12323D', 'JIN', 'Dr.Jono', 'Humanity', 2019, 33, NULL),
(7, 1, '321423AFDAS', 'JUN', 'Dr.kinto', 'Suprapto', 2019, 44, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE IF NOT EXISTS `tb_kategori` (
`id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Sejarah'),
(2, 'Sosial Budaya'),
(3, 'Bahasa Sastra');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pinjam`
--

CREATE TABLE IF NOT EXISTS `tb_pinjam` (
`id_pinjam` int(11) NOT NULL,
  `id_buku` int(11) DEFAULT NULL,
  `bulan` enum('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember') DEFAULT NULL,
  `tahun` int(11) DEFAULT NULL,
  `jumlah_dipinjam` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pinjam`
--

INSERT INTO `tb_pinjam` (`id_pinjam`, `id_buku`, `bulan`, `tahun`, `jumlah_dipinjam`) VALUES
(1, 1, 'Agustus', 2019, 4),
(2, 4, 'April', 2019, 5),
(3, 4, 'Desember', 2019, 23),
(4, 2, 'Februari', 2019, 3),
(5, 1, 'April', 2019, 5),
(6, 3, 'November', 2019, 4),
(7, 1, 'Maret', 2019, 2),
(8, 3, 'Maret', 2019, 2),
(10, 1, 'April', 2019, 3),
(11, 1, 'April', 2019, 2),
(12, 1, 'April', 2019, 22),
(13, 1, 'April', 2019, 20),
(14, 1, 'April', 2019, 44),
(15, 1, 'April', 2019, 22),
(16, 1, 'April', 2019, 20),
(17, 1, 'April', 2019, 44);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ambang_batas`
--
ALTER TABLE `ambang_batas`
 ADD PRIMARY KEY (`id_ambang_batas`);

--
-- Indexes for table `centroid_produk_temp`
--
ALTER TABLE `centroid_produk_temp`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `centroid_temp`
--
ALTER TABLE `centroid_temp`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
 ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
 ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_pinjam`
--
ALTER TABLE `tb_pinjam`
 ADD PRIMARY KEY (`id_pinjam`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ambang_batas`
--
ALTER TABLE `ambang_batas`
MODIFY `id_ambang_batas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `centroid_produk_temp`
--
ALTER TABLE `centroid_produk_temp`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `centroid_temp`
--
ALTER TABLE `centroid_temp`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_buku`
--
ALTER TABLE `tb_buku`
MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_pinjam`
--
ALTER TABLE `tb_pinjam`
MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
