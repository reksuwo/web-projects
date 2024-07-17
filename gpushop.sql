-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2023 at 03:11 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gpushop`
--

-- --------------------------------------------------------

--
-- Table structure for table `gpu_tb`
--

CREATE TABLE `gpu_tb` (
  `id` int(11) NOT NULL,
  `productName` varchar(100) DEFAULT NULL,
  `productPic` varchar(100) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gpu_tb`
--

INSERT INTO `gpu_tb` (`id`, `productName`, `productPic`, `price`) VALUES
(1, 'TUF-RTX3060-O12G-V2-GAMING', 'https://dlcdnwebimgs.asus.com/gain/233558c6-999a-4458-98d8-34eac09cb836/', 20000),
(2, 'Gigabyte GeForce RTX 3060 12GB', 'https://ecommerce.datablitz.com.ph/cdn/shop/products/8_d727a927-f7cc-423e-b854-d8abbae33966_800x.png', 18000),
(3, 'GeForce RTX™ 3060 Ti GAMING OC PRO 8G', 'https://ph-test-11.slatic.net/p/cb61424ec3e085a9690758b3371fa165.jpg', 25000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gpu_tb`
--
ALTER TABLE `gpu_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gpu_tb`
--
ALTER TABLE `gpu_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
