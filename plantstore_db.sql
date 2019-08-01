-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2019 at 04:35 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plantstore_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `address_data`
--

CREATE TABLE `address_data` (
  `address_id` int(7) NOT NULL,
  `userid` int(5) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  `province` varchar(20) NOT NULL,
  `postal_code` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address_data`
--

INSERT INTO `address_data` (`address_id`, `userid`, `address`, `city`, `province`, `postal_code`) VALUES
(1, 19, 'Smart City', 'Bandung', 'Jawa Barat', 40288),
(2, 21, 'telkom university', 'bandung', 'Jawa Barat', 40288),
(3, 21, 'gba 1', 'bandung', 'Jawa Barat', 40288),
(4, 22, 'bsd', 'tangsel', 'Banten', 15318);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `userid` int(5) NOT NULL,
  `prod_id` int(10) NOT NULL,
  `amount` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`userid`, `prod_id`, `amount`) VALUES
(3, 2, 1),
(3, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `id_data`
--

CREATE TABLE `id_data` (
  `userid` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `id_data`
--

INSERT INTO `id_data` (`userid`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@playsthetic.com', 'iniadmin'),
(2, 'playsthetic', 'play@playsthetic.com', 'bukanadmin'),
(3, 'naufalmukhbit', 'nmukhbit@gmail.com', '120jets'),
(18, 'flipflop', 'flip@flop.com', 'flip123'),
(33, 'bjsck', 'knsck@cn.com', 'bbb'),
(34, 'paymukh', 'nopayers@gmail.com', 'replokmania');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prod_id` int(10) NOT NULL,
  `prod_name` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `prod_desc` varchar(1000) NOT NULL,
  `userid` int(5) NOT NULL,
  `img_src` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prod_id`, `prod_name`, `price`, `prod_desc`, `userid`, `img_src`) VALUES
(1, 'Patriot Seeds Organic Beefsteak Tomato', 59000, '', 2, 'tomato2.jpg'),
(2, 'Patriot Seeds Organic Marion Tomato', 69000, '', 2, 'tomato1.jpg'),
(3, 'Polo Ralph Lauren Shirt', 149000, '', 3, 'polo.jpg'),
(4, 'Aarbee Men\'s Cotton T-Shirt', 80000, '', 18, '1..jpg'),
(5, 'BAPE X DRAGONBALLZ FRIENDS WHITE Sweater', 120000, '', 18, '2..jpg'),
(6, 'Nongxindazao Mini Cherry Tomato', 70000, '', 3, 'tomato3.png');

-- --------------------------------------------------------

--
-- Table structure for table `profile_data`
--

CREATE TABLE `profile_data` (
  `userid` int(5) NOT NULL,
  `name` varchar(65) NOT NULL,
  `bdate` date NOT NULL,
  `gender` varchar(9) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `disp_pic` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile_data`
--

INSERT INTO `profile_data` (`userid`, `name`, `bdate`, `gender`, `phone`, `disp_pic`) VALUES
(1, 'Administrator', '1998-08-27', 'Laki-laki', '082114435057', ''),
(2, 'Plantstore Jakarta', '2018-04-30', 'Laki-laki', '-', ''),
(3, 'Naufal Mukhbit A', '2018-05-16', 'Laki-laki', '0821-1443-505', '632912.jpg'),
(18, 'James Gullivan', '1995-03-23', 'Laki-laki', '080866662222', ''),
(33, 'efafw', '2018-05-01', 'Laki-laki', '2424-2142-422', '2015-03-28_02_37_01_2.jpg'),
(34, 'Naufal Mukhbit', '1998-08-27', 'Laki-laki', '0882-1858-490', '');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `userid` int(5) NOT NULL,
  `prod_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`userid`, `prod_id`) VALUES
(3, 2),
(3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address_data`
--
ALTER TABLE `address_data`
  ADD PRIMARY KEY (`address_id`);

--
-- Indexes for table `id_data`
--
ALTER TABLE `id_data`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `profile_data`
--
ALTER TABLE `profile_data`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address_data`
--
ALTER TABLE `address_data`
  MODIFY `address_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `id_data`
--
ALTER TABLE `id_data`
  MODIFY `userid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prod_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
