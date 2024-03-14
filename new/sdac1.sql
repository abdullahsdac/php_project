-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2024 at 08:34 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdac1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(22) NOT NULL,
  `password` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'sdac', 'sdac');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(22) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` bigint(22) NOT NULL,
  `query` varchar(200) NOT NULL,
  `replied` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `number`, `query`, `replied`) VALUES
(1, 'sdafsda', 'sdfafsda', 3453564, 'sdfaffsdasdfa', ''),
(2, 'sdffds', 'sdafdsdsa@gma.cpom', 421421342314, 'fdssagsadfgas', ''),
(3, 'sdacdfdsaf', 'demopc107@gmail.com', 737890486452357, ' dsafdsagdsagsadgsdasadffdsa', 'your query has been solved'),
(4, 'dfg', 'pavanryadav98@gmail.com', 1234567890, ' fdsafdsagsdasdfdsf', 'sfdabsfabsafdsafdsa'),
(5, 'abdullah', 'abdullahmithani00@gmail.com', 7378904860, ' I want to change the username from sdac to abdullah mithani', 'Your Username has chaged successfully.');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(33) NOT NULL,
  `description` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `image`) VALUES
(10, 'Adarsh', 'gsdfdsa', 'Lighthouse.jpg'),
(11, 'FDSDAF', 'SDFDSFASFAD', 'Desert.jpg'),
(12, 'sadfdsaf', 'sadfdsafdasf', 'Koala.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(22) NOT NULL,
  `email` varchar(22) NOT NULL,
  `username` varchar(22) NOT NULL,
  `password` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`) VALUES
(2, 'abdullah', 'sdac@sdac.com', 'abdullahmithani', 'sdac'),
(3, 'sdac', 'sdac@sdac.com', 'sdac', 'sdac'),
(4, 'sdac', 'sdac@sdac.com', 'sdac', 'sdac'),
(5, 'sdac', 'sdac@sdac.com', 'sdac', 'sdac'),
(6, 'sdac', 'sdac@sdac.com', 'sdac', 'sdac'),
(7, 'sdac', 'sdac@sdac.com', 'sdac', 'sdac'),
(8, 'sdac', 'sdac@sdac.com', 'sdac', 'sdac'),
(9, 'sdac', 'sdac@sdac.com', 'sdac', 'sdac');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
