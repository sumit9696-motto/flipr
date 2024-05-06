-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2023 at 01:14 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

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
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `itemname`, `itempic`, `price`, `disprice`, `category`, `iteminfo`, `cdate`, `up_date`) VALUES
(5, 'Iphone', 'ap3.jpg', 22222000, 333333, 'mobile', ' hfbrjbvjtbvjtbvjtnb', '2023-11-27', ''),
(6, 'iphone 13', 'aq4.jpg', 133000, 120000, 'mobile', ' hfxgchgc\r\nhvhvjbkjb\r\nhvhvhj', '2023-11-28', ''),
(9, 'iphone cover', 'ap2.jpg', 2000, 1599, 'mobile', ' hmvhjv\r\ngvjvgb\r\ngbjkbvj\r\n', '2023-11-30', '');

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
  `password` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `dob`, `gender`, `email`, `phone`, `password`, `address`, `pin`) VALUES
(7, 'sumit', '1333', '2023-11-05', ' ', 'deeprajrathore3132@gmail.com', 0, ' 666666', 'hftdtgyfvbgtv:', 1333),
(8, 'sumit', '1333', '2023-11-05', ' ', 'deeprajrathore3132@gmail.com', 0, ' 666666', 'hftdtgyfvbgtv:', 1333),
(9, 'sumit', '1333', '2023-11-01', ' Male', 'deeprajrathore3132@gmail.com', 697798798, ' 33333333', 'hftdtgyfvbgtv:', 1333),
(10, 'raj', 'patel', '2004-04-09', ' Male', 'deeprajrathore3132@gmail.com', 697798798, ' 12345', '13 kdhd cs ', 4543321);

--
-- Indexes for dumped tables
--

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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
