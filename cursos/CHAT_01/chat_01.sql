-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 07, 2018 at 10:34 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat_01`
--

DROP TABLE IF EXISTS `chat_01`;
CREATE TABLE IF NOT EXISTS `chat_01` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_01`
--

INSERT INTO `chat_01` (`id`, `name`, `msg`, `date`) VALUES
(1, 'Sara', 'Hello', '2018-02-07 19:27:10'),
(2, 'Michael', 'Bonjour', '2018-02-07 19:27:10'),
(5, 'Gogo', 'GAGA', '2018-02-07 21:52:20'),
(44, '', '', '2018-02-07 22:28:58'),
(43, '', '', '2018-02-07 22:28:48'),
(42, '', '', '2018-02-07 22:27:06'),
(41, '', '', '2018-02-07 22:27:04'),
(40, '', '', '2018-02-07 22:24:30'),
(39, '', '', '2018-02-07 22:24:28'),
(38, '', '', '2018-02-07 22:24:26'),
(37, '', '', '2018-02-07 22:24:24'),
(36, '', '', '2018-02-07 22:24:19'),
(35, '', '', '2018-02-07 22:23:40'),
(34, '', '', '2018-02-07 22:22:42'),
(33, '', '', '2018-02-07 22:22:16'),
(32, '', '', '2018-02-07 22:14:20');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
