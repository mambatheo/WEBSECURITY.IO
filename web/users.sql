-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2021 at 11:31 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web security`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `lname`, `email`, `uname`, `pwd`) VALUES
(1, 'dcvdd', 'dddcvds', 'ss@vdfvdf', 'sdfds', '9086c29b795021bcddc4f2d67c2ac569354139ee'),
(2, 'Theogene', 'MURAGIJIMANA', 'tmuragijimana31@gmail.com', 'theo', '77f476ee6153a400a4d698c6995c666307875b61'),
(4, 'c', 'c', 'c@c', 'c', 'de5131bfae926b98c74d9521353782aeeac267fe'),
(5, 'ghh', 'gfg', 'df@gh', 'vipi', '6373b67dd2116012007c2e855110e4727a2f6174'),
(6, 'froduard', 'bangamwabo', 'mutheogene61@gmail.com', 'vb', '7707a2d6a9e403f1e7e9f1ffd9664efed17f6cee'),
(7, 'ggbg', 'gbgfb', 'gbb@fff', 'gbg', '438bc5b820b7e5966521d6d8c80a764aa04adedc'),
(8, 'ggbg', 'gbgfb', 'gbb@fff', 'gbg', '7707a2d6a9e403f1e7e9f1ffd9664efed17f6cee'),
(9, 'ggbg', 'gbgfb', 'gbb@fff', 'gbg', '7707a2d6a9e403f1e7e9f1ffd9664efed17f6cee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
