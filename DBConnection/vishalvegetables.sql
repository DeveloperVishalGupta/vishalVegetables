-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2022 at 03:23 PM
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
(3, 'Pineapple', 'pineapple.jpg', 'Fruits', '1N', 10, '80'),
(4, 'Black Berry', 'blackberry.jpg', 'Fruits', '500gm', 12, '250'),
(5, 'Black Greaps', 'blackGreaps.jpg', 'Fruits', '500gm', 10, '100'),
(6, 'Blueberry', 'blueberry.webp', 'Fruits', '500gm', 10, '200'),
(7, 'Fragon-Fruit', 'dragon-fruit.jpg', 'Fruits', '10N', 10, '100'),
(8, 'Greaps', 'greaps.jpg', 'Fruits', '500gm', 10, '80'),
(9, 'JAckFruits', 'jackfruits.jpg', 'Fruits', '500gm', 10, '15'),
(10, 'Jamun', 'jamun.webp', 'Fruits', '500gm', 10, '50');

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
('Ginger', 'Ginger.jpg', 'Herbs', '250gm', 10, '25', 2),
('chauli', 'chauli.jfif', 'Herbs', '10', 10, '20', 3),
('dhaniya', 'dhaniya.jpg', 'Herbs', '10', 10, '50', 4),
('haramath', 'haramath.webp', 'Herbs', '10', 10, '20', 5),
('lalmath', 'lalmath.jpeg', 'Herbs', '10', 10, '20', 6),
('mayalu', 'mayalu.jpg', 'Herbs', '10', 10, '10', 7),
('methi', 'methi.jfif', 'Herbs', '10', 10, '10', 8),
('muli sag', 'muli sag.jpg', 'Herbs', '10', 10, '10', 9),
('muli', 'muli.jpg', 'Herbs', '10', 10, '10', 10),
('palak', 'palak.jpg', 'Herbs', '10', 10, '10', 11),
('Pudina', 'Pudina.jpg', 'Herbs', '10', 101, '10', 12),
('sarso', 'sarso.jpg', 'Herbs', '10', 10, '10', 13);

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
(53, 'Carrot', 'carrot.jpg', 'Vegetables', '250gm', 10, '20'),
(54, 'Beetroot', 'beetroot.jpg', 'Vegetables', '500gm', 10, '40'),
(55, 'lady finger', 'bhindi.jpg', 'Vegetables', '500gm', 5, '50'),
(56, 'Bitter Gaurd', 'Bitter_gaurd.jpg', 'Vegetables', '500gm', 5, '50'),
(57, 'Colliflower', 'Cauliflower.jpg', 'Vegetables', '500gm', 5, '50'),
(58, 'Controla', 'controla.jfif', 'Vegetables', '500gm', 10, '60'),
(59, 'Sweet Corn', 'makkai.jfif', 'Vegetables', '500gm', 12, '12');

--
-- Indexes for dumped tables
--


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
-- AUTO_INCREMENT for table `fruitsproducts`
--
ALTER TABLE `fruitsproducts`
  MODIFY `productId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `herbsproducts`
--
ALTER TABLE `herbsproducts`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `vegetablesproducts`
--
ALTER TABLE `vegetablesproducts`
  MODIFY `productId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;
