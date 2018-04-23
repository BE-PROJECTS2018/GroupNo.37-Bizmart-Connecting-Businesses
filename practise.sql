-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2018 at 10:28 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bizmart`
--

-- --------------------------------------------------------

--
-- Table structure for table `practise`
--

CREATE TABLE `practise` (
  `id` int(11) NOT NULL,
  `Question` text NOT NULL,
  `Answer1` text NOT NULL,
  `Answer2` text NOT NULL,
  `Answer3` text NOT NULL,
  `Answer4` text NOT NULL,
  `Correct` text NOT NULL,
  `Subject_id` int(11) NOT NULL,
  `Subject` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `practise`
--

INSERT INTO `practise` (`id`, `Question`, `Answer1`, `Answer2`, `Answer3`, `Answer4`, `Correct`, `Subject_id`, `Subject`) VALUES
(1, 'What is an infinite loop? ', 'A loop that functions infinitely well', 'A loop that runs forever', 'A loop that never starts', 'A loop that will never function', 'A loop that runs forever', 1, 'Java'),
(2, 'What is an infinite loop? ', 'ada', 'dada', 'adad', 'dad', 'ada', 1, 'Java');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `practise`
--
ALTER TABLE `practise`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `practise`
--
ALTER TABLE `practise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
