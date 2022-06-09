-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 04:20 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webalumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id` int(5) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Angkatan` varchar(50) NOT NULL,
  `Jurusan` varchar(25) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id`, `Nama`, `Address`, `Email`, `Angkatan`, `Jurusan`, `Username`, `Password`) VALUES
(23, 'Khalid Rijaluddin', 'Surabaya', 'khalidrijaluddin22@gmail.com', '2020', 'Sistem Informasi', 'khalid', 'khalid123'),
(24, 'Bintang', 'Sidoarjo', 'bintang@gmail.com', '2023', 'Sistem Informasi', 'Bintang', 'Bintang'),
(25, 'Jokowidodo', 'Solo', 'joko@gmail.com', '2021', 'Agroteknologi', 'Jokowidodo', 'joko'),
(26, 'Bagus', 'Yogyakarta', 'bgs66@gmail.com', '2024', 'Informatika', 'bagus', 'bagus77'),
(27, 'Paiyem', 'Sidoarjo', 'Paiyem@gmail.com', '2022', 'Agribisnis', 'Paiyem', 'iyemmm'),
(28, 'Agung', 'Cirebon', 'agungkere@gmail.com', '2021', 'Sistem Informasi', 'Agung', 'agung123456'),
(29, 'Risma', 'Bandung', 'risma@gmail.com', '2023', 'Keperawatan', 'Risma', 'Risma177gg'),
(30, 'Susi', 'Malang', 'Susipuji@gmail.com', '2021', 'Agroteknologi', 'Susi', 'susi76'),
(31, 'Uus', 'Jakarta', 'uus23@gmail.com', '2020', 'Informatika', 'Uus', 'uus7676'),
(32, 'Mawar', 'Lampung', 'mawar23@gmail.com', '2023', 'Sistem Informasi', 'Mawar', 'mawareva');

-- --------------------------------------------------------

--
-- Table structure for table `pesanalumni`
--

CREATE TABLE `pesanalumni` (
  `id` int(5) NOT NULL,
  `Posted` date NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(75) NOT NULL,
  `Address` varchar(75) NOT NULL,
  `TahunLulus` varchar(75) NOT NULL,
  `Pekerjaan` varchar(50) NOT NULL,
  `Message` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanalumni`
--

INSERT INTO `pesanalumni` (`id`, `Posted`, `Name`, `Email`, `Address`, `TahunLulus`, `Pekerjaan`, `Message`) VALUES
(28, '2022-06-09', 'Khalid Rijaluddin', 'khalidrijaluddin22@gmail.com', 'Rungkut, Gununganyar', '2024', 'Web Programmer', 0x416c68616d64756c696c6c6168),
(29, '2022-06-09', 'Bintang', 'bintang@gmail.com', 'Sidoarjo', '2023', 'Web Programmer', 0x416c68616d64756c696c6c6168),
(30, '2022-06-09', 'Jokowidodo', 'joko@gmail.com', 'Solo', '2021', 'IOS Programmer', 0x4269736d696c6c6168),
(31, '2022-06-09', 'Susi', 'Susipuji@gmail.com', 'Malang', '2023', 'Data Analyst', 0x596561797979),
(32, '2022-06-09', 'Uus', 'uus23@gmail.com', 'Jakarta', '2020', 'IT Support', 0x686f7265);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanalumni`
--
ALTER TABLE `pesanalumni`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `pesanalumni`
--
ALTER TABLE `pesanalumni`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
