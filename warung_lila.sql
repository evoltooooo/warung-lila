-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2022 at 09:21 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `warung_lila`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbproduk`
--

CREATE TABLE `tbproduk` (
  `id` int(11) NOT NULL,
  `productName` varchar(250) NOT NULL,
  `productImage` varchar(250) NOT NULL,
  `productPrice` varchar(250) NOT NULL,
  `tipe` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbproduk`
--

INSERT INTO `tbproduk` (`id`, `productName`, `productImage`, `productPrice`, `tipe`) VALUES
(12, 'Jagung', 'jagung.png', '4000', 'Sayuran'),
(13, 'Cabai', 'cabe.png', '4000', 'Sayuran'),
(14, 'Beng-beng', 'bengbengmaxx.png', '1500', 'Jajanan'),
(15, 'Chitato', 'chitato.png', '6000', 'Jajanan'),
(16, 'Sprite', 'sprite.png', '3500', 'Jajanan'),
(17, 'Indomie Soto', 'indomi_soto.png', '3000', 'Sembako'),
(18, 'AAAA', 'saos.png', '222', 'Sayuran'),
(19, 'AAAA', 'sawiputih.png', '345', 'Sayuran');

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE `tbuser` (
  `id` bigint(20) NOT NULL,
  `username` varchar(150) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `noTelp` varchar(250) NOT NULL,
  `tipeUser` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`id`, `username`, `email`, `password`, `noTelp`, `tipeUser`) VALUES
(3, 'evol', 'evol@email.com', '81dc9bdb52d04dc20036dbd8313ed055', '', 'user'),
(4, 'sagume', 'lunariansage@mail.com', '81dc9bdb52d04dc20036dbd8313ed055', '', 'admin'),
(5, 'seija', 'amanojaku@mail.com', '81dc9bdb52d04dc20036dbd8313ed055', '', 'user'),
(6, 'melammudingir', '123@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '', 'user'),
(7, 'evol', 'reganrpl@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '', 'user'),
(8, 'lila', 'lila@gmail.com', 'fda6ef9f6ba8382c875468cd70d33ecf', '', 'user'),
(9, 'byakuren', 'seirensen@mail.com', '5f76271c6b4c332b10d836cb57b2fc69', '08577188443', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbproduk`
--
ALTER TABLE `tbproduk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbproduk`
--
ALTER TABLE `tbproduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
