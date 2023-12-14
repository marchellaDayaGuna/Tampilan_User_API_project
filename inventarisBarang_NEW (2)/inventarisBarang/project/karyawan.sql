-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2023 at 05:03 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karyawan`
--

-- --------------------------------------------------------

--
-- Table structure for table `kodejabatan`
--

CREATE TABLE `kodejabatan` (
  `kode` varchar(4) DEFAULT NULL,
  `NamaJabatan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kodejabatan`
--

INSERT INTO `kodejabatan` (`kode`, `NamaJabatan`) VALUES
('001', 'Owner'),
('002', 'Manajer'),
('003', 'Staff');

-- --------------------------------------------------------

--
-- Table structure for table `personalia`
--

CREATE TABLE `personalia` (
  `NIP` varchar(5) DEFAULT NULL,
  `Nama` varchar(50) DEFAULT NULL,
  `Alamat` varchar(80) DEFAULT NULL,
  `Jabatan` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personalia`
--

INSERT INTO `personalia` (`NIP`, `Nama`, `Alamat`, `Jabatan`) VALUES
('P.100', 'Abigail Sentosa', 'Jl. Kabupaten 50, Sleman, DIY', '001'),
('P.101', 'Santoso Priyambodo', 'Perum Madangkoro, Sragen, Jawa Tengah', '002'),
('P.102', 'Ivonny C P', 'Jl. Kasihan Bantul', '003'),
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;