-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2023 at 06:37 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking`
--

-- --------------------------------------------------------

--
-- Table structure for table `balance`
--

CREATE TABLE `balance` (
  `username` varchar(20) NOT NULL,
  `balance` int(11) DEFAULT NULL,
  `online_limit` int(11) DEFAULT NULL,
  `card_limit` int(11) DEFAULT NULL,
  `upi_limit` int(11) DEFAULT NULL,
  `online_no` int(11) DEFAULT NULL,
  `card_no` int(11) DEFAULT NULL,
  `upi_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `balance`
--

INSERT INTO `balance` (`username`, `balance`, `online_limit`, `card_limit`, `upi_limit`, `online_no`, `card_no`, `upi_no`) VALUES
('a', 1200, 0, 0, 0, 0, 0, 0),
('ab', 1000, 0, 0, 0, 0, 0, 0),
('kjnvkdg', 800, -200, 0, 0, -2, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `title` varchar(100) DEFAULT NULL,
  `firstname` varchar(200) DEFAULT NULL,
  `middlename` varchar(200) DEFAULT NULL,
  `lastname` varchar(200) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `DOB` varchar(200) DEFAULT NULL,
  `Types` varchar(200) DEFAULT NULL,
  `cad1` varchar(100) DEFAULT NULL,
  `cad2` varchar(100) DEFAULT NULL,
  `town1` varchar(100) DEFAULT NULL,
  `country1` varchar(100) DEFAULT NULL,
  `pcode1` varchar(100) DEFAULT NULL,
  `pad1` varchar(100) DEFAULT NULL,
  `pad2` varchar(100) DEFAULT NULL,
  `town2` varchar(100) DEFAULT NULL,
  `country2` varchar(100) DEFAULT NULL,
  `pcode2` varchar(100) DEFAULT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`title`, `firstname`, `middlename`, `lastname`, `phone`, `email`, `DOB`, `Types`, `cad1`, `cad2`, `town1`, `country1`, `pcode1`, `pad1`, `pad2`, `town2`, `country2`, `pcode2`, `username`, `password`) VALUES
('$title', '$firstname', '$middlename', '$lastname', 0, '$email', '$DOB', '$account', '$cad1', '$cad2', '$town1', '$country1', '$pcode1', '$pad1', '.$pad2', '$town2', '$country2', '$pcode2', '$usernames', '$passwords'),
('Mr', 'Lakshmi', '', 'Nagar', 2147483647, 'athish1423@gmail.com', '2022-11-08', 'basic-current', 'Kalaignar Street', '', 'Thiruvallur', 'dvldkv', '602024', 'Kalaignar Street', '.', 'Thiruvallur', 'snvv', '602024', 'a', 'a'),
('Mr', 'Lakshmi', '', 'Nagar', 2147483647, 'athish1423@gmail.com', '2022-11-08', 'premium-current', 'Kalaignar Street', '', 'Thiruvallur', 'dvldkv', '602024', 'Kalaignar Street', '.', 'Thiruvallur', 'snvv', '602024', 'ab', 'ab'),
('Mr', 'Lakshmi', '', 'Nagar', 2147483647, 'athish1423@gmail.com', '2022-11-12', 'basic-current', 'Kalaignar Street', '', 'Thiruvallur', 'india', '602024', 'Kalaignar Street', '.', 'Thiruvallur', 'india', '602024', 'kjnvkdg', '979759');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `balance`
--
ALTER TABLE `balance`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
