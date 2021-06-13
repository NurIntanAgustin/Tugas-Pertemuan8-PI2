-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2021 at 03:38 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rekam_medis`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pasien`
--

CREATE TABLE `tbl_pasien` (
  `id_pasien` int(11) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `alamat_pasien` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `usia` varchar(11) NOT NULL,
  `tgl_daftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pasien`
--

INSERT INTO `tbl_pasien` (`id_pasien`, `nama_pasien`, `alamat_pasien`, `jenis_kelamin`, `usia`, `tgl_daftar`) VALUES
(1, 'Uswatun', 'Jl. Angkasa Raya Cirebon', 'Perempuan', '23', '2021-06-01'),
(2, 'Mulyati Hasanatun', 'Jl. Mangga Bandung', 'Perempuan', '19', '2021-06-02'),
(3, 'Muhammad Badrun', 'Jl. Cempaka Raya Jakarta', 'Laki-Laki', '25', '2021-06-03'),
(4, 'Amelia Amanda', 'Jl. Ahmad Yani Cirebon', 'Perempuan', '15', '2021-06-07'),
(5, 'Jonathan Jordi', 'Jl. Pemuda Cirebon', 'Laki-Laki', '21', '2021-06-07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_periksa`
--

CREATE TABLE `tbl_periksa` (
  `id_periksa` int(11) NOT NULL,
  `tgl_periksa` date NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `diagnosa` varchar(50) NOT NULL,
  `biaya` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_periksa`
--

INSERT INTO `tbl_periksa` (`id_periksa`, `tgl_periksa`, `id_pasien`, `diagnosa`, `biaya`) VALUES
(1, '2021-06-01', 1, 'Asma Bronchiale', '50.000'),
(2, '2021-06-02', 2, 'Influenza', '20.000'),
(3, '2021-06-03', 3, 'Mata Kering', '30.000'),
(4, '2021-06-07', 4, 'Miopia Ringan', '50.000'),
(5, '2021-06-07', 5, 'Gastritis', '50.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `tbl_periksa`
--
ALTER TABLE `tbl_periksa`
  ADD PRIMARY KEY (`id_periksa`),
  ADD KEY `id_pasien` (`id_pasien`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_periksa`
--
ALTER TABLE `tbl_periksa`
  MODIFY `id_periksa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_periksa`
--
ALTER TABLE `tbl_periksa`
  ADD CONSTRAINT `tbl_periksa_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `tbl_pasien` (`id_pasien`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
