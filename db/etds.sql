-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2021 at 08:39 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `etds`
--

-- --------------------------------------------------------

--
-- Table structure for table `consumer`
--

CREATE TABLE `consumer` (
  `id` int(11) NOT NULL,
  `lineCurrent` float NOT NULL,
  `currentConsume` float NOT NULL,
  `voltage` float NOT NULL,
  `nid` int(14) NOT NULL,
  `dateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `consumer`
--

INSERT INTO `consumer` (`id`, `lineCurrent`, `currentConsume`, `voltage`, `nid`, `dateTime`) VALUES
(1, 1, 1, 15, 1111111113, '2021-09-16 21:01:48'),
(2, 1, 1, 15, 1111111113, '2021-09-17 12:34:56');

-- --------------------------------------------------------

--
-- Table structure for table `distributor`
--

CREATE TABLE `distributor` (
  `id` int(11) NOT NULL,
  `lineCurrent` float NOT NULL,
  `voltage` float NOT NULL,
  `nid` int(14) NOT NULL,
  `dateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `distributor`
--

INSERT INTO `distributor` (`id`, `lineCurrent`, `voltage`, `nid`, `dateTime`) VALUES
(1, 1, 30, 652111134, '2021-09-16 20:58:16');

-- --------------------------------------------------------

--
-- Table structure for table `main`
--

CREATE TABLE `main` (
  `id` int(11) NOT NULL,
  `mainCurr` float NOT NULL,
  `lineCurr1` float NOT NULL,
  `consumerCurr1` float NOT NULL,
  `lineCurr2` float NOT NULL,
  `consumerCurr2` float NOT NULL,
  `dateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `main`
--

INSERT INTO `main` (`id`, `mainCurr`, `lineCurr1`, `consumerCurr1`, `lineCurr2`, `consumerCurr2`, `dateTime`) VALUES
(1, 1, 1, 0.5, 0.5, 0.5, '2021-09-17 19:07:26'),
(2, 1.5, 1.5, 0.5, 0.5, 0.5, '2021-09-17 19:07:26'),
(3, 1.5, 1, 0.5, 0.5, 0.5, '2021-09-22 20:25:41');

-- --------------------------------------------------------

--
-- Table structure for table `theft`
--

CREATE TABLE `theft` (
  `id` int(11) NOT NULL,
  `location` text NOT NULL,
  `status` text NOT NULL,
  `dateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theft`
--

INSERT INTO `theft` (`id`, `location`, `status`, `dateTime`) VALUES
(10, 'L2', 'yes', '2021-09-22 10:01:48'),
(11, 'L1', 'yes', '2021-09-23 00:27:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `userType` text NOT NULL,
  `nid` int(14) NOT NULL,
  `img` text NOT NULL,
  `phone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `userType`, `nid`, `img`, `phone`) VALUES
(2, 'Shahriar', 'shahriar@gmail.com', '12345', 'consumer', 1111111113, 'img3.jpg', '01521431502'),
(3, 'Abdullah', 'shahariaresha@gmail.com', '033', 'consumer', 111123322, 'img.png', '01748292210'),
(4, 'Isha', 'shahariarabdullah490@gmail.com', '123', 'distributor', 652111134, 'img1.jpg', '01312962732'),
(5, 'Saqibur', '18-37577-1@studen.aiub.edu', '12345', 'consumer', 116536113, 'img2.jpg', '0145525626');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consumer`
--
ALTER TABLE `consumer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `distributor`
--
ALTER TABLE `distributor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main`
--
ALTER TABLE `main`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theft`
--
ALTER TABLE `theft`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `consumer`
--
ALTER TABLE `consumer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `distributor`
--
ALTER TABLE `distributor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `main`
--
ALTER TABLE `main`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `theft`
--
ALTER TABLE `theft`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
