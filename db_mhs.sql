-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2019 at 02:30 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mhs`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_mhs`
--

CREATE TABLE `tb_mhs` (
  `NPM` int(11) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Tlp` varchar(30) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Tgl_lahir` varchar(20) NOT NULL,
  `Jurusan` varchar(30) NOT NULL,
  `Kelas` varchar(10) NOT NULL,
  `IPK` varchar(5) NOT NULL,
  `photo` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mhs`
--

INSERT INTO `tb_mhs` (`NPM`, `Nama`, `Tlp`, `Alamat`, `Tgl_lahir`, `Jurusan`, `Kelas`, `IPK`, `photo`) VALUES
(36113169, '    muhammad vikral', '    081214004800', '    chandra baga bekasi', '    02-10-1995', '    M informatika', '    3DB06', ' 3.00', 0),
(36113171, '      Harisa Ginting', '      08131708970', '      Perum Graha tambun', '      14-09-1993', '    M informatika', '    3DB06', '3.50', 0),
(36113172, '       Ruben Van Luter', '       089645671234', '       Cakung', '       02-07-1995', '       M. Informatika', '       3DB', ' 3.25', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_mhs`
--
ALTER TABLE `tb_mhs`
  ADD PRIMARY KEY (`NPM`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_mhs`
--
ALTER TABLE `tb_mhs`
  MODIFY `NPM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36113173;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
