-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: sql1.njit.edu
-- Generation Time: Dec 05, 2024 at 11:10 PM
-- Server version: 8.0.17
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sk3526`
--

-- --------------------------------------------------------

--
-- Table structure for table `BookCategories`
--

CREATE TABLE IF NOT EXISTS `BookCategories` (
  `BookCategoryID` int(11) NOT NULL,
  `BookCategoryCode` varchar(255) NOT NULL,
  `BookCategoryName` varchar(255) NOT NULL,
  `DateCreated` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `BookShelfNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `BookCategories`
--

INSERT INTO `BookCategories` (`BookCategoryID`, `BookCategoryCode`, `BookCategoryName`, `DateCreated`, `BookShelfNumber`) VALUES
(100, 'FIC', 'NonFiction', '2024-10-16 04:24:31', 101),
(200, 'SLF', 'Self-Help', '2024-10-15 14:38:41', 202),
(300, 'COOK', 'Cookbook', '2024-10-15 14:38:43', 303),
(400, 'SCIFI', 'Science Fiction Series', '2024-10-15 14:38:44', 404),
(500, 'BIO', 'Biography', '2024-10-15 14:38:45', 505);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `BookCategories`
--
ALTER TABLE `BookCategories`
 ADD PRIMARY KEY (`BookCategoryID`), ADD UNIQUE KEY `BookCategoryCode` (`BookCategoryCode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
