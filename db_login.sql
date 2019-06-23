-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 23, 2019 at 06:36 
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_gps`
--

CREATE TABLE IF NOT EXISTS `tb_gps` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_gps` varchar(20) DEFAULT NULL,
  `model_gps` varchar(20) DEFAULT NULL,
  `gps_name` varchar(20) DEFAULT NULL,
  `wanthy_month` int(11) DEFAULT NULL,
  `buy_date` char(10) NOT NULL,
  `sold_date` char(10) NOT NULL,
  `sold_to` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `flag` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Dumping data for table `tb_gps`
--

INSERT INTO `tb_gps` (`id`, `brand_gps`, `model_gps`, `gps_name`, `wanthy_month`, `buy_date`, `sold_date`, `sold_to`, `foto`, `description`, `flag`) VALUES
(65, 'tes', 'tes', 'tes', 8, '06/08/2019', '06/21/2019', 'tes', 'ICT.png', 'ok', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(90) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `level` int(10) DEFAULT NULL,
  `flag` int(1) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=72 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `pass`, `level`, `flag`) VALUES
(70, 'admin', '1234', 1, 1),
(71, 'user', '1234', 2, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
