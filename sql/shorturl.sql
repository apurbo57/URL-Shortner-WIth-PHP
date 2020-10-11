-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2020 at 08:30 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shorturl`
--

-- --------------------------------------------------------

--
-- Table structure for table `shortner`
--

CREATE TABLE `shortner` (
  `id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `short_link` varchar(255) NOT NULL,
  `hit_count` int(55) NOT NULL DEFAULT 0,
  `status` int(55) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shortner`
--

INSERT INTO `shortner` (`id`, `link`, `short_link`, `hit_count`, `status`) VALUES
(1, 'https://www.facebook.com/', 'oirajaw', 3, 1),
(2, 'https://www.youtube.com/watch?v=_Wg1UwuyfZ8', 'video', 5, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shortner`
--
ALTER TABLE `shortner`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shortner`
--
ALTER TABLE `shortner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
