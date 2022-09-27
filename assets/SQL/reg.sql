-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: sql6.freemysqlhosting.net
-- Generation Time: Sep 27, 2022 at 04:42 AM
-- Server version: 5.5.62-0ubuntu0.14.04.1
-- PHP Version: 7.0.33-0ubuntu0.16.04.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sql6521679`
--

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(11) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tel` int(11) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `package` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `fname`, `lname`, `age`, `email`, `tel`, `gender`, `package`) VALUES
(1, 'Deep', 'Rakesh', 22, 'deep@gmail.com', 2147483647, 'male', 'diamond'),
(2, 'Scooby', 'Doo', 25, 'scooby@gmail.com', 2147483647, 'male', 'premium'),
(3, 'Oswald', 'Weenie', 28, 'oswald@gmail.com', 2147483647, 'male', 'diamond'),
(4, 'Thomas', 'Train', 30, 'thomas@gmail.com', 1652340879, 'male', 'basic'),
(5, 'Bugs', 'Bunny', 28, 'bugs@gmail.com', 2147483647, 'male', 'premium'),
(6, 'Jerry', 'Mouse', 30, 'jerry@gmail.com', 2147483647, 'male', 'diamond'),
(7, 'Srivatsa', 'N', 25, 'sri@gmail.com', 2147483647, 'male', 'diamond');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
