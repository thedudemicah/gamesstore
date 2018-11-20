-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2018 at 12:39 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `admin_ID` int(5) NOT NULL,
  `username` varchar(22) NOT NULL,
  `password` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`admin_ID`, `username`, `password`) VALUES
(1, 'Micah', '751215916'),
(2, 'Lesego', '77112290');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `special_requirements` longtext NOT NULL,
  `c_ID` int(10) NOT NULL,
  `city` text NOT NULL,
  `zip` varchar(10) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `state` text NOT NULL,
  `adress` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `date`
--

CREATE TABLE `date` (
  `pac_type` varchar(20) NOT NULL,
  `from` datetime NOT NULL,
  `to` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `date`
--

INSERT INTO `date` (`pac_type`, `from`, `to`) VALUES
('International Trips', '2018-10-16 00:00:00', '2018-10-31 00:00:00'),
('Vacations', '2018-12-17 00:00:00', '2018-10-24 00:00:00'),
('International Trips', '2018-10-16 00:00:00', '2018-10-31 00:00:00'),
('Vacations', '2018-12-17 00:00:00', '2018-10-24 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `pac_type` varchar(20) NOT NULL,
  `pac_ID` int(11) NOT NULL,
  `adult` int(2) NOT NULL,
  `children` int(2) NOT NULL,
  `c_ID` int(10) NOT NULL,
  `where.` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `order_name` varchar(255) NOT NULL,
  `order_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders_items`
--

CREATE TABLE `orders_items` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pac_ID` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_description` text,
  `product_price` decimal(10,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pac_ID`, `product_name`, `product_description`, `product_price`) VALUES
(1, 'Drop Off', 'A day trip with no return trip', '1500.00'),
(2, '1 day trip', 'A day trip anywhere in Southern Africa countries with a return trip', '2500.00'),
(3, '2 day trip', 'A two day trip anywhere in Southern Africa countries with a return trip included.', '3500.00'),
(4, '3 day trip ', 'A three day trip anywhere in Southern Africa countries with a return trip included.', '2500.00'),
(5, 'Week\'s Trip', 'A week\'s trip anywhere in Southern Africa countries with a return trip included.', '5000.00');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `c_ID` int(10) NOT NULL,
  `acc_num` int(16) NOT NULL,
  `pay_meth` text NOT NULL,
  `pac_ID` int(11) NOT NULL,
  `cardname` text NOT NULL,
  `ccv` int(3) NOT NULL,
  `expmonth` date NOT NULL,
  `expyear` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`c_ID`, `acc_num`, `pay_meth`, `pac_ID`, `cardname`, `ccv`, `expmonth`, `expyear`) VALUES
(5, 863159436, 'Master Card', 3, '', 0, '0000-00-00', 0000),
(7, 163549876, 'Pay Pal', 6, '', 0, '0000-00-00', 0000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`admin_ID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`c_ID`);

--
-- Indexes for table `date`
--
ALTER TABLE `date`
  ADD KEY `pac_type` (`pac_type`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`pac_type`),
  ADD KEY `pac_ID` (`pac_ID`),
  ADD KEY `where.` (`where.`),
  ADD KEY `destination_ibfk_1` (`c_ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `name` (`order_name`),
  ADD KEY `email` (`order_email`),
  ADD KEY `order_date` (`order_date`);

--
-- Indexes for table `orders_items`
--
ALTER TABLE `orders_items`
  ADD PRIMARY KEY (`order_id`,`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pac_ID`),
  ADD KEY `name` (`product_name`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD KEY `c_ID` (`c_ID`),
  ADD KEY `pac_ID` (`pac_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `admin_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `c_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pac_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `date`
--
ALTER TABLE `date`
  ADD CONSTRAINT `date_ibfk_1` FOREIGN KEY (`pac_type`) REFERENCES `destination` (`pac_type`);

--
-- Constraints for table `destination`
--
ALTER TABLE `destination`
  ADD CONSTRAINT `destination_ibfk_1` FOREIGN KEY (`c_ID`) REFERENCES `customers` (`c_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `destination_ibfk_2` FOREIGN KEY (`pac_ID`) REFERENCES `products` (`pac_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `destination_ibfk_3` FOREIGN KEY (`where.`) REFERENCES `cart` (`where.`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`pac_ID`) REFERENCES `destination` (`pac_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sales_ibfk_2` FOREIGN KEY (`c_ID`) REFERENCES `customers` (`c_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
