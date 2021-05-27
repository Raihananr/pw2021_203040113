-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2021 at 01:07 PM
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
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_telp` varchar(20) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`admin_id`, `admin_name`, `username`, `password`, `admin_telp`, `admin_email`, `admin_address`) VALUES
(1, 'Raihan Anhar', 'admin', 'ce882a3574a4615e8d93ad44cc875349', '+6281932331755', 'raihanannr@gmail.com', 'Jln. Harapan Indah ,Perumahan Harapan Citra Insani ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_category`
--

CREATE TABLE `tb_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(25) NOT NULL,
  `category_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_category`
--

INSERT INTO `tb_category` (`category_id`, `category_name`, `category_image`) VALUES
(6, 'T-shirts', ''),
(7, 'Hoodie', ''),
(8, 'Topi', ''),
(9, 'Sepatu', ''),
(10, 'Celana', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_description` text NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_status` tinyint(1) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`product_id`, `category_id`, `product_name`, `product_price`, `product_description`, `product_image`, `product_status`, `date_created`) VALUES
(8, 8, 'Cap Jordan Air Force', 499000, 'Cap Jordan A F x H&M\r\ncap soft, printed cotton jersey. Round neckline with a narrow trim.', 'produk1621446574.png', 1, '2021-05-16 11:22:23'),
(10, 6, 'The Beatles', 499000, 'The Beatlest H&M\r\nT-shirts in soft, printed cotton jersey. Round neckline with a narrow trim.', 'produk1621164283.png', 1, '2021-05-16 11:24:43'),
(11, 7, 'Hoodie Lost Angles', 499000, 'Lost Angles H&M\r\nHoodie in soft, printed cotton jersey. Round neckline with a narrow trim.', 'produk1621164398.png', 1, '2021-05-16 11:26:38'),
(12, 7, 'Hoodie Billie Elish', 499000, 'Billie elish X H&M\r\nin soft, printed cotton jersey. Round neckline with a narrow trim.', 'produk1621164545.png', 1, '2021-05-16 11:29:05'),
(13, 7, 'Hoodie Star Wars', 499000, 'Star Wars x H&M\r\nHoodie in soft, printed cotton jersey. Round neckline with a narrow trim.', 'produk1621164609.png', 1, '2021-05-16 11:30:09'),
(14, 7, 'Hoodie Ariana Grande', 499000, 'Ariana Grande x H&M\r\nHoodie in soft, printed cotton jersey. Round neckline with a narrow trim. ', 'produk1621164694.png', 1, '2021-05-16 11:31:34'),
(15, 7, 'Hoodie Marvel', 499000, 'Marvel studio x H&M\r\nHoodie in soft, printed cotton jersey. Round neckline with a narrow trim.', 'produk1621164774.png', 1, '2021-05-16 11:32:54'),
(16, 7, 'Hoodie Nirvana', 499000, 'Nirvana x H&M\r\nHoodie in soft, printed cotton jersey. Round neckline with a narrow trim.', 'produk1621164822.png', 1, '2021-05-16 11:33:42'),
(17, 9, 'Sepatu Compass x Fxxrabits', 538000, 'Sepatu compass x Fxxrabit hight  collab terbaru dengan bahan yang enak untuk di pakai kini tersedia ', 'produk1621760795.png', 1, '2021-05-23 08:57:05'),
(18, 10, 'Celana cargolisht', 259000, 'celana cargolisht dengan ukuran 32 yang akan membuat nyaman dalam berjalan karena menggunakan bahan yang sangat bagus', 'produk1621760304.png', 1, '2021-05-23 08:58:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
