-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Oct 14, 2024 at 09:40 AM
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
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `ProductID` int(3) NOT NULL,
  `Quantity` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`ProductID`, `Quantity`) VALUES
(5, 6),
(44, 2);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductID` int(3) NOT NULL,
  `ProductName` varchar(255) DEFAULT NULL,
  `Price` decimal(8,0) DEFAULT NULL,
  `Quantity` int(10) DEFAULT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `ProductName`, `Price`, `Quantity`, `Image`) VALUES
(1, 'Aloo', 200, 12, 'Aloo.jpg'),
(5, 'Wine', 2000, 231, 'Wine.jpg'),
(6, 'Lamb', 400, 1500, 'Lamb.jpg'),
(7, 'Fish', 500, 200, 'Fish.jpg'),
(8, 'Crab ', 258, 37, 'Crab.jpg\r\n'),
(9, 'Arizona - Green Tea', 1834, 2, 'Arizona.jpg'),
(10, 'Bread', 1516, 13, 'Bread.jpg\r\n'),
(12, 'Wasabi Paste', 693, 94, 'Wasabi.jpg'),
(13, 'Lemon Balm - Fresh', 834, 83, 'Lemon.jpg'),
(14, 'Rice', 687, 54, 'Rice.jpg'),
(15, 'Garam masala', 1462, 70, 'Garam.jpg'),
(16, 'Lettuce', 1601, 64, 'Lettuce.jpg'),
(17, 'Pepper - Scotch Bonnet', 603, 68, 'Pepper.jpg'),
(18, 'Rice Pilaf, Dry,package', 1314, 94, 'Rice.jpg'),
(19, 'Buttons', 1809, 42, 'Buttons.jpg'),
(20, 'Garbage', 843, 42, 'Garbage.jpg'),
(21, 'Towel', 965, 78, 'Towel.jpg'),
(22, 'Carrots', 433, 71, 'Carrots.jpg\r\n'),
(23, 'Cake', 1353, 73, 'Cake.jpg'),
(24, 'Cheese', 63, 8, 'Cheese.jpg'),
(26, 'Puree', 1211, 52, 'Puree.jpg\r\n'),
(27, 'Beans', 1025, 19, 'Beans.jpg'),
(28, 'Eggplant', 1185, 89, 'Eggplant.jpg'),
(29, 'Vinegar', 1925, 42, 'Vinegar.jpg'),
(30, 'Vegetable', 972, 50, 'Vegetable.jpg\r\n'),
(31, 'Gin', 685, 49, 'Gin.jpg\r\n'),
(32, 'Placemat', 723, 4, 'Placemat.jpg'),
(33, 'Bread', 1474, 9, 'Bread.jpg'),
(34, 'Ham', 945, 6, 'Ham.jpg'),
(35, 'Juice', 1961, 28, 'Juice.jpg'),
(36, 'Ginger', 755, 21, 'Ginger.jpg'),
(37, 'Langers', 1684, 14, 'Langers.jpg'),
(38, 'Cherries', 470, 10, 'Cherries.jpg'),
(39, 'Eggplant', 711, 28, 'Eggplant.jpg'),
(40, 'Appetiser', 772, 39, 'Appetiser.jpg'),
(41, 'Sorrel', 637, 70, 'Sorrel.jpg'),
(42, 'Cookie', 1526, 64, 'Cookie.jpg'),
(43, 'Lettuce', 1409, 59, 'Lettuce.jpg'),
(44, 'Chocolate', 132, 21, 'Chocolate.jpg'),
(45, 'Cod ', 478, 7, 'Cod.jpg'),
(47, 'Soup', 163, 37, 'Soup.jpg'),
(48, 'Pasta', 199, 38, 'Pasta.jpg'),
(50, 'Coffeecup ', 507, 62, 'Lid Coffeecup 12oz D9542b.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(3) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `password`) VALUES
(1, 'Tab', '12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD KEY `ProductID` (`ProductID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ProductID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`ProductID`) REFERENCES `products` (`ProductID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
