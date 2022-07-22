-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2022 at 12:36 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fast_printing`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `status` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga`, `kategori`, `status`) VALUES
(92, 'ALUMUNIUM FOIL ALL IN ONE BULAT 23mm IM', 1000, '0', 'tidak bisa dijual'),
(93, 'ALUMUNIUM FOIL ALL IN ONE BULAT 30mm IM', 1000, '0', 'bisa dijual'),
(94, 'ALUMUNIUM FOIL ALL IN ONE SHEET 250mm IM', 12500, '0', 'tidak bisa dijual'),
(95, 'ALUMUNIUM FOIL HDPE/PE BULAT 23mm IM', 12500, '0', 'bisa dijual'),
(96, 'ALUMUNIUM FOIL HDPE/PE BULAT 30mm IM', 1000, '0', 'bisa dijual'),
(97, 'ALUMUNIUM FOIL HDPE/PE SHEET 250mm IM', 13000, '0', 'tidak bisa dijual'),
(98, 'ALUMUNIUM FOIL PET SHEET 250mm IM', 1000, '0', 'tidak bisa dijual'),
(99, 'ARM PENDEK MODEL U', 13000, '0', 'bisa dijual'),
(100, 'ARM SUPPORT KECIL', 13000, '0', 'tidak bisa dijual'),
(101, 'ARM SUPPORT KOTAK PUTIH', 13000, '0', 'tidak bisa dijual'),
(102, 'ARM SUPPORT PENDEK POLOS', 13000, '0', 'bisa dijual'),
(103, 'ARM SUPPORT S IM', 1000, '0', 'tidak bisa dijual'),
(104, 'ARM SUPPORT T (IMPORT)', 13000, '0', 'bisa dijual'),
(105, 'ARM SUPPORT T - MODEL 1 ( LOKAL )', 10000, '0', 'bisa dijual'),
(106, 'BLACK LASER TONER FP-T3 (100gr)', 13000, '0', 'tidak bisa dijual'),
(107, 'BODY PRINTER CANON IP2770', 500, '0', 'bisa dijual'),
(108, 'BODY PRINTER T13X', 15000, '0', 'bisa dijual'),
(109, 'BOTOL 1000ML BLUE KHUSUS UNTUK EPSON R1800/R800 - 4180 IM (T054920)', 10000, '0', 'bisa dijual'),
(110, 'BOTOL 1000ML CYAN KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4120 IM (T054220)', 10000, '0', 'tidak bisa dijual'),
(111, 'BOTOL 1000ML GLOSS OPTIMIZER KHUSUS UNTUK EPSON R1800/R800/R1900/R2000/IX7000/MG6170 - 4100 IM (T054020)', 1500, '0', 'bisa dijual'),
(112, 'BOTOL 1000ML L.LIGHT BLACK KHUSUS UNTUK EPSON 2400 - 0599 IM', 1500, '0', 'tidak bisa dijual'),
(113, 'BOTOL 1000ML LIGHT BLACK KHUSUS UNTUK EPSON 2400 - 0597 IM', 1500, '0', 'tidak bisa dijual'),
(114, 'BOTOL 1000ML MAGENTA KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4140 IM (T054320)', 1000, '0', 'bisa dijual'),
(115, 'BOTOL 1000ML MATTE BLACK KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 3503 IM (T054820)', 1500, '0', 'tidak bisa dijual'),
(116, 'BOTOL 1000ML ORANGE KHUSUS UNTUK EPSON R1900/R2000 IM - 4190 (T087920)', 1500, '0', 'bisa dijual'),
(117, 'BOTOL 1000ML RED KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4170 IM (T054720)', 1000, '0', 'tidak bisa dijual'),
(118, 'BOTOL 1000ML YELLOW KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4160 IM (T054420)', 1500, '0', 'tidak bisa dijual'),
(119, 'BOTOL KOTAK 100ML LK', 1000, '0', 'bisa dijual'),
(120, 'BOTOL 10ML IM', 1000, '0', 'tidak bisa dijual');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
