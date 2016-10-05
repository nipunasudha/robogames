-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2016 at 10:44 AM
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
-- Table structure for table `team_time`
--

CREATE TABLE `team_time` (
  `id` int(11) NOT NULL,
  `record_time` varchar(50) NOT NULL,
  `team` tinytext NOT NULL,
  `round` int(11) NOT NULL,
  `attempt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team_time`
--

INSERT INTO `team_time` (`id`, `record_time`, `team`, `round`, `attempt`) VALUES
(24, '00:02:03', './teams/Roadrunners.JPG', 2, 3),
(25, '00:09:07', './teams/Pathfinders.JPG', 3, 3),
(26, '00:03:04', './teams/Gladiators.JPG', 1, 1),
(27, '00:02:02', './teams/Pathfinders.JPG', 1, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `team_time`
--
ALTER TABLE `team_time`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `team_time`
--
ALTER TABLE `team_time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
