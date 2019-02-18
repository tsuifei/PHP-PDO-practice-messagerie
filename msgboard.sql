-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 18, 2019 at 01:52 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `msgboard`
--

CREATE TABLE `msgboard` (
  `ID` int(10) NOT NULL,
  `parent_id` int(10) NOT NULL,
  `nickname` varchar(32) NOT NULL,
  `comment` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `msgboard`
--

INSERT INTO `msgboard` (`ID`, `parent_id`, `nickname`, `comment`, `created_at`) VALUES
(48, 0, 'Tracy', 'Hello', '2019-02-18 12:36:43'),
(49, 0, 'Philippe', 'Good Job', '2019-02-18 12:38:23'),
(50, 49, 'Ayda', 'Yes', '2019-02-18 12:42:00'),
(51, 48, 'Philippe', 'good luck ', '2019-02-18 12:46:22'),
(52, 48, 'test', 'test', '2019-02-18 12:52:10'),
(53, 49, 'test', 'test', '2019-02-18 12:53:34'),
(54, 0, 'Ma mere', 'elle m\'aime toujour et que elle me comprnds toujours que elle me comprnds tque elle me comprnds.', '2019-02-18 12:57:10'),
(55, 54, 'Ma mere ', 'elle m\'a dit il faut etre gentile !', '2019-02-18 13:04:48'),
(56, 54, 'Ma mere ', 'elle est gentie avec moi', '2019-02-18 13:05:05'),
(57, 49, 'yes', 'say yes', '2019-02-18 13:25:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `msgboard`
--
ALTER TABLE `msgboard`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `msgboard`
--
ALTER TABLE `msgboard`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
