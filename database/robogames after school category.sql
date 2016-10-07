-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2016 at 06:58 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `robogames`
--

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `attempt` varchar(50) DEFAULT 'noAttempt',
  `hardwareMarks` int(11) DEFAULT '0',
  `testMarks` int(11) DEFAULT '0',
  `timingMarks` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`id`, `name`, `attempt`, `hardwareMarks`, `testMarks`, `timingMarks`) VALUES
(14, 'Baymax 3.0', 'attempt-3', 6, 8, 0),
(15, 'City Rider', 'attempt-1', 0, 0, 0),
(16, 'DEV_BOT_001', 'attempt-1', 15, 25, 53),
(17, 'Frozen Razer', 'attempt-3', 2, 0, 0),
(18, 'Hindu Rush', 'attempt-1', 0, 0, 0),
(19, 'Iron Rider', 'attempt-3', 1, 0, 0),
(20, 'Optimus', 'attempt-2', 7, 15, 0),
(21, 'RCBOT', 'attempt-2', 9, 15, 0),
(22, 'Smart Hins 999', 'attempt-2', 2, 0, 0),
(23, 'Stephan', 'attempt-3', 9, 17, 0),
(24, 'Ultrasonic', 'attempt-3', 1, 0, 0),
(25, 'Ultron007', 'attempt-3', 9, 10, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `score`
--
ALTER TABLE `score`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
