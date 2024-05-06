-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2023 at 01:46 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `itemname` varchar(255) NOT NULL,
  `itempic` varchar(255) NOT NULL,
  `price` int(20) NOT NULL,
  `disprice` int(20) NOT NULL,
  `category` varchar(255) NOT NULL,
  `iteminfo` varchar(255) NOT NULL,
  `cdate` date NOT NULL,
  `up_date` varchar(255) NOT NULL,
  `userid` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `itemname`, `itempic`, `price`, `disprice`, `category`, `iteminfo`, `cdate`, `up_date`, `userid`) VALUES
(2, 'iphone 13', '', 133000, 120000, 'mobile', '', '0000-00-00', '', '6'),
(3, 'iphone 13', '', 133000, 120000, 'mobile', '', '0000-00-00', '', '6'),
(4, 'iphone 13', '', 133000, 120000, 'mobile', '', '0000-00-00', '', '6'),
(6, 'iphone 13', '', 133000, 120000, 'mobile', '', '0000-00-00', '', '6'),
(7, 'iphone 13', '', 133000, 120000, 'mobile', '', '0000-00-00', '', '6'),
(8, 'iphone 13', '', 133000, 120000, 'mobile', '', '0000-00-00', '', '6'),
(14, '', '', 0, 0, '', '', '0000-00-00', '', ''),
(15, '', '', 0, 0, '', '', '0000-00-00', '', ''),
(16, '', '', 0, 0, '', '', '0000-00-00', '', ''),
(18, '', '', 0, 0, '', '', '0000-00-00', '', ''),
(19, '', '', 0, 0, '', '', '0000-00-00', '', ''),
(20, '', '', 0, 0, '', '', '0000-00-00', '', ''),
(23, '', '', 0, 0, '', '', '0000-00-00', '', ''),
(24, '', '', 0, 0, '', '', '0000-00-00', '', ''),
(25, 'iphone 13', '', 133000, 120000, 'mobile', '', '0000-00-00', '', '6'),
(26, '', '', 0, 0, '', '', '0000-00-00', '', ''),
(27, '', '', 0, 0, '', '', '0000-00-00', '', ''),
(28, 'iphone 13', '', 133000, 120000, 'mobile', '', '0000-00-00', '', '6'),
(29, 'iphone 13', '', 133000, 120000, 'mobile', '', '0000-00-00', '', '6'),
(30, '', '', 0, 0, '', '', '0000-00-00', '', ''),
(31, '', '', 0, 0, '', '', '0000-00-00', '', ''),
(32, 'iphone cover', '', 2000, 1599, 'mobile', '', '0000-00-00', '', '6'),
(33, '', '', 0, 0, '', '', '0000-00-00', '', ''),
(34, '', '', 0, 0, '', '', '0000-00-00', '', ''),
(35, 'iphone cover', '', 2000, 1599, 'mobile', '', '0000-00-00', '', '6'),
(37, '', '', 0, 0, '', '', '0000-00-00', '', ''),
(38, '', '', 0, 0, '', '', '0000-00-00', '', ''),
(39, '', '', 0, 0, '', '', '0000-00-00', '', ''),
(40, '', '', 0, 0, '', '', '0000-00-00', '', ''),
(41, '', '', 0, 0, '', '', '0000-00-00', '', ''),
(42, 'iphone cover', '', 2000, 1599, 'mobile', '', '0000-00-00', '', '6'),
(43, 'iphone cover', '', 2000, 1599, 'mobile', '', '0000-00-00', '', '6'),
(44, 'iphone cover', '', 2000, 1599, 'mobile', '', '0000-00-00', '', '6'),
(45, 'iphone cover', '', 2000, 1599, 'mobile', '', '0000-00-00', '', '6'),
(46, 'iphone 13', '', 133000, 120000, 'mobile', '', '0000-00-00', '', '6'),
(47, 'iphone 13', '', 133000, 120000, 'mobile', '', '0000-00-00', '', '6'),
(48, '', '', 0, 0, '', '', '0000-00-00', '', ''),
(49, '', '', 0, 0, '', '', '0000-00-00', '', ''),
(50, '', '', 0, 0, '', '', '0000-00-00', '', ''),
(51, '', '', 0, 0, '', '', '0000-00-00', '', ''),
(52, '', '', 0, 0, '', '', '0000-00-00', '', ''),
(53, '', '', 0, 0, '', '', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cname`) VALUES
(1, 'MOBIL'),
(2, 'Mobile Cover');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `itemname` varchar(255) NOT NULL,
  `itempic` varchar(255) NOT NULL,
  `price` int(20) NOT NULL,
  `disprice` int(20) NOT NULL,
  `category` varchar(255) NOT NULL,
  `iteminfo` varchar(255) NOT NULL,
  `cdate` date NOT NULL,
  `up_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `itemname`, `itempic`, `price`, `disprice`, `category`, `iteminfo`, `cdate`, `up_date`) VALUES
