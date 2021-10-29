-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 18, 2020 at 01:51 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estore`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'Apple iPhone XR', 95000),
(2, 'Google pixel 3a', 47999),
(3, 'Pocco x2', 37999),
(4, 'Realme X', 57900),
(5, 'oppo-reno-10x', 27990),
(6, 'Motorola-racer-turbo', 42900),
(7, 'vivo S1 Pro', 20990),
(8, 'OPPO F11', 23990),
(9, 'Redmi Note 9 Pro Max', 16499),
(10, 'Honor 20', 35999),
(11, 'Samsung Galaxy Note10 Lite', 45000),
(12, 'Samsung Galaxy S20 Ultra ', 97999);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(2, 'Rahul yadav', 'ryadav1091997@gmail.com', '7c4e4ae67db616a2625f166ba7e427f8', 9211380300, 'new delhi', 'A-35 Sarai'),
(5, 'Rahul yadav', 'ry1091997@gmail.com', 'ae9cf00e2eb35549c1bdc6b7380e8b13', 9211380300, 'new delhi', 'A-35 Sarai'),
(6, 'Rahul yadav', 'sy1091997@gmail.com', 'ae9cf00e2eb35549c1bdc6b7380e8b13', 9211380300, 'new delhi', 'A-35 Sarai'),
(7, 'Rahul yadav', 'ay1091997@gmail.com', 'ae9cf00e2eb35549c1bdc6b7380e8b13', 9211380300, 'new delhi', 'A-35 Sarai');

-- --------------------------------------------------------

--
-- Table structure for table `users_contact`
--

DROP TABLE IF EXISTS `users_contact`;
CREATE TABLE IF NOT EXISTS `users_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_contact`
--

INSERT INTO `users_contact` (`id`, `name`, `email`, `message`) VALUES
(25, '', 'ryadav1091997@gmail.com', ''),
(26, 'Rahul yadav', 'ry1091997@gmail.com', 'My name is Rahul yadav');

-- --------------------------------------------------------

--
-- Table structure for table `users_item`
--

DROP TABLE IF EXISTS `users_item`;
CREATE TABLE IF NOT EXISTS `users_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `items_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `items_id` (`items_id`),
  KEY `users_id` (`users_id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_item`
--
ALTER TABLE `users_item`
  ADD CONSTRAINT `users_item_ibfk_1` FOREIGN KEY (`items_id`) REFERENCES `items` (`id`),
  ADD CONSTRAINT `users_item_ibfk_2` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
