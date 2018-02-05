-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2017 at 03:27 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mytuts`
--

-- --------------------------------------------------------

--
-- Table structure for table `names`
--

CREATE TABLE `names` (
  `id` int(11) NOT NULL,
  `firstname` varchar(35) NOT NULL,
  `lastname` varchar(35) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `names`
--

INSERT INTO `names` (`id`, `firstname`, `lastname`, `date_added`) VALUES
(1, 'Thomas', 'Hanzon', '2017-02-19 06:15:16'),
(2, 'Mary', 'Corner', '2017-02-19 07:20:19'),
(3, 'Icognito', 'Tabs', '2017-02-19 02:32:19'),
(4, 'Glenn', 'Frey', '2017-03-13 06:17:34'),
(6, 'Johnny', 'Lennon', '2017-03-30 09:25:26'),
(7, 'George', 'Harrison', '2017-03-13 03:10:39'),
(8, 'Ringo', 'Starr', '2017-03-13 03:11:02'),
(9, 'Paul', 'McCartney', '2017-03-13 03:11:20'),
(10, 'Mick', 'Jagger', '2017-03-13 03:11:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `names`
--
ALTER TABLE `names`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `names`
--
ALTER TABLE `names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