(5, 'Iphone', 'ap3.jpg', 22222000, 333333, 'mobile', ' hfbrjbvjtbvjtbvjtnb', '2023-11-27', ''),
(6, 'iphone 13', 'aq4.jpg', 133000, 120000, 'mobile', ' hfxgchgc\r\nhvhvjbkjb\r\nhvhvhj', '2023-11-28', ''),
(9, 'iphone cover', 'ap2.jpg', 2000, 1599, 'mobile', ' hmvhjv\r\ngvjvgb\r\ngbjkbvj\r\n', '2023-11-30', ''),
(10, 'iPhone 15', 'aq4.jpg', 1233, 1201, 'mobile cover', ' efrdgv\r\nevdrf\r\ngedrgv', '2023-12-02', '');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `itemname` varchar(255) NOT NULL,
  `itempic` varchar(255) NOT NULL,
  `price` int(20) NOT NULL,
  `disprice` int(20) NOT NULL,
  `category` varchar(255) NOT NULL,
  `iteminfo` varchar(255) NOT NULL,
  `cdate` date NOT NULL,
  `up_date` varchar(255) NOT NULL,
  `userid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `itemname`, `itempic`, `price`, `disprice`, `category`, `iteminfo`, `cdate`, `up_date`, `userid`) VALUES
(1, 'iphone 13', '', 133000, 120000, 'mobile', '', '0000-00-00', '', '6'),
(2, 'iphone 13', '', 133000, 120000, 'mobile', '', '0000-00-00', '', '6'),
(3, 'iphone 13', '', 133000, 120000, 'mobile', '', '0000-00-00', '', '6'),
(5, 'iphone 13', '', 133000, 120000, 'mobile', '', '0000-00-00', '', '6'),
(6, 'iphone 13', '', 133000, 120000, 'mobile', '', '0000-00-00', '', '14'),
(7, 'iphone 13', '', 133000, 120000, 'mobile', '', '0000-00-00', '', '6'),
(8, 'iphone 13', 'aq4.jpg', 133000, 120000, 'mobile', '', '0000-00-00', '', '6'),
(9, 'Iphone', 'ap3.jpg', 22222000, 333333, 'mobile', '', '0000-00-00', '', '6'),
(10, 'iphone 13', 'aq4.jpg', 133000, 120000, 'mobile', '', '0000-00-00', '', '6'),
(11, 'iphone 13', 'aq4.jpg', 133000, 120000, 'mobile', '', '0000-00-00', '', '6'),
(12, 'Iphone', 'ap3.jpg', 22222000, 333333, 'mobile', '', '0000-00-00', '', '6'),
(13, 'Iphone', 'ap3.jpg', 22222000, 333333, 'mobile', '', '0000-00-00', '', '6'),
(14, '', '', 0, 0, '', '', '0000-00-00', '', ''),
(15, 'Iphone', 'ap3.jpg', 22222000, 333333, 'mobile', '', '0000-00-00', '', '6'),
(16, 'Iphone', 'ap3.jpg', 22222000, 333333, 'mobile', '', '0000-00-00', '', '6'),
(17, '', '', 0, 0, '', '', '0000-00-00', '', ''),
(18, 'Iphone', 'ap3.jpg', 22222000, 333333, 'mobile', '', '0000-00-00', '', '6'),
(19, '', '', 0, 0, '', '', '0000-00-00', '', ''),
(20, '', '', 0, 0, '', '', '0000-00-00', '', ''),
(21, 'Iphone', 'ap3.jpg', 22222000, 333333, 'mobile', '', '0000-00-00', '', '6'),
(22, '', '', 0, 0, '', '', '0000-00-00', '', ''),
(24, 'Iphone', 'ap3.jpg', 22222000, 333333, 'mobile', '', '0000-00-00', '', '6');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(55) NOT NULL,
  `phone` int(20) NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `pin` int(11) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `dob`, `gender`, `email`, `phone`, `password`, `address`, `pin`, `role`) VALUES
(12, 'sumit ', 'rai', '2023-11-27', ' Female', 'sumitkrai@gmail.com', 6868686, ' 123', '4fxch', 233223, 1),
(14, 'SUMIT', '453771', '2023-11-28', ' Male', 'musk@gmail.com', 2147483647, ' 123', '49 DWARKA VALLEY NEAR OMAXE CITY 2', 23322, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
