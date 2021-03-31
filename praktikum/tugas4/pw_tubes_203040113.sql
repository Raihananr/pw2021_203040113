-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2021 at 11:53 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040113`
--

-- --------------------------------------------------------

--
-- Table structure for table `peacerebels`
--

CREATE TABLE `peacerebels` (
  `id` int(50) NOT NULL,
  `img` varchar(100) NOT NULL,
  `nama` varchar(10) NOT NULL,
  `harga` varchar(1000) NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peacerebels`
--

INSERT INTO `peacerebels` (`id`, `img`, `nama`, `harga`, `kategori`) VALUES
(2, 'H&M1.png', ' Ariana Gr', '499.000', 'HOODIE'),
(4, 'H&M2.png', ' Starwars', '499.000', 'HOODIE'),
(5, 'H&M3.png', 'Los Angles', '499.000', 'HOODIE'),
(6, 'H&M4.png', 'Billie Eil', '499.000', 'HOODIE'),
(7, 'H&M5.png', 'MarveL', '499.000', 'CREWNECK'),
(8, 'H&M6.png', 'Nirvana', '499.000', 'HOODIE'),
(9, 'H&M7.png', 'MeTallica', '259.000', 'T-SHIRT'),
(10, 'Jordan1.png', 'Jordan', '1,500,000', 'Waistbag'),
(11, 'MLB1.png', 'MLB', '500,000', 'CAP'),
(12, 'H&M8.png', 'BeaTles', '259.000', 'T-SHIRT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `peacerebels`
--
ALTER TABLE `peacerebels`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peacerebels`
--
ALTER TABLE `peacerebels`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
