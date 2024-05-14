-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2024 at 08:00 PM
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
(1, 'Hotel-1', 'Hotel-1 adalah surga ketenangan yang terletak di jantung kota, menawarkan perpaduan sempurna antara kemewahan modern dan pesona tradisional. Setiap kamar dirancang dengan gaya elegan yang menampilkan dekorasi kontemporer serta fasilitas canggih seperti televisi layar datar, akses Wi-Fi gratis, dan kamar mandi marmer mewah. Para tamu dapat menikmati pemandangan kota yang menakjubkan dari balkon pribadi mereka atau bersantai di kolam renang atap dengan bar yang menyediakan minuman segar sepanjang hari. Restoran hotel ini menyajikan berbagai hidangan internasional yang dibuat dari bahan-bahan lokal terbaik, sementara spa menawarkan berbagai perawatan relaksasi untuk memanjakan diri. Dengan lokasi strategis dekat pusat perbelanjaan, teater, dan tempat wisata utama, Hotel-1 adalah pilihan ideal bagi para pelancong yang mencari kenyamanan dan gaya.', 'Jakarta', './asset/Hotel-1.png'),
(2, 'Hotel-2', 'Hotel-2 adalah tempat perlindungan yang eksklusif yang terletak di tepi pantai yang indah, memberikan pemandangan laut yang menakjubkan dan akses langsung ke pantai berpasir putih. Hotel ini menawarkan berbagai tipe kamar dan suite yang luas, masing-masing dilengkapi dengan perabotan mewah, jendela besar yang menghadap ke laut, dan teras pribadi. Fasilitas unggulan termasuk kolam renang infinity, pusat kebugaran lengkap, dan klub anak-anak yang interaktif. Para tamu dapat menikmati beragam aktivitas air, mulai dari snorkeling hingga jet ski, atau bersantai di spa yang menawarkan perawatan tubuh berbahan alami.', 'Palembang', './asset/Hotel-2.jpg'),
(3, 'Hotel-3', 'Hotel-3 adalah destinasi mewah di pegunungan yang dikelilingi oleh pemandangan alam yang memukau. Terletak di ketinggian, hotel ini menawarkan udara segar dan suasana yang tenang, sempurna untuk melarikan diri dari hiruk pikuk kota. Setiap kamar dan suite dirancang dengan nuansa hangat dan nyaman, dilengkapi dengan perapian, balkon pribadi, dan bak mandi besar dengan pemandangan lembah. ', 'Jogja', './asset/Hotel-3.jpg'),
(4, 'Hotel-4', 'Hotel-4 adalah oase urban yang terletak di pusat distrik bisnis, menawarkan kenyamanan dan kemewahan bagi para profesional dan wisatawan. Hotel ini memiliki berbagai pilihan kamar yang elegan, dilengkapi dengan area kerja luas, tempat tidur nyaman, dan kamar mandi modern dengan shower hujan. Pusat bisnis 24 jam, ruang pertemuan, dan fasilitas konferensi membuatnya ideal untuk perjalanan bisnis. Para tamu dapat bersantai di lounge eksekutif atau menikmati hidangan internasional di restoran hotel yang terkenal.', 'Bandung', './asset/Hotel-4.jpg'),
(5, 'Hotel-5', 'Hotel-5 adalah pilihan sempurna bagi wisatawan bisnis dan liburan yang mencari kenyamanan dan kemudahan akses. Terletak di pusat distrik bisnis, hotel ini menyediakan berbagai fasilitas modern, termasuk pusat bisnis 24 jam, ruang rapat berteknologi tinggi, dan Wi-Fi gratis di seluruh area. Kamar-kamar di Hotel-5 didesain dengan konsep minimalis namun elegan, dilengkapi dengan TV layar datar, meja kerja, dan kamar mandi marmer. ', 'Tangerang', './asset/Hotel-5.jpg'),
(6, 'Hotel-6', 'Hotel-6 adalah hotel butik yang menawan, terletak di kawasan sejarah yang kaya budaya. Hotel ini mempertahankan arsitektur klasik yang dipadukan dengan kenyamanan modern. Setiap kamar didekorasi dengan furnitur antik dan karya seni lokal, dilengkapi dengan fasilitas seperti Wi-Fi gratis, AC, dan minibar. Restoran hotel menyajikan hidangan tradisional yang autentik dengan sentuhan modern. ', 'Bogor', './asset/Hotel-6.jpg'),
(7, 'Hotel-7', 'Hotel-7 adalah pilihan sempurna bagi wisatawan yang mencari kombinasi kenyamanan dan lokasi strategis. Terletak hanya beberapa langkah dari pusat kota, hotel ini menawarkan pemandangan hutan yang spektakuler dari banyak kamarnya. Setiap kamar dilengkapi dengan balkon pribadi, memungkinkan tamu menikmati matahari terbit yang indah setiap hari. Fasilitas modern seperti TV kabel, Wi-Fi gratis, dan layanan kebersihan harian memastikan kenyamanan maksimal. ', 'Garut', './asset/Hotel-7.jpg'),
(8, 'Hotel-8', 'Terletak di pusat distrik bisnis, Hotel-8 menawarkan akomodasi premium bagi para pelancong bisnis dan rekreasi. Hotel ini memiliki ruang lobi yang luas dan megah, dihiasi dengan karya seni kontemporer yang mengesankan. Kamar-kamar di Hotel-4 didesain dengan gaya modern, dilengkapi dengan fasilitas seperti meja kerja, brankas, dan mesin pembuat kopi. Para tamu dapat menikmati layanan pijat di spa, berenang di kolam renang infinity, atau berolahraga di pusat kebugaran yang lengkap.', 'Tasikmalaya', './asset/Hotel-8.jpg'),
(9, 'Hotel-9', 'Hotel-9 menghadirkan suasana rumah yang nyaman di setiap sudutnya, ideal bagi keluarga dan pelancong yang menginginkan kenyamanan ekstra. Hotel ini memiliki suite keluarga dengan ruang tamu terpisah, dapur kecil, dan fasilitas anak-anak seperti area bermain dan layanan penjagaan anak. Terletak strategis dekat dengan berbagai atraksi utama, Hotel-9 juga menawarkan layanan shuttle gratis ke tempat-tempat wisata terdekat. ', 'Cianjur', './asset/Hotel-9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblroom`
--

CREATE TABLE `tblroom` (
  `id` int(100) NOT NULL,
  `tipe_room` varchar(100) NOT NULL,
  `bed_tipe` varchar(50) NOT NULL,
  `harga_permalam` int(50) NOT NULL,
  `gambar_kamar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblroom`
--

INSERT INTO `tblroom` (`id`, `tipe_room`, `bed_tipe`, `harga_permalam`, `gambar_kamar`) VALUES
(27, 'Regular Room', 'Single', 500000, './asset/Kamar Reguler.png'),
(28, 'Deluxe Room', 'Double', 550000, './asset/Kamar Deluxe.jpg'),
(29, 'Special Room', 'King', 700000, './asset/Kamar Special.jpg');

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
