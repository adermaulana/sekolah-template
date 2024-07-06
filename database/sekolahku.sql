-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2024 at 09:07 AM
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
-- Database: `sekolahku`
--

-- --------------------------------------------------------

--
-- Table structure for table `ekstrakurikuler`
--

CREATE TABLE `ekstrakurikuler` (
  `id` int(11) NOT NULL,
  `namaekskul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ekstrakurikuler`
--

INSERT INTO `ekstrakurikuler` (`id`, `namaekskul`, `deskripsi`, `gambar`) VALUES
(1, 'Badminton', 'Organisasi Badminton didirikan dengan tujuan utama untuk mengembangkan minat dan keterampilan dalam olahraga badminton di kalangan masyarakat. Kami berkomitmen untuk menyediakan platform yang mendukung pertumbuhan pribadi dan prestasi atletik dalam lingkungan yang mendukung dan inklusif.', 'uploads/6a7b66d1e488481f51e32da3cd10da4b.jpg'),
(4, 'Tari ', 'Organisasi Tari didirikan dengan tujuan utama untuk mengembangkan minat dan keterampilan dalam tari di kalangan masyarakat. Kami berkomitmen untuk menyediakan platform yang mendukung pertumbuhan pribadi dan prestasi atletik dalam lingkungan yang mendukung dan inklusif.', 'uploads/WhatsApp Image 2021-06-23 at 15_44_38.jpeg'),
(5, 'Futsal', 'Organisasi Futsaldidirikan dengan tujuan utama untuk mengembangkan minat dan keterampilan dalam olahraga futsal di kalangan masyarakat. Kami berkomitmen untuk menyediakan platform yang mendukung pertumbuhan pribadi dan prestasi atletik dalam lingkungan yang mendukung dan inklusif.', 'uploads/030519600_1664561515-5_AFC_FUTSAL_ASIAN_CUP_2022_-_Match__1_.webp'),
(6, 'Musikaliasi Puisi', 'Organisasi Musikalisasi Puisi didirikan dengan tujuan utama untuk mengembangkan minat dan keterampilan dalam musikalisasi puisi di kalangan masyarakat. Kami berkomitmen untuk menyediakan platform yang mendukung pertumbuhan pribadi dan prestasi atletik dalam lingkungan yang mendukung dan inklusif.', 'uploads/images (2).jpeg'),
(7, 'Voli', 'Organisasi Voli didirikan dengan tujuan utama untuk mengembangkan minat dan keterampilan dalam voli basketball di kalangan masyarakat. Kami berkomitmen untuk menyediakan platform yang mendukung pertumbuhan pribadi dan prestasi atletik dalam lingkungan yang mendukung dan inklusif.', 'uploads/library_upload_21_2022_09_996x664_voli_c5de053.jpg'),
(8, 'Teater', 'Organisasi Teater didirikan dengan tujuan utama untuk mengembangkan minat dan keterampilan dalam teater  di kalangan masyarakat. Kami berkomitmen untuk menyediakan platform yang mendukung pertumbuhan pribadi dan prestasi atletik dalam lingkungan yang mendukung dan inklusif.', 'uploads/jenis-jenis-teater-serta-fungsinya-menambah-wawasan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `keahlian` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nama`, `email`, `alamat`, `keahlian`, `foto`) VALUES
(4, 'asdas', 'dad@gmai', 'adfnfeu', 'ndfwuew', 'uploads/'),
(5, 'Udin Spd', 'udin@gmail.com', 'Jalan borong', 'Matematika', 'uploads/pbo2.png');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(11) NOT NULL,
  `namajurusan` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `namajurusan`, `deskripsi`, `gambar`) VALUES
(3, 'Perawat Kesehatan', 'Jurusan perawat kesehatan adalah jurusan yang membekali siswa agar: \r\n Memiliki integritas kepribadian yang tinggi sebagai tenaga perawat \r\nkesehatan yang terampil serta taggap terhadap berbagai masalah yang \r\ndihadapi masyarakat khususnya yang berkaitan dengan keperawatan \r\n Memiliki kemampuan untuk menerapkan pengetahuan dan keterampilan \r\nuntuk pelayanan keperawatan \r\n Memiliki kemampuan untuk mengetahui perkembangan ilmu pengetahuan \r\ndan teknologi serta keterampilan di bidang keperawatan \r\nPeluang kerja setelah lulus adalah sebagai tenaga perawat profesional yang mampu \r\nmemasuki dunia kerja di lingkungan Rumah Sakit atau puskesmas, dan mampu \r\nbersaing dalam pasar regional tenaga kerja', 'uploads/images (1).jpeg'),
(4, 'Tata Kecantikan', 'Jurusan tata kecantikan adalah jurusan yang mempelajari Teknik Kecantikan \r\nRambut dan Tata kecantikan Kulit. Para siswa akan diajarkan berbagai macam \r\npengetahuan teori dan praktek antara lain : Anatomi Rambut, Creambat, Gunting, \r\nSanggul Kriting, Styling, Bleacing, Artistic Coloring, Rebonding, Facial, Make Up \r\ndan Hair Spa. \r\nLulusan Tata Kecantikan Rambut SMK Prima Tiara akan memiliki \r\nkompetensi sebagai “Hairstylist” yang terampil dan mandiri.', 'uploads/63f37114017da.png'),
(5, 'Rekayasa Perangkat Lunak (RPL)', 'Jurusan komputer adalah suatu jurusan yang mempelajari seluk beluk dunia \r\nkomputer, mulai dari cara instalasi SO (System Operasi), Mendiagnosis masalah \r\npada PC, memperbaiki PC, membuat jaringan LAN & WAN mengembangkan \r\nhalaman WEB interaktif, merekam dan menyunting audio-video dan \r\nmengembangkan aplikasi multimedia interaktif. \r\nPeluang kerja setelah lulus antara lain sebagai Teknisi Komputer, Teknisi \r\nJaringan, Operator Web, Editor Video, desainer, cameramen, membuka usaha \r\nkomputer/Warnet dll.', 'uploads/berita-327-apa-itu-jurusan-rpl-dan-apa-saja-keunggulan-jurusan-rpl-share-20201110-152329.jpg'),
(6, 'Teknik Komputer dan Jaringan (TKJ)', 'Jurusan komputer adalah suatu jurusan yang mempelajari seluk beluk dunia \r\nkomputer, mulai dari cara instalasi SO (System Operasi), Mendiagnosis masalah \r\npada PC, memperbaiki PC, membuat jaringan LAN & WAN mengembangkan \r\nhalaman WEB interaktif, merekam dan menyunting audio-video dan \r\nmengembangkan aplikasi multimedia interaktif. \r\nPeluang kerja setelah lulus antara lain sebagai Teknisi Komputer, Teknisi \r\nJaringan, Operator Web, Editor Video, desainer, cameramen, membuka usaha \r\nkomputer/Warnet dll.', 'uploads/istockphoto-1362372021-170667a.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pengaturan`
--

CREATE TABLE `pengaturan` (
  `id` int(11) NOT NULL,
  `namasekolah` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telp` int(255) NOT NULL,
  `alamat` text NOT NULL,
  `logo` varchar(255) NOT NULL,
  `jumlahsiswa` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengaturan`
--

INSERT INTO `pengaturan` (`id`, `namasekolah`, `email`, `telp`, `alamat`, `logo`, `jumlahsiswa`) VALUES
(1, 'SMK PRIMA TIARA MAKASSAR', 'primatiara06@gmail.com', 2147483647, 'Jl.Tamalandrea Raya (Poros BTP) Blok D5-10, KEC. Tamalanrea Makassar ', 'uploads/logo-removebg-preview.png', 255);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `alamat`, `password`) VALUES
(3, 'admin', 'admin', 'jalan abubakar', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `visimisi`
--

CREATE TABLE `visimisi` (
  `id` int(11) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visimisi`
--

INSERT INTO `visimisi` (`id`, `visi`, `misi`) VALUES
(1, 'Menjadi Sekolah Menengah Kejuruan (SMK) yang profesional dan menghasilkan \r\nlulusan yang unggul dan mandirinya\r\n', '1. Mendidik siswa agar memiliki kecerdasan moral, kecerdasan intelektual dan kecerdasan \r\nemosional yang serasi \r\n2. Melatih siswa menjadi kreatif dan inovatif \r\n3. Membentuk siswa agar memiliki jiwa kewirausahaan ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ekstrakurikuler`
--
ALTER TABLE `ekstrakurikuler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visimisi`
--
ALTER TABLE `visimisi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ekstrakurikuler`
--
ALTER TABLE `ekstrakurikuler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pengaturan`
--
ALTER TABLE `pengaturan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `visimisi`
--
ALTER TABLE `visimisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
