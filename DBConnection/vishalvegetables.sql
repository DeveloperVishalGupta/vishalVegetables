-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2022 at 09:50 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

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
-- Table structure for table `vegetablesproduct`
--

CREATE TABLE `vegetablesproduct` (
  `ProductId` int(255) NOT NULL,
  `ProductImage` varchar(255) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `ProductWeight` varchar(255) NOT NULL,
  `ProdcutPrice` varchar(255) NOT NULL,
  `ProductQuantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vegetablesproduct`
--

INSERT INTO `vegetablesproduct` (`ProductId`, `ProductImage`, `ProductName`, `ProductWeight`, `ProdcutPrice`, `ProductQuantity`) VALUES
(1, '', '', '', '', 0),
(2, '', '', '', '', 0),
(3, '', '', '', '', 0),
(4, '', '', '', '', 0),
(5, '222158.png', 'ha', '', '12', 1),
(7, 'download.jfif', 'test image', '', '122', 1),
(8, 'download.jfif', 'test image', '', '122', 1),
(9, 'download.jfif', '  ', '', '  ', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vegetablesproduct`
--
ALTER TABLE `vegetablesproduct`
  ADD PRIMARY KEY (`ProductId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vegetablesproduct`
--
ALTER TABLE `vegetablesproduct`
  MODIFY `ProductId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
