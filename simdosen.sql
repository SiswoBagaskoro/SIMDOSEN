-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2023 at 05:07 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simdosen`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabeldosen`
--

CREATE TABLE `tabeldosen` (
  `namadosen` varchar(200) NOT NULL,
  `idndosen` varchar(50) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kodeprodi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabeldosen`
--

INSERT INTO `tabeldosen` (`namadosen`, `idndosen`, `nohp`, `alamat`, `kodeprodi`) VALUES
('a', '1', '12', 'b', '13'),
('rindi', '222', '222', '444', '2222'),
('ab', '1111', '123456', 'vb', '444'),
('aaaaaa', 'bbbbbb', 'dddddd', 'cccccc', 'eeeee');

-- --------------------------------------------------------

--
-- Table structure for table `tabelprodi`
--

CREATE TABLE `tabelprodi` (
  `fakultas` varchar(200) NOT NULL,
  `kodeprodi` varchar(200) NOT NULL,
  `namaprodi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabelprodi`
--

INSERT INTO `tabelprodi` (`fakultas`, `kodeprodi`, `namaprodi`) VALUES
('sek', '555', 'fsf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabeldosen`
--
ALTER TABLE `tabeldosen`
  ADD PRIMARY KEY (`kodeprodi`),
  ADD UNIQUE KEY `namadosen` (`namadosen`);

--
-- Indexes for table `tabelprodi`
--
ALTER TABLE `tabelprodi`
  ADD PRIMARY KEY (`kodeprodi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
