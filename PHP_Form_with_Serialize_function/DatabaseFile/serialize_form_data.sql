-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2021 at 08:09 AM
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
-- Database: `serialize_form_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `serialize_table`
--

CREATE TABLE `serialize_table` (
  `ID` int(11) NOT NULL,
  `First Name` varchar(50) NOT NULL,
  `Last Name` text NOT NULL,
  `Address` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `serialize_table`
--

INSERT INTO `serialize_table` (`ID`, `First Name`, `Last Name`, `Address`) VALUES
(1, 'Anshu', 'Sharma', 'a:4:{i:0;s:27:\"village/post Bakksh Lucknow\";i:1;s:7:\"Lucknow\";i:2;s:13:\"Uttar Pradesh\";i:3;s:6:\"226002\";}'),
(2, 'Anshu', 'Sharma', 'a:4:{i:0;s:27:\"village/post Bakksh Lucknow\";i:1;s:7:\"Lucknow\";i:2;s:13:\"Uttar Pradesh\";i:3;s:6:\"226002\";}');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `serialize_table`
--
ALTER TABLE `serialize_table`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `serialize_table`
--
ALTER TABLE `serialize_table`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
