-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 10, 2018 at 08:33 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `canteen`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE IF NOT EXISTS `card` (
  `card_no` int(200) NOT NULL,
  `amount` int(200) NOT NULL,
  `user_id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`card_no`, `amount`, `user_id`) VALUES
(30940, 515, 1304085),
(2444, 385, 1304083),
(26837, 1000, 1304069),
(26013, 1000, 1304085),
(30879, 120, 1304085);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Product` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`) VALUES
(1, 'Snacks'),
(2, 'Lunch item'),
(7, 'Drinks'),
(8, 'Dinnar');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `item` text NOT NULL,
  `amount` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `dateOrdered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `dateDelivered` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`, `contact`, `address`, `email`, `item`, `amount`, `status`, `dateOrdered`, `dateDelivered`, `user_id`) VALUES
(44, 'Md.Mominul Islam', '1521487473', 'SMS 208', 'mmm@gmail.com', '(1) Chickenbiriyani, ', '100', 'delivered', '2018-07-10 10:50:14', '2018-07-10 10:50:14', 1304085),
(45, 'Md.Mominul Islam', '1521487473', 'SMS 208', 'mmm@gmail.com', '(1) Beef curry, ', '100', 'unconfirmed', '2018-07-10 10:48:28', '0000-00-00 00:00:00', 1304085),
(46, 'Ashraful', '1234567', 'SMS 219', 'ashra@gmail.com', '(1) Beef curry, (1) Rice, ', '15', 'delivered', '2018-07-10 10:50:02', '2018-07-10 10:50:02', 1304083),
(47, 'Md.Mominul Islam', '1521487473', 'SMS 208', 'mmm@gmail.com', '(1) Chickenbiriyani, (1) Rice, ', '15', 'delivered', '2018-07-12 07:10:02', '2018-07-12 07:10:02', 1304085),
(48, 'Md.Mominul Islam', '1521487473', 'SMS 208', 'mmm@gmail.com', '(1) 7up(0.5litre), (1) 7up(0.5litre), ', '30', 'delivered', '2018-07-10 16:30:07', '2018-07-10 16:30:07', 1304085),
(49, 'Ashraful', '1234567', 'SMS 219', 'ashra@gmail.com', '(1) 7up(0.5litre), (1) 7up(0.5litre), ', '30', 'unconfirmed', '2018-07-10 14:11:19', '0000-00-00 00:00:00', 1304083),
(50, 'Ashraful', '1234567', 'SMS 219', 'ashra@gmail.com', '(1) 7up(0.5litre), (1) 7up(0.5litre), ', '30', 'unconfirmed', '2018-07-10 14:13:13', '0000-00-00 00:00:00', 1304083),
(51, 'Ashraful', '1234567', 'SMS 219', 'ashra@gmail.com', '', '30', 'delivered', '2018-07-10 16:30:11', '2018-07-10 16:30:11', 1304083),
(52, 'Ashraful', '1234567', 'SMS 219', 'ashra@gmail.com', '(1) 7up(0.5litre), (2) 7up(0.5litre), ', '30', 'delivered', '2018-07-10 16:31:32', '2018-07-10 16:31:32', 1304083),
(53, 'Ashraful', '1234567', 'SMS 219', 'ashra@gmail.com', '(1) 7up(0.5litre), (2) 7up(0.5litre), ', '90', 'delivered', '2018-07-10 16:31:55', '2018-07-10 16:31:55', 1304083),
(54, 'Ashraful', '1234567', 'SMS 219', 'ashra@gmail.com', '(2) 7up(0.5litre), (1) 7up(0.5litre), ', '90', 'delivered', '2018-07-10 16:29:59', '2018-07-10 16:29:59', 1304083),
(55, 'Md.Mominul Islam', '1521487473', 'SMS 208', 'mmm@gmail.com', '(1) 7up(0.5litre), ', '30', 'delivered', '2018-07-12 06:34:00', '2018-07-12 06:34:00', 1304085);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `imgUrl` text NOT NULL,
  `Product` text NOT NULL,
  `Price` double NOT NULL,
  `Category` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=98 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `imgUrl`, `Product`, `Price`, `Category`) VALUES
(83, 'chonabut.jpg', 'chonabut', 5, 'Snacks'),
(84, 'jilapi.jpg', 'jilapi', 5, 'Snacks'),
(85, 'khaja.jpg', 'khaja', 10, 'Snacks'),
(86, 'puri.jpeg', 'puri', 5, 'Snacks'),
(87, 'khichuri.jpeg', 'khichuri', 15, 'Lunch item'),
(88, 'singgara.jpeg', 'singara', 5, 'Snacks'),
(89, 'rol.jpg', 'rol', 15, 'Snacks'),
(90, 'samucha.jpg', 'samucha', 5, 'Snacks'),
(91, 'teheri.jpeg', 'teheri', 25, 'Lunch item'),
(92, 'images.jpg', '7up(0.5litre)', 30, 'Drinks'),
(93, 'chop.jpeg', 'Chop', 30, 'Snacks'),
(94, 'chop.jpeg', 'chicken fry', 50, 'Snacks'),
(95, 'rice.jpg', 'Rice', 15, 'Dinnar'),
(96, 'biriyani.jpg', 'Chickenbiriyani', 100, 'Dinnar'),
(97, 'beef.jpg', 'Beef curry', 60, 'Dinnar');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `hall` varchar(200) NOT NULL,
  `room` varchar(200) NOT NULL,
  `contact` int(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `remarks` int(11) NOT NULL,
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `id_2` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `hall`, `room`, `contact`, `password`, `remarks`) VALUES
(1304000, 'ABC', 'abc@gmail.com', 'SMS', '123', 12345, '202cb962ac59075b964b07152d234b70', 0),
(1304069, 'Rashed', 'rash@gmail.com', 'NH', '312', 1234567, '81dc9bdb52d04dc20036dbd8313ed055', 2),
(1304083, 'Ashraful', 'ashra@gmail.com', 'SMS', '219', 1234567, '81dc9bdb52d04dc20036dbd8313ed055', 1),
(1304085, 'Md.Mominul Islam', 'mmm@gmail.com', 'SMS', '208', 1521487473, 'b59c67bf196a4758191e42f76670ceba', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
