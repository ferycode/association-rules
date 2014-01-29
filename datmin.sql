-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 08, 2014 at 01:32 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `datmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `items` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=101 ;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `items`) VALUES
(1, 'gula,minyak,roti'),
(2, 'gula,minyak,air'),
(3, 'sabun,air'),
(4, 'minyak,sabun,air'),
(5, 'gula,minyak,sabun,roti,air'),
(6, 'air'),
(7, 'gula,sabun'),
(8, 'gula,sabun,roti'),
(9, 'air'),
(10, 'sabun,air'),
(11, 'sabun,air'),
(12, 'gula,air'),
(13, 'gula,minyak,roti'),
(14, 'sabun,roti,air'),
(15, 'gula,roti,air'),
(16, 'minyak,sabun,roti'),
(17, 'gula,sabun'),
(18, 'roti,air'),
(19, 'gula,minyak,sabun'),
(20, 'roti,air'),
(21, 'gula,minyak,sabun'),
(22, 'gula,sabun,air'),
(23, 'minyak,sabun,air'),
(24, 'gula'),
(25, 'sabun,air'),
(26, 'gula,roti'),
(27, 'minyak,sabun,air'),
(28, 'gula,air'),
(29, 'roti,air'),
(30, 'sabun,roti,air'),
(31, 'minyak,roti'),
(32, 'sabun,roti,air'),
(33, 'minyak,air'),
(34, 'minyak,air'),
(35, 'roti,air'),
(36, 'gula'),
(37, 'gula,roti,air'),
(38, 'minyak,air'),
(39, 'gula,minyak,air'),
(40, 'roti,air'),
(41, 'roti'),
(42, 'gula,sabun,air'),
(43, 'gula,minyak'),
(44, 'roti'),
(45, 'minyak,air'),
(46, 'gula,minyak,air'),
(47, 'gula,sabun,roti,air'),
(48, 'roti'),
(49, 'gula,minyak,air'),
(50, 'gula,roti'),
(51, 'gula'),
(52, 'air'),
(53, 'gula,minyak,sabun'),
(54, 'minyak,air'),
(55, 'sabun'),
(56, 'gula,minyak,sabun'),
(57, 'minyak,air'),
(58, 'sabun'),
(59, 'roti,air'),
(60, 'gula,minyak,sabun,roti'),
(61, 'minyak,sabun,roti'),
(62, 'gula,minyak,sabun'),
(63, 'gula,minyak,sabun'),
(64, 'sabun,roti'),
(65, 'sabun,roti'),
(66, 'sabun,roti'),
(67, 'sabun,roti,air'),
(68, 'gula,sabun'),
(69, 'minyak,air'),
(70, 'minyak,sabun,air'),
(71, 'gula,roti,air'),
(72, 'gula,sabun,roti'),
(73, 'gula,minyak,air'),
(74, 'gula'),
(75, 'sabun,air'),
(76, 'gula,roti'),
(77, 'gula,minyak,sabun,air'),
(78, 'roti'),
(79, 'gula,minyak,sabun,roti'),
(80, 'sabun,air'),
(81, 'minyak'),
(82, 'gula,roti,air'),
(83, 'sabun,roti'),
(84, 'sabun,roti,air'),
(85, 'minyak,roti,air'),
(86, 'gula,sabun,air'),
(87, 'air'),
(88, 'gula,sabun,air'),
(89, 'minyak,sabun,roti,air'),
(90, 'sabun,air'),
(91, 'gula,minyak'),
(92, 'gula,minyak,sabun'),
(93, 'minyak,roti,air'),
(94, 'gula,minyak,air'),
(95, 'minyak,sabun,roti'),
(96, 'gula,minyak,roti'),
(97, 'sabun,air'),
(98, 'gula,sabun,roti'),
(99, 'gula,sabun,roti,air'),
(100, 'gula');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
