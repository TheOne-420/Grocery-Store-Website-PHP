-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Oct 09, 2024 at 08:22 AM
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
CREATE DATABASE IF NOT EXISTS `store` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `store`;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductID` int(3) NOT NULL,
  `ProductName` varchar(255) DEFAULT NULL,
  `Price` decimal(8,0) DEFAULT NULL,
  `Quantity` int(10) DEFAULT NULL,
  `Image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `ProductName`, `Price`, `Quantity`, `Image`) VALUES
(1, 'Aloo', 200, 12, 'bread.png'),
(4, 'Towel', 150, 200, NULL),
(5, 'Wine - Red Oakridge Merlot', 915, 69, NULL),
(6, 'Lamb - Whole, Fresh', 1655, 79, NULL),
(7, 'Fish - Halibut, Cold Smoked', 825, 53, NULL),
(8, 'Crab Brie In Phyllo', 258, 37, NULL),
(9, 'Arizona - Green Tea', 1834, 2, NULL),
(10, 'Bread Roll Foccacia', 1516, 13, NULL),
(11, 'Salt - Celery', 1672, 14, NULL),
(12, 'Wasabi Paste', 693, 94, NULL),
(13, 'Lemon Balm - Fresh', 834, 83, NULL),
(14, 'Turkey - Breast, Smoked', 687, 54, NULL),
(15, 'Garam Masala Powder', 1462, 70, NULL),
(16, 'Lettuce - Romaine, Heart', 1601, 64, NULL),
(17, 'Pepper - Scotch Bonnet', 603, 68, NULL),
(18, 'Rice Pilaf, Dry,package', 1314, 94, NULL),
(19, 'Buttons', 1809, 42, NULL),
(20, 'Garbag Bags - Black', 843, 42, NULL),
(21, 'Towel Multifold', 965, 78, NULL),
(22, 'Carrots - Jumbo', 433, 71, NULL),
(23, 'Cake Circle, Paprus', 1353, 73, NULL),
(24, 'Cheese - Brie, Triple Creme', 63, 8, NULL),
(26, 'Puree - Pear', 1211, 52, NULL),
(27, 'Beans - Kidney White', 1025, 19, NULL),
(28, 'Eggplant Italian', 1185, 89, NULL),
(29, 'Vinegar - Champagne', 1925, 42, NULL),
(30, 'Vegetable - Base', 972, 50, NULL),
(31, 'Gin - Gilbeys London, Dry', 685, 49, NULL),
(32, 'Placemat - Scallop, White', 723, 4, NULL),
(33, 'Bread - Italian Sesame Poly', 1474, 9, NULL),
(34, 'Ham - Procutinni', 945, 6, NULL),
(35, 'Juice - Grapefruit, 341 Ml', 1961, 28, NULL),
(36, 'Ginger - Fresh', 755, 21, NULL),
(37, 'Langers - Mango Nectar', 1684, 14, NULL),
(38, 'Cherries - Fresh', 470, 10, NULL),
(39, 'Eggplant Italian', 711, 28, NULL),
(40, 'Appetiser - Bought', 772, 39, NULL),
(41, 'Sorrel - Fresh', 637, 70, NULL),
(42, 'Cookie Dough - Oatmeal Rasin', 1526, 64, NULL),
(43, 'Lettuce - Iceberg', 1409, 59, NULL),
(44, 'Chocolate Liqueur - Godet White', 132, 21, NULL),
(45, 'Cod - Black Whole Fillet', 478, 7, NULL),
(46, 'Wine - Rosso Del Veronese Igt', 711, 72, NULL),
(47, 'Soup - Campbells Tomato Ravioli', 163, 37, NULL),
(48, 'Pasta - Tortellini, Fresh', 199, 38, NULL),
(49, 'Wine - Pinot Grigio Collavini', 1543, 1, NULL),
(50, 'Lid Coffeecup 12oz D9542b', 507, 62, NULL);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
