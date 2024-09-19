-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2021 at 07:57 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labor`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `age` varchar(5) NOT NULL,
  `village` varchar(30) NOT NULL,
  `role` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `token` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `age`, `village`, `role`, `username`, `password`, `token`) VALUES
(1, 'Vashishth Patel', 'testadmin@gmail.com', '+919999999999', '19', 'chulla', 'manager', '11111', '11111', 'true'),
(2, 'Ajay Chaudhary', 'vasu2@vsdsg', '9999999999', '20', 'vetla', 'manager', '22222', '22222', 'true'),
(3, 'Raj Patil', 'vasu@tyssy', '9874545456', '25', 'bhajpura', 'manager', '33333', '33333', 'true'),
(4, 'Ramesh', 'ram@haghag', '2346578987', '56', 'chulla', 'worker', '11111', '11111', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `id` int(11) NOT NULL,
  `wname` varchar(30) NOT NULL,
  `wprice` varchar(10) NOT NULL,
  `wnumber` varchar(15) NOT NULL,
  `wtime` varchar(30) NOT NULL,
  `wdescription` varchar(100) NOT NULL,
  `linkuser` varchar(20) NOT NULL,
  `created_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`id`, `wname`, `wprice`, `wnumber`, `wtime`, `wdescription`, `linkuser`, `created_time`) VALUES
(1, 'Cutting Wheat', '250', '9327456054', '9AM to 2PM', 'This is test work', 'Vashishth Patel', '2021-10-30 14:15:45'),
(2, 'Cutting Rice', '300', '956307654', '10AM to 4PM', 'this is test work', 'Ajay Chaudhary', '2021-10-30 14:17:04'),
(3, 'Planting Chili', '500', '6752358987', '12PM to 5PM', 'this is test work', 'Ajay Chaudhary', '2021-10-30 14:18:35'),
(4, 'Cultivating', '700', '98984566546', '8AM to 12PM', 'this is test work', 'Raj Patil', '2021-10-30 14:20:09'),
(5, 'Planting Peanut', '1000', '9325656456', '2PM to 6PM', 'this is test', 'Raj Patil', '2021-10-30 14:21:14'),
(6, 'Cutting Grass', '100', '9876567865', '7AM to 11AM', 'this is test work', 'Vashishth Patel', '2021-10-30 14:22:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
