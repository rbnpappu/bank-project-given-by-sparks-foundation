-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2021 at 01:10 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bankdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id` int(11) NOT NULL,
  `Name` varchar(32) NOT NULL,
  `Email` varchar(32) NOT NULL,
  `Currentbalance` int(32) NOT NULL,
  `AccountNumber` varchar(255) NOT NULL,
  `Branch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id`, `Name`, `Email`, `Currentbalance`, `AccountNumber`, `Branch`) VALUES
(1, 'Pappu Thakur', 'thakurpappu905@gmail.com', 4270, '2555 6555 2532 1231', 1),
(2, 'Aman Thakur', 'aman113114@gmail.com', 25365, '2555 6555 2532 1232', 1),
(3, 'Abhijit Thakur', 'abhi9652@gmail.com', 14523, '2555 6555 2532 1233', 1),
(4, 'Nibha Debi', 'nibhadebi@gmail.com', 15623, '2555 6555 2532 1229', 1),
(5, 'Ram Binoy Thakur', 'rambinoy@gmail.com', 100000, '2555 6555 2532 1228', 1),
(6, 'Adom', 'blackadom420@gmail.com', 4556, '2555 6555 2532 1237', 1),
(7, 'Max ', 'max123@gmail.com', 12578, '2555 6555 2532 1238', 1),
(8, 'alex', 'alex456@gmail.com', 5400, '2555 6555 2532 1239', 1),
(9, 'ben', 'ben486@gmail.com', 400, '2555 6555 2532 1240', 1),
(10, 'robrt', 'ironman125@gmail.com', 123356, '2555 6555 2532 1241', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
