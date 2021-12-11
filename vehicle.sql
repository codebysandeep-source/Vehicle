-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2021 at 01:37 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vehicle`
--

-- --------------------------------------------------------

--
-- Table structure for table `bike`
--

CREATE TABLE `bike` (
  `id` int(11) NOT NULL,
  `front_img` varchar(255) NOT NULL,
  `back_img` varchar(255) NOT NULL,
  `left_img` varchar(255) NOT NULL,
  `right_img` varchar(255) NOT NULL,
  `inner_front_img` varchar(255) NOT NULL,
  `inner_back_img` varchar(255) NOT NULL,
  `vehicle_name` varchar(100) NOT NULL,
  `original_price` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `year_of_manufacture` varchar(100) NOT NULL,
  `fuel` varchar(100) NOT NULL,
  `traveled_distance` varchar(100) NOT NULL,
  `owner` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `posting_date` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category_location` varchar(100) NOT NULL DEFAULT 'bike'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bike`
--

INSERT INTO `bike` (`id`, `front_img`, `back_img`, `left_img`, `right_img`, `inner_front_img`, `inner_back_img`, `vehicle_name`, `original_price`, `price`, `model`, `year_of_manufacture`, `fuel`, `traveled_distance`, `owner`, `state`, `city`, `posting_date`, `description`, `category_location`) VALUES
(1, 'bikes/1.jpg', '', '', '', '', '', 'Bike one', '150', '120', 'M-21', '2018', 'Petrol', '1200 km/hr', '1st', '', '', '', '', 'bike'),
(6, 'bikes/2.jpg', '', '', '', '', '', 'Bike two', '200', '150', 'M-212', '2017', 'Petrol', '1200 km/hr', '1st', '', '', '', '', 'bike');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `id` int(11) NOT NULL,
  `front_img` varchar(255) NOT NULL,
  `back_img` varchar(255) NOT NULL,
  `left_img` varchar(255) NOT NULL,
  `right_img` varchar(255) NOT NULL,
  `inner_front_img` varchar(255) NOT NULL,
  `inner_back_img` varchar(255) NOT NULL,
  `vehicle_name` varchar(100) NOT NULL,
  `original_price` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `year_of_manufacture` varchar(100) NOT NULL,
  `fuel` varchar(100) NOT NULL,
  `traveled_distance` varchar(100) NOT NULL,
  `owner` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `posting_date` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category_location` varchar(100) NOT NULL DEFAULT 'car'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `front_img`, `back_img`, `left_img`, `right_img`, `inner_front_img`, `inner_back_img`, `vehicle_name`, `original_price`, `price`, `model`, `year_of_manufacture`, `fuel`, `traveled_distance`, `owner`, `state`, `city`, `posting_date`, `description`, `category_location`) VALUES
(1, '/cars/1.png', '/cars/2.png', '/cars/3.png', '/cars/4.png', '', '', 'Scorpio', '', '120', 'M-21', '2018', 'Petrol', '16400 ', '1st', 'Sikkim', 'Gangtok', '', 'One of the biggest advantages of having your own car is planning a trip or sometimes even going on an unplanned trip or long drive.Having car at such times is more practical. You can also explore the roads off-the-grid more in your own car.', 'car'),
(2, '/cars/2.png', '/cars/1.png', '/cars/4.png', '/cars/3.png', '', '', 'Bolero', '', '150', 'M-21', '2015', 'Petrol', '123000', '1st', 'Bihar', 'Patna', '', 'One of the biggest advantages of having your own car is planning a trip or sometimes even going on an unplanned trip or long drive.Having car at such times is more practical. You can also explore the roads off-the-grid more in your own car.', 'car'),
(3, '/cars/3.png', '/cars/2.png', '/cars/1.png', '/cars/4.png', '', '', 'Maruti Suziki', '', '190', 'M-21', '2017', 'Petrol', '12076', '1st', 'UP', 'Delhi', '', 'One of the biggest advantages of having your own car is planning a trip or sometimes even going on an unplanned trip or long drive.Having car at such times is more practical. You can also explore the roads off-the-grid more in your own car.', 'car'),
(4, '/cars/4.png', '/cars/3.png', '/cars/2.png', '/cars/1.png', '', '', 'Tesla', '', '214', 'M-21', '2012', 'Petrol', '435760', '1st', 'West Bengal', 'Siliguri', '', 'One of the biggest advantages of having your own car is planning a trip or sometimes even going on an unplanned trip or long drive.Having car at such times is more practical. You can also explore the roads off-the-grid more in your own car.', 'car');

-- --------------------------------------------------------

--
-- Table structure for table `make_offer`
--

CREATE TABLE `make_offer` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `vehicle_name` varchar(50) NOT NULL,
  `vehicle_img` varchar(255) NOT NULL,
  `vehicle_model` varchar(30) NOT NULL,
  `vehicle_price` varchar(30) NOT NULL,
  `make_offer_price` varchar(30) NOT NULL,
  `vehicle_location` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `phone`, `password`) VALUES
(1, 'san', 'san@gmail.com', '2323223666', '$2y$10$vs01rOjWnCUJDTs/2FVvze.Rbc/o32Gx82VeC5/ccxGTN/eoKFGk2'),
(2, 'san', 'san1@gmail.com', '7557846324', '$2y$10$W6uHajOFyYBNtU8eCHg4gemN.kMjgu7.FjE3OPeu0hxRrIwO5upaC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bike`
--
ALTER TABLE `bike`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `make_offer`
--
ALTER TABLE `make_offer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bike`
--
ALTER TABLE `bike`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `make_offer`
--
ALTER TABLE `make_offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
