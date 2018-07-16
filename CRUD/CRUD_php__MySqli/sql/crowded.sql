-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 05, 2016 at 10:37 AM
-- Server version: 5.7.16-0ubuntu0.16.04.1
-- PHP Version: 7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crowded`
--

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `city` varchar(40) NOT NULL,
  `userId` int(10) NOT NULL,
  `pubId` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`city`, `userId`, `pubId`) VALUES
('Cadiz', 0, 0),
('Madrid', 0, 0),
('Málaga', 0, 0),
('Pozuelo', 0, 0),
('Verareyes', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pub`
--

CREATE TABLE `pub` (
  `pubId` int(10) NOT NULL,
  `pubLogo` text NOT NULL,
  `pubName` varchar(20) NOT NULL,
  `pubPass` varchar(10) NOT NULL,
  `pubEmail` varchar(20) NOT NULL,
  `pubUbication` varchar(40) NOT NULL,
  `city` varchar(40) NOT NULL,
  `dateHigh` datetime DEFAULT CURRENT_TIMESTAMP,
  `capacity` int(11) NOT NULL,
  `musicType` varchar(20) DEFAULT NULL,
  `pubDj` varchar(20) DEFAULT NULL,
  `userType` varchar(10) NOT NULL DEFAULT 'pub'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pub`
--

INSERT INTO `pub` (`pubId`, `pubLogo`, `pubName`, `pubPass`, `pubEmail`, `pubUbication`, `city`, `dateHigh`, `capacity`, `musicType`, `pubDj`, `userType`) VALUES
(13, '', 'Capital', '8888avc', 'capital@hotmail.com', 'C/Alfonso III 43', 'Málaga', '2016-11-30 10:27:38', 324, '', 'Oliver Haldens', 'pub'),
(14, '', 'Hot Vip', '7777a', 'hotvip@hotmail.com', 'C/Juan Carlito 11', 'Verareyes', '2016-11-30 10:27:38', 112, 'latin music', 'Mongolo', 'pub'),
(15, '', 'Maroma', '66666a', 'maroma@yahoo.com', 'Málaga', 'Málaga', '2016-11-30 10:29:13', 322, '', '', 'pub');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(10) NOT NULL,
  `userPhoto` text NOT NULL,
  `userName` varchar(40) NOT NULL,
  `userPass` varchar(10) NOT NULL,
  `userEmail` varchar(40) NOT NULL,
  `userType` varchar(10) NOT NULL DEFAULT 'user',
  `dateHigh` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `city` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `userPhoto`, `userName`, `userPass`, `userEmail`, `userType`, `dateHigh`, `city`) VALUES
(26, '', 'costy', '1234e', 'costy@gmail', 'user', '2016-11-29 12:07:33', ''),
(27, '', 'costynho', '1234tt', 'constynho@gmail.com', 'user', '2016-11-29 12:13:33', 'Pozuelo'),
(28, '', 'admin', 'Sjzm0080', 'brand_constantin@hotmail.com', 'admin', '2016-11-30 10:23:07', 'Málaga'),
(29, 'foto.jpg', 'Luis', '12345r', 'luis@gmail.com', 'user', '2016-12-02 08:50:17', 'Málaga');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`city`);

--
-- Indexes for table `pub`
--
ALTER TABLE `pub`
  ADD PRIMARY KEY (`pubId`),
  ADD UNIQUE KEY `pubPass` (`pubPass`),
  ADD KEY `city` (`city`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `contrasenia` (`userPass`),
  ADD UNIQUE KEY `userName` (`userName`),
  ADD KEY `city` (`city`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pub`
--
ALTER TABLE `pub`
  MODIFY `pubId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
