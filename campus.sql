-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2020 at 05:30 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `campus`
--

-- --------------------------------------------------------

--
-- Table structure for table `datakampus`
--

CREATE TABLE `datakampus` (
  `foto` varchar(255) NOT NULL,
  `akronim_kampus` varchar(10) NOT NULL,
  `nama_kampus` varchar(100) NOT NULL,
  `alamat_kampus` varchar(255) NOT NULL,
  `akreditasi` varchar(2) NOT NULL,
  `status` varchar(50) NOT NULL,
  `peringkat_asia` varchar(10) NOT NULL,
  `peringkat_lokal` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datakampus`
--

INSERT INTO `datakampus` (`foto`, `akronim_kampus`, `nama_kampus`, `alamat_kampus`, `akreditasi`, `status`, `peringkat_asia`, `peringkat_lokal`) VALUES
('itb.png', 'itb', 'INSTITUT TEKNOLOGI BANDUNG', 'Jl. Ganesha No.10, Lb. Siliwangi, Kecamatan Coblong, Kota Bandung, Jawa Barat 40132', 'A', 'negeri', '66', '1'),
('its.jpg', 'its', 'INSTITUT TEKNOLOGI SEPULUH NOVEMBER', 'Jl. Teknik Kimia, Keputih, Kec. Sukolilo, Kota SBY, Jawa Timur 60111', 'A', 'negeri', '198', '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datakampus`
--
ALTER TABLE `datakampus`
  ADD PRIMARY KEY (`akronim_kampus`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
