-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2023 at 04:55 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tamim`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `pnumber` int(255) NOT NULL,
  `quantity` int(100) NOT NULL,
  `item` varchar(255) NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `username`, `location`, `pnumber`, `quantity`, `item`, `price`) VALUES
(41, 'fahim', '', 0, 1, 'Chicken Biriyani (Full)', 200),
(42, 'fahim', '', 0, 1, 'UFO Chicken Kabab', 678),
(46, 'sarkar', '', 0, 1, 'Khichuri with Chicken Bhuna ', 160),
(47, 'sarkar', '', 0, 1, 'Beef Biriyani ', 450),
(48, 'sarkar', '', 0, 1, 'UFO Chicken Kabab ', 678),
(73, 'tamim', '', 0, 1, 'Chicken Burger ', 359),
(74, 'tamim', '', 0, 1, 'Chicken Burger ', 359),
(75, 'tamim', '', 0, 1, 'Chicken Burger ', 359),
(76, 'tamim', 'gjhghg', 6565, 1, 'Chicken Burger ', 359);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(50) NOT NULL,
  `item` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `discount` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `item`, `price`, `status`, `discount`) VALUES
(1, 'Chicken Burger', 359, 'Popular', '10% discount'),
(2, 'Khichuri with Chicken Bhuna', 160, 'Popular', ''),
(3, 'Chicken Biriyani (Full)', 200, 'Available', ''),
(4, 'Beef Biriyani', 450, 'Best Choice', '19% discount'),
(6, 'UFO Chicken Kabab', 678, 'Hot Spicy\r\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE `support` (
  `id` int(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `messages` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`id`, `username`, `email`, `messages`) VALUES
(1, 'tamim', '', 'dfsdf'),
(3, 'tamim', '', 'kbkhkhkj'),
(4, 'tamim', '', 'sdfsdfdsfdsfdsfsdfdsfsdfsdfsdfsdfsdfsdfdsfdsfsdf'),
(5, 'tamim', '', ''),
(6, 'tamim', '', 'fdgrgrettr'),
(7, 'tamim', '', 'fdsdf'),
(8, 'tamim', '', 'gfhfghfg'),
(9, 'tamim', '', 'ghg'),
(10, 'tamim', '', 'sdfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pnumber` int(100) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `username`, `password`, `status`, `email`, `pnumber`, `location`) VALUES
(14, 'tamim', '445566', '', 'tamim@gmail.com', 93434, 'Dhaka,Bangladesh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `support`
--
ALTER TABLE `support`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
