-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2018 at 06:25 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `fan`
--

CREATE TABLE `fan` (
  `FanID` int(10) UNSIGNED NOT NULL,
  `FanName` varchar(50) NOT NULL,
  `GPIO` int(10) UNSIGNED NOT NULL,
  `Reading` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ldr`
--

CREATE TABLE `ldr` (
  `LDRID` int(10) UNSIGNED NOT NULL,
  `LDRName` varchar(50) NOT NULL,
  `Channel` int(10) UNSIGNED NOT NULL,
  `Reading` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `light`
--

CREATE TABLE `light` (
  `LightID` int(10) UNSIGNED NOT NULL,
  `LightName` varchar(50) NOT NULL,
  `GPIO` int(10) UNSIGNED NOT NULL,
  `Reading` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `moisture`
--

CREATE TABLE `moisture` (
  `MoistID` int(10) UNSIGNED NOT NULL,
  `MoistName` varchar(50) NOT NULL,
  `Channel` int(10) UNSIGNED NOT NULL,
  `Reading` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(2, 'MCP30008', 50, '21.00', '10-bit Analog-to-Digital (A/D) converters\r\nNumber of Pins: 16 DIP  ', 'img/product2.jpg'),
(3, 'Digital Temperature & Relative Humidity Sensor', 50, '28.00', 'Digital Temperature & Relative Humidity Sensor DHT11 Module  ', 'img/product3.jpg'),
(4, 'Led Plant Grow Light Red', 50, '17.00', 'LEDs Hydroponic Lamp Bulb For Flower Plants and Aquarium Power:3W  \r\n Be the first to review this product', 'img/product4.jpg'),
(5, 'Soil Moisture Sensor', 50, '14.00', 'Ishowmall Soil Hygrometer Detection Module Soil Moisture Sensor For Arduino Smart car   ', 'img/product5.jpg'),
(6, 'Cooler Master MasterFan', 50, '68.00', 'Cooler Master MasterFan Pro 140 Air Flow Cooling Fan (MFY-F4NN-08NMK)  ', 'img/product6.jpg'),
(7, '12V Moisture Drops Control Module Moisture Sensor', 50, '18.00', 'Relay load capacity: 250 V 10A (AC) 30 V 10A (DC)', 'img/product7.jpg'),
(8, 'Connector Wire Breadboard Jumper Cable', 50, '15.00', 'Male/Male For Arduino 20cm 2.54mm 40 PCS ', 'img/product8.jpg'),
(9, '3-in-1 8-CH 24V Relay Module w/ Optocoupler', 50, '45.00', 'Adopt patch optical coupling isolation, strong drive capability; \r\nReliable performance, trigger current: 5mA; \r\nWorking voltage: 24V; ', 'img/product9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `temperature`
--

CREATE TABLE `temperature` (
  `TempID` int(10) UNSIGNED NOT NULL,
  `TempName` varchar(50) NOT NULL,
  `GPIO` int(10) UNSIGNED NOT NULL,
  `ReadingTemp` int(11) DEFAULT NULL,
  `ReadingHumidity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `valve`
--

CREATE TABLE `valve` (
  `ValveID` int(10) UNSIGNED NOT NULL,
  `ValveName` varchar(50) NOT NULL,
  `GPIO` int(10) UNSIGNED NOT NULL,
  `Reading` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `waterlevel`
--

CREATE TABLE `waterlevel` (
  `WaterID` int(10) UNSIGNED NOT NULL,
  `WaterName` varchar(50) NOT NULL,
  `GPIO` int(10) UNSIGNED NOT NULL,
  `Channel` int(10) UNSIGNED NOT NULL,
  `Reading` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for table `fan`
--
ALTER TABLE `fan`
  ADD PRIMARY KEY (`FanID`);

--
-- Indexes for table `ldr`
--
ALTER TABLE `ldr`
  ADD PRIMARY KEY (`LDRID`);

--
-- Indexes for table `light`
--
ALTER TABLE `light`
  ADD PRIMARY KEY (`LightID`);

--
-- Indexes for table `moisture`
--
ALTER TABLE `moisture`
  ADD PRIMARY KEY (`MoistID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `temperature`
--
ALTER TABLE `temperature`
  ADD PRIMARY KEY (`TempID`);

--
-- Indexes for table `valve`
--
ALTER TABLE `valve`
  ADD PRIMARY KEY (`ValveID`);

--
-- Indexes for table `waterlevel`
--
ALTER TABLE `waterlevel`
  ADD PRIMARY KEY (`WaterID`);

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
-- AUTO_INCREMENT for table `fan`
--
ALTER TABLE `fan`
  MODIFY `FanID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ldr`
--
ALTER TABLE `ldr`
  MODIFY `LDRID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `light`
--
ALTER TABLE `light`
  MODIFY `LightID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `moisture`
--
ALTER TABLE `moisture`
  MODIFY `MoistID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `temperature`
--
ALTER TABLE `temperature`
  MODIFY `TempID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `valve`
--
ALTER TABLE `valve`
  MODIFY `ValveID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `waterlevel`
--
ALTER TABLE `waterlevel`
  MODIFY `WaterID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
