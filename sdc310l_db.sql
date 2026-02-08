-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2026 at 11:15 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdc310l_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductId` int(11) NOT NULL,
  `ProductName` varchar(250) NOT NULL,
  `ProductDescription` varchar(500) NOT NULL,
  `ProductCost` decimal(10,0) NOT NULL,
  `InCart` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductId`, `ProductName`, `ProductDescription`, `ProductCost`, `InCart`) VALUES
(1, 'Gaming Controller', 'SCUF - ENVISION PRO v2 Wireless Gaming Controller for PC with Anti-Drift Thumbsticks - Breach', 180, NULL),
(2, 'Laptop', 'Lenovo - IdeaPad Flex 3i Chromebook Laptop - 12.2\" 2K Touchscreen - Intel N100 2023 - 4GB Memory - 64GB eMMC - Abyss Blue', 200, NULL),
(3, 'HDMI Cable', 'Insignia™ - 6ft 4K Ultra HD HDMI Cable - Black', 25, NULL),
(4, 'Computer Power Supply', 'CORSAIR - RMe Series RM1000e 80 PLUS Gold Fully Modular Low-Noise ATX 3.1 and PCIE 5.1 Power Supply - Black', 150, NULL),
(5, 'Headset', 'HyperX - Cloud III Wired Gaming Headset for PC, PS5, PS4, Xbox Series X|S, Xbox One, Nintendo Switch, and Mobile - Black/Red', 62, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
