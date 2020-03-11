-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2020 at 09:15 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wireless`
--

-- --------------------------------------------------------

--
-- Table structure for table `productimg`
--

CREATE TABLE `productimg` (
  `id` int(11) NOT NULL,
  `img_id` int(11) NOT NULL,
  `img` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productimg`
--

INSERT INTO `productimg` (`id`, `img_id`, `img`) VALUES
(16, 6, 'img/download (2).jfif'),
(17, 6, 'img/download (3).jfif'),
(18, 6, 'img/download.jfif'),
(19, 7, 'img/61aOa+4v4IL._AC_SX466_.jpg'),
(20, 7, 'img/download (4).jfif'),
(21, 7, 'img/images.jfif'),
(31, 11, 'img/66521_1563457687.jpg'),
(32, 11, 'img/Huawei-Y9-Prime-Features.jpg'),
(33, 11, 'img/batman-minimalist_3840x2160_xtrafondos.com.jpg'),
(34, 12, 'img/66521_1563457687.jpg'),
(35, 12, 'img/Huawei-Y9-Prime-Features.jpg'),
(36, 12, 'img/'),
(40, 14, 'img/'),
(41, 14, 'img/'),
(42, 14, 'img/'),
(46, 16, 'img/'),
(47, 16, 'img/'),
(48, 16, 'img/'),
(52, 18, 'img/'),
(53, 18, 'img/'),
(54, 18, 'img/'),
(55, 19, 'img/'),
(56, 19, 'img/'),
(57, 19, 'img/'),
(58, 20, 'img/'),
(59, 20, 'img/'),
(60, 20, 'img/'),
(61, 21, 'img/'),
(62, 21, 'img/'),
(63, 21, 'img/');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `category` varchar(50) NOT NULL,
  `sub_category` varchar(1000) NOT NULL,
  `color` varchar(1000) NOT NULL,
  `brief_description` varchar(1000) NOT NULL,
  `summary` varchar(1000) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `pprice` varchar(50) NOT NULL,
  `sold_available` varchar(50) NOT NULL,
  `product_img` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `sub_category`, `color`, `brief_description`, `summary`, `price`, `pprice`, `sold_available`, `product_img`) VALUES
(6, 'Samsung earphones', 'Accessories', 'earphones', 'white', '* model 32lc3 <br>\r\n* 50 cm <br>\r\n* Plastic earpiece \r\n\r\n', 'Very good for movies and video watching in YouTube . Has a high base with quality sound . More durable and original   ', '450', '500', 'Available', 'img/download (1).jfif'),
(7, 'mac book pro', 'Laptops', 'mac', 'space grey', '* Core i5 inside 2.45ghz clock speed <br>\r\n* Retina display <br>\r\n* 6gb ram <br>\r\n* 500 gb HDD <br>\r\n* 3 USB ports <br>\r\n* Headphone jack \r\n', 'Light weight yet very powerful  and very premium feel . Able to do heavy task with minimum fan speed and handles thermo  issues quite well .', '100,000', '150,000', 'Sold out', 'img/apple-macbook-air-retina-13-326quot-i5-1-6-ghz-8-gb-ram-256-gb-ssd-space-grau_z1.jpg'),
(16, 'sad', 'Smartphones', 'huawei', '12', 'lasnskj', 'sjcs', '23', '23', 'Available', 'img/huawei-p30-lite-256gb-dual-sim-crystal.jpg'),
(18, 'asdas', 'Smartphones', 'others0', 'adas', 'sadas', 'sadas', '121', '121', 'Available', 'img/huawei-p30-lite-256gb-dual-sim-crystal.jpg'),
(19, 'asdsa', 'Smartphones', 'huawei', 'sad', 'sadas', 'sadas', '12', '12', 'Available', 'img/huawei-p30-lite-256gb-dual-sim-crystal.jpg'),
(20, 'assas', 'Laptops', '', 'asd', 'sadas', 'sadas', '1', '1', 'Available', 'img/huawei-p30-lite-256gb-dual-sim-crystal.jpg'),
(21, 'a', 'Smartphones', 'samsung', 'as', 'sdas', 'asdas', '121', '12', 'Available', 'img/huawei-p30-lite-256gb-dual-sim-crystal.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `last_login` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user`, `password`, `last_login`) VALUES
(1, 'hassan', '123', '2020-03-09 05:58:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productimg`
--
ALTER TABLE `productimg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `productimg`
--
ALTER TABLE `productimg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
