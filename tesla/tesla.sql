-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2020 at 02:01 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tesla`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `Car_No` int(11) NOT NULL,
  `Model` varchar(100) NOT NULL,
  `Manufacturer` varchar(100) NOT NULL,
  `Features` varchar(300) NOT NULL,
  `Price` decimal(50,0) NOT NULL,
  `Key_word` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`Car_No`, `Model`, `Manufacturer`, `Features`, `Price`, `Key_word`) VALUES
(1, 'MODEL S', 'USA', 'Weight-4,941 lbs , Acceleration-2.3 seconds 0-60 mph, Range-348 miles (EPA est.), Seating-5 Adults, Wheels-19” or 21”\r\n', '90000', 'MODEL S'),
(2, 'MODEL 3', 'USA', 'Battery-Long Range, Acceleration-3.2s 0-60 mph, Range-299 miles, Drive-Dual Motor All-Wheel Drive, Seating-5 Adults, Wheels-20\"', '120000', 'MODEL 3'),
(3, 'MODEL X', 'USA', 'Battery-Long Range, Acceleration-2.6s 0-60 mph, Range-305 miles (EPA est.), Drive-All-Wheel Drive, Seating-Up to 7 Adults, Wheels-20” or 22”', '180000', 'MODEL X'),
(4, 'MODEL Y', 'USA', 'Battery-Long Range, Acceleration-3.5s 0-60 mph, Range-291 miles (EPA est.), Drive-Dual Motor All-Wheel Drive, Seating-Up to 7 Adults, Wheels-2', '60000', 'MODEL Y'),
(5, 'MODEL AZ', 'USA', 'AUTOMATED Y VERSION', '12000', 'MODEL AZ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('Rupam', '6972'),
('Shishir', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`Car_No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `Car_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
