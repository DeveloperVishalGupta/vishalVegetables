-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2022 at 02:31 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vishalvegetables`
--

-- --------------------------------------------------------

--
-- Table structure for table `cartitems`
--

CREATE TABLE `cartitems` (
  `ProductImage` varchar(255) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `ProductWeight` varchar(255) NOT NULL,
  `ProductPrice` int(255) NOT NULL,
  `ProductQuantity` int(255) NOT NULL,
  `ProductId` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fruitsproducts`
--

CREATE TABLE `fruitsproducts` (
  `productId` int(255) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productImage` varchar(255) NOT NULL,
  `productCategory` varchar(255) NOT NULL,
  `productWeight` varchar(255) NOT NULL,
  `productQuantity` int(255) NOT NULL,
  `productPrice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fruitsproducts`
--

INSERT INTO `fruitsproducts` (`productId`, `productName`, `productImage`, `productCategory`, `productWeight`, `productQuantity`, `productPrice`) VALUES
(1, 'Banana', 'Banana.jpg', 'Fruits', '500gm', 6, '35'),
(2, 'Apple', 'apple.jpg', 'Fruits', '1kg', 10, '140'),
(3, 'Pineapple', 'pineapple.jpg', 'Fruits', '1N', 10, '80');

-- --------------------------------------------------------

--
-- Table structure for table `herbsproducts`
--

CREATE TABLE `herbsproducts` (
  `productName` varchar(255) NOT NULL,
  `productImage` varchar(255) NOT NULL,
  `productCategery` varchar(255) NOT NULL,
  `productWeight` varchar(255) NOT NULL,
  `productQuantity` int(255) NOT NULL,
  `productPrice` varchar(255) NOT NULL,
  `productId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `herbsproducts`
--

INSERT INTO `herbsproducts` (`productName`, `productImage`, `productCategery`, `productWeight`, `productQuantity`, `productPrice`, `productId`) VALUES
('Lemon', 'lemon.jpg', 'Herbs', '3N', 20, '20', 1),
('Ginger', 'Ginger.jpg', 'Herbs', '250gm', 10, '25', 2);

-- --------------------------------------------------------

--
-- Table structure for table `vegetablesproducts`
--

CREATE TABLE `vegetablesproducts` (
  `productId` int(255) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productImage` varchar(255) NOT NULL,
  `productCategory` varchar(255) NOT NULL,
  `productWeight` varchar(255) NOT NULL,
  `productQuantity` int(255) NOT NULL,
  `productPrice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vegetablesproducts`
--

INSERT INTO `vegetablesproducts` (`productId`, `productName`, `productImage`, `productCategory`, `productWeight`, `productQuantity`, `productPrice`) VALUES
(47, 'Bitter Gourd', 'BitterGourd.jpg', 'Vegetables', '250gm', 10, '20'),
(48, 'Broccoli', 'broccoli.jpg', 'Vegetables', '250gm', 10, '35'),
(49, 'Couliflower', 'Couliflower.jpg', 'Vegetables', '250gm', 10, '25'),
(50, 'Cucumber', 'Cucumber.jpg', 'Vegetables', '250gm', 10, '20'),
(51, 'Onion', 'onions.jpg', 'Vegetables', '1kg', 10, '30'),
(52, 'Tomato', 'tomatoes.jpg', 'Vegetables', '1kg', 10, '40'),
(53, 'Carrot', 'carrot.jpg', 'Vegetables', '250gm', 10, '20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cartitems`
--
ALTER TABLE `cartitems`
  ADD PRIMARY KEY (`ProductId`);

--
-- Indexes for table `fruitsproducts`
--
ALTER TABLE `fruitsproducts`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `herbsproducts`
--
ALTER TABLE `herbsproducts`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `vegetablesproducts`
--
ALTER TABLE `vegetablesproducts`
  ADD PRIMARY KEY (`productId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cartitems`
--
ALTER TABLE `cartitems`
  MODIFY `ProductId` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fruitsproducts`
--
ALTER TABLE `fruitsproducts`
  MODIFY `productId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `herbsproducts`
--
ALTER TABLE `herbsproducts`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vegetablesproducts`
--
ALTER TABLE `vegetablesproducts`
  MODIFY `productId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
