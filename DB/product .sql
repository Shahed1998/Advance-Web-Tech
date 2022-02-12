-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2022 at 06:12 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE `customer_info` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_info`
--

INSERT INTO `customer_info` (`customer_id`, `customer_name`, `customer_contact`) VALUES
(1, 'dummy1', 123),
(2, 'dummy2', 456),
(3, 'dummy3', 789);

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_orders`
--

INSERT INTO `customer_orders` (`order_id`, `customer_id`, `product_id`) VALUES
(1, 1, 5),
(2, 1, 6),
(3, 1, 5),
(4, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `product_info`
--

CREATE TABLE `product_info` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_info`
--

INSERT INTO `product_info` (`product_id`, `product_name`, `product_price`, `product_quantity`, `product_description`) VALUES
(5, 'Rice', 150, 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sollicitudin interdum sagittis. Mauris scelerisque velit ac mauris eleifend vestibulum. Aenean elementum lacus risus, fringilla aliquet quam dictum sit amet. Praesent egestas velit semper, malesuada tortor ut, porttitor massa. Ut dictum et sem in aliquam. Sed elementum sodales ipsum, vitae faucibus magna hendrerit a. Curabitur facilisis blandit sapien quis sagittis. Donec vel quam quis nunc luctus pulvinar at eu nisi. Integer vehicula cursus velit in imperdiet. Etiam viverra aliquam lacus in mollis. Phasellus fermentum ligula arcu, ut consequat urna ornare at. Proin hendrerit finibus lectus, id vehicula nibh malesuada eu.'),
(6, 'lentils', 50, 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sollicitudin interdum sagittis. Mauris scelerisque velit ac mauris eleifend vestibulum. Aenean elementum lacus risus, fringilla aliquet quam dictum sit amet. Praesent egestas velit semper, malesuada tortor ut, porttitor massa. Ut dictum et sem in aliquam. Sed elementum sodales ipsum, vitae faucibus magna hendrerit a. Curabitur facilisis blandit sapien quis sagittis. Donec vel quam quis nunc luctus pulvinar at eu nisi. Integer vehicula cursus velit in imperdiet. Etiam viverra aliquam lacus in mollis. Phasellus fermentum ligula arcu, ut consequat urna ornare at. Proin hendrerit finibus lectus, id vehicula nibh malesuada eu.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_info`
--
ALTER TABLE `customer_info`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product_info`
--
ALTER TABLE `product_info`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_info`
--
ALTER TABLE `customer_info`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_info`
--
ALTER TABLE `product_info`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
