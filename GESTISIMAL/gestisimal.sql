-- phpMyAdmin SQL Dump
-- version 4.6.4deb1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 17, 2017 at 11:58 AM
-- Server version: 5.7.18-0ubuntu0.16.10.1
-- PHP Version: 7.0.15-0ubuntu0.16.10.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestisimal`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prodId` int(100) NOT NULL,
  `prodName` varchar(100) NOT NULL,
  `prodDesc` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `prodBuy` int(100) DEFAULT NULL,
  `prodSell` int(100) DEFAULT NULL,
  `stock` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prodId`, `prodName`, `prodDesc`, `prodBuy`, `prodSell`, `stock`) VALUES
(23, 'Dell AMD Sempron 145', 'CPU: AMD Sempron 145; Grafica: Gigabyte GeForce GTX 660; RAM: 32Gb; Disco: Seagate BackUp;', 795, 895, 10),
(24, 'Msi FX FX-6200', 'CPU: AMD FX FX-6200; Grafica: Sapphire Radeon HD 5450; RAM: 8Gb; Disco: Transcend Store Canvio;', 1270, 1390, 9),
(25, 'Hp i7-3820', 'CPU: Intel Core i7-3820; Grafica: EVGA Geforce 210; RAM: 12Gb; Disco: Seagate STBX100020', 1180, 1080, 20),
(30, 'Samsung J3', 'Procesador QuadCore 1,5Ghz, 8Gb, Camara 8Mp, Camara secundaria 5Mp', 219, 235, 20),
(31, 'Acer A4 5300', 'CPU: AMD A4 5300; Grafica: ASUS GeForce GTX 960; RAM: 8Gb; Disco: Toshiba Canvio Basics;', 670, 688, 0),
(32, 'Asus i5 4930k', 'CPU: Intel Core i5 4930k; Grafica: ASUS GTX750-PHOC; RAM: 12Gb; Disco: Western Digital Elements;', 770, 825, 40),
(33, 'Samsung i7-3820', 'CPU: Intel Core i7-3820; Grafica: EVGA Geforce 210; RAM: 12Gb; Disco: Seagate STBX1000201', 980, 1040, 10),
(34, 'Yamaha Altavoces 120W Rojas', 'Potencia 120W, Frecuencia 34Mz', 22, 28, 15),
(35, 'Samsung J5', 'Procesador QuadCore 1,5Ghz, 16Gb, Camara 13Mp, Camara secundaria 5Mp', 240, 250, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(100) NOT NULL,
  `userName` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `userPass` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `cargo` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `userPass`, `cargo`) VALUES
(1, 'admin', 'admin123', 'admin'),
(2, 'costy', 'costyb1', 'user'),
(3, 'lala', 'lala22', 'user'),
(4, 'vuvu', '1234r', 'user'),
(5, 'marilola', 'mariadolores', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prodId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prodId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
