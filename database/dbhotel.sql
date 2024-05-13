-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2024 at 02:47 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbhotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `nama`, `email`, `password`) VALUES
(1, 'Gibran', 'gibranaja@gmail.com', '$2y$10$XlHNVNwpYYYeFLa9wqBup.zhYdZo8/yOPMI1jvj5YCFm69Xv75GEy');

-- --------------------------------------------------------

--
-- Table structure for table `tblhotel`
--

CREATE TABLE `tblhotel` (
  `id` int(100) NOT NULL,
  `namahotel` varchar(100) NOT NULL,
  `deskripsihotel` text NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `gambar_hotel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblhotel`
--

INSERT INTO `tblhotel` (`id`, `namahotel`, `deskripsihotel`, `lokasi`, `gambar_hotel`) VALUES
(1, 'Hotel-1', 'ini adalah hotel mantap', 'Jakarta', './asset/Hotel-1.png'),
(2, 'Hotel-2', 'Disini kamu akan mendapatkan pengalaman yang menyenangkan dan kamu juga akan merasakan bagaimana rasanya liburan dengan fasilitas yang mewah dan pelayanan yang terbaik', 'Palembang', './asset/Hotel-2.jpg'),
(3, 'Hotel-3', 'Ini adalah Hotel mantap', 'Jogja', './asset/Hotel-3.jpg'),
(4, 'Hotel-4', 'Ini adalah Hotel mantap', 'Bandung', './asset/Hotel-4.jpg'),
(5, 'Hotel-5', 'Ini adalah Hotel mantap', 'Tangerang', './asset/Hotel-5.jpg'),
(6, 'Hotel-6', 'Ini adalah Hotel mantap', 'Bogor', './asset/Hotel-6.jpg'),
(7, 'Hotel-7', 'Ini adalah Hotel mantap', 'Garut', './asset/Hotel-7.jpg'),
(8, 'Hotel-8', 'Ini adalah Hotel mantap', 'Tasikmalaya', './asset/Hotel-8.jpg'),
(9, 'Hotel-9', 'Ini adalah Hotel mantap', 'Cianjur', './asset/Hotel-9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblroom`
--

CREATE TABLE `tblroom` (
  `id` int(100) NOT NULL,
  `tipe_room` varchar(100) NOT NULL,
  `bed_tipe` varchar(50) NOT NULL,
  `harga_permalam` int(50) NOT NULL,
  `gambar_hotel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblroom`
--

INSERT INTO `tblroom` (`id`, `tipe_room`, `bed_tipe`, `harga_permalam`, `gambar_hotel`) VALUES
(27, 'Regular', 'Single', 500000, ''),
(28, 'Deluxe', 'Double', 550000, ''),
(29, 'Special', 'King', 700000, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `id` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `phone` bigint(13) NOT NULL,
  `namahotel` varchar(100) NOT NULL,
  `tipe_room` varchar(50) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`id`, `nama`, `phone`, `namahotel`, `tipe_room`, `checkin`, `checkout`) VALUES
(1, 'Gibran', 89638498832, 'Hotel-7', 'Special', '2024-05-13', '2024-05-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblhotel`
--
ALTER TABLE `tblhotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblroom`
--
ALTER TABLE `tblroom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblhotel`
--
ALTER TABLE `tblhotel`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblroom`
--
ALTER TABLE `tblroom`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
