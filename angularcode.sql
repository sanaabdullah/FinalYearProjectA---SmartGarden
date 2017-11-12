-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2017 at 10:13 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `angularcode`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartID` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quatity_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartID`, `buyer_id`, `product_id`, `quatity_id`) VALUES
(1, 200, 1, 1),
(2, 200, 2, 2),
(3, 200, 1, 1),
(4, 200, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `customers_auth`
--

CREATE TABLE `customers_auth` (
  `uid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers_auth`
--

INSERT INTO `customers_auth` (`uid`, `name`, `email`, `phone`, `password`, `address`, `city`, `created`) VALUES
(169, 'Swadesh Behera', 'swadesh@gmail.com', '1234567890', '$2a$10$251b3c3d020155f7553c1ugKfEH04BD6nbCbo78AIDVOqS3GVYQ46', '4092 Furth Circle', 'Singapore', '2014-08-31 10:21:20'),
(170, 'Ipsita Sahoo', 'ipsita@gmail.com', '1111111111', '$2a$10$d84ffcf46967db4e1718buENHT7GVpcC7FfbSqCLUJDkKPg4RcgV2', '2, rue du Commerce', 'NYC', '2014-08-31 10:30:58'),
(171, 'Trisha Tamanna Priyadarsini', 'trisha@gmail.com', '2222222222', '$2a$10$c9b32f5baa3315554bffcuWfjiXNhO1Rn4hVxMXyJHJaesNHL9U/O', 'C/ Moralzarzal, 86', 'Burlingame', '2014-08-31 10:32:03'),
(172, 'Sai Rimsha', 'rimsha@gmail.com', '3333333333', '$2a$10$477f7567571278c17ebdees5xCunwKISQaG8zkKhvfE5dYem5sTey', '897 Long Airport Avenue', 'Madrid', '2014-08-31 12:34:21'),
(173, 'Satwik Mohanty', 'satwik@gmail.com', '4444444444', '$2a$10$2b957be577db7727fed13O2QmHMd9LoEUjioYe.zkXP5lqBumI6Dy', 'Lyonerstr. 34', 'San Francisco\n', '2014-08-31 12:36:02'),
(174, 'Tapaswini Sahoo', 'linky@gmail.com', '5555555555', '$2a$10$b2f3694f56fdb5b5c9ebeulMJTSx2Iv6ayQR0GUAcDsn0Jdn4c1we', 'ul. Filtrowa 68', 'Warszawa', '2014-08-31 12:44:54'),
(175, 'Manas Ranjan Subudhi', 'manas@gmail.com', '6666666666', '$2a$10$03ab40438bbddb67d4f13Odrzs6Rwr92xKEYDbOO7IXO8YvBaOmlq', '5677 Strong St.', 'Stavern\n', '2014-08-31 12:45:08'),
(178, 'AngularCode Administrator', 'admin@angularcode.com', '0000000000', '$2a$10$72442f3d7ad44bcf1432cuAAZAURj9dtXhEMBQXMn9C8SpnZjmK1S', 'C/1052, Bangalore', '', '2014-08-31 13:00:26'),
(187, 'aaaaa', 'aaaaa@gmail.com', 'aaaaa', '$2a$10$b42671d16664f148b7163OjHIuNxMsBYe.F0O9A792QsGWlmFzX/a', 'aaaaa', '', '2017-11-12 16:03:17'),
(188, 'aaasfadfda', 'aqwer@gmail.com', '333', '$2a$10$66d4a8aaef5fbd37d6379OI.Cr5uyk32oU0aL7pl8ONYsnN4pVTnS', 'asdasdasd', '', '2017-11-12 16:42:37');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `price` decimal(11,2) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image_location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `name`, `quantity`, `price`, `description`, `image_location`) VALUES
(1, 'Raspberry Pi 3', 50, '189.00', 'Raspberry Pi 3 Model B with 1GB Ram (Support Wifi and Bluetooth 4.1)  ', 'img/product1.jpg'),
(2, 'Raspberry Pi 3', 50, '189.00', 'Raspberry Pi 3 Model B with 1GB Ram (Support Wifi and Bluetooth 4.1)  ', 'img/product1.jpg'),
(3, 'Raspberry Pi 3', 50, '189.00', 'Raspberry Pi 3 Model B with 1GB Ram (Support Wifi and Bluetooth 4.1)  ', 'img/product1.jpg'),
(4, 'Raspberry Pi 3', 50, '189.00', 'Raspberry Pi 3 Model B with 1GB Ram (Support Wifi and Bluetooth 4.1)  ', 'img/product1.jpg'),
(5, 'Raspberry Pi 3', 50, '189.00', 'Raspberry Pi 3 Model B with 1GB Ram (Support Wifi and Bluetooth 4.1)  ', 'img/product1.jpg'),
(6, 'Raspberry Pi 3', 50, '189.00', 'Raspberry Pi 3 Model B with 1GB Ram (Support Wifi and Bluetooth 4.1)  ', 'img/product1.jpg'),
(7, 'Raspberry Pi 3', 50, '189.00', 'Raspberry Pi 3 Model B with 1GB Ram (Support Wifi and Bluetooth 4.1)  ', 'img/product1.jpg'),
(8, 'Raspberry Pi 3', 50, '189.00', 'Raspberry Pi 3 Model B with 1GB Ram (Support Wifi and Bluetooth 4.1)  ', 'img/product1.jpg'),
(9, 'Raspberry Pi 3', 50, '189.00', 'Raspberry Pi 3 Model B with 1GB Ram (Support Wifi and Bluetooth 4.1)  ', 'img/product1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartID`);

--
-- Indexes for table `customers_auth`
--
ALTER TABLE `customers_auth`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `customers_auth`
--
ALTER TABLE `customers_auth`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
