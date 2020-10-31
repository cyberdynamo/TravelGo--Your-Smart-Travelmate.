-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2020 at 07:08 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project001`
--

-- --------------------------------------------------------

--
-- Table structure for table `path`
--

CREATE TABLE `path` (
  `pathid` int(10) NOT NULL,
  `source` varchar(10) DEFAULT NULL,
  `destination` varchar(10) DEFAULT NULL,
  `cost` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `path`
--

INSERT INTO `path` (`pathid`, `source`, `destination`, `cost`) VALUES
(1, 'srinagar', 'ludhiana', 500),
(2, 'ludhiana', 'jaipur', 541),
(3, 'jaipur', ' ahmedabad', 677),
(4, 'ahmedabad', 'mumbai', 524),
(5, 'mumbai', 'bangalore', 983),
(6, 'bangalore', 'kochi', 530),
(7, 'kochi', 'chennai', 691),
(8, 'chennai', 'vizag', 797),
(9, 'vizag', 'durgapur', 926),
(10, 'durgapur', 'guwahati', 969),
(11, 'guwahati', 'gangtok', 540),
(12, 'gangtok', 'lucknow', 1019),
(13, 'lucknow', 'srinagar', 1371),
(14, 'jaipur', 'kochi', 2351),
(15, 'mumbai', 'lucknow', 1376),
(16, 'ahmedabad', 'lucknow', 1250),
(17, 'mumbai', 'vizag', 1347),
(18, 'lucknow', 'vizag', 1387);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `path`
--
ALTER TABLE `path`
  ADD PRIMARY KEY (`pathid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
