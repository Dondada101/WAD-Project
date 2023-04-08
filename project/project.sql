-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2023 at 10:19 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `hid` int(11) NOT NULL,
  `hname` varchar(150) NOT NULL,
  `illness` varchar(150) NOT NULL,
  `tprice` int(11) NOT NULL,
  `hlvl` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`hid`, `hname`, `illness`, `tprice`, `hlvl`) VALUES
(1, 'Aga Khan Hospital', 'Malaria', 7500, 5),
(2, 'Nairobi Hospital', 'Malaria', 6800, 5),
(3, 'AAR Hospital', 'Malaria', 6000, 5),
(4, 'South B Hospital', 'Malaria', 4000, 4),
(5, 'Pwani Hospital', 'Cold flu', 2000, 4),
(6, 'Pwani Hospital', 'Malaria', 3000, 4),
(7, 'Pwani Hospital', 'Pneumonia', 3500, 4),
(8, 'Pwani Hospital', 'Martenity ', 25000, 4),
(9, 'Aga Khan Hospital', 'Martenity ', 50000, 5),
(10, 'Kenyatta National Hospital', 'Martenity ', 35000, 5),
(11, 'Nairobi Hospital', 'Martenity ', 40000, 5),
(12, 'Nairobi Hospital', 'MRI', 24000, 5),
(13, 'Kenyatta National Hospital', 'MRI', 22000, 5),
(14, 'Aga Khan Hospital', 'MRI', 33000, 5);

-- --------------------------------------------------------

--
-- Table structure for table `insurance`
--

CREATE TABLE `insurance` (
  `id` int(11) NOT NULL,
  `iname` varchar(100) NOT NULL,
  `illness` varchar(100) NOT NULL,
  `hname` varchar(100) NOT NULL,
  `package` varchar(100) NOT NULL,
  `coverage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `insurance`
--

INSERT INTO `insurance` (`id`, `iname`, `illness`, `hname`, `package`, `coverage`) VALUES
(1, 'Britam', 'Malaria', 'Nairobi Hospital', 'Essential-2', 20),
(2, 'Britam', 'Malaria', 'Nairobi Hospital', 'Essential-1', 30),
(3, 'Britam', 'Malaria', 'Nairobi Hospital', 'Premier', 40),
(4, 'Britam', 'Malaria', 'Nairobi Hospital', 'Advantage', 60),
(5, 'Britam', 'Pneumonia', 'Nairobi Hospital', 'Advantage', 45),
(6, 'Britam', 'Pneumonia', 'Nairobi Hospital', 'Premier', 30),
(7, 'Britam', 'Pneumonia', 'Nairobi Hospital', 'Essential-1', 20),
(8, 'Britam', 'Pneumonia', 'Nairobi Hospital', 'Essential-2', 15),
(9, 'Britam', 'Cold flu', 'Nairobi Hospital', 'Essential-2', 50),
(10, 'Britam', 'Cold flu', 'Nairobi Hospital', 'Essential-1', 100),
(11, 'Britam', 'Cold flu', 'Nairobi Hospital', 'Premier', 100),
(12, 'Britam', 'Cold flu', 'Nairobi Hospital', 'Advantage', 100),
(13, 'Britam', 'Cold flu', 'Aga Khan Hospital', 'Advantage', 50),
(14, 'Britam', 'Cold flu', 'Aga Khan Hospital', 'Premier', 20),
(15, 'Britam', 'Pneumonia', 'Aga Khan Hospital', 'Essential-2', 15),
(16, 'Britam', 'Pneumonia', 'Aga Khan Hospital', 'Essential-1', 19),
(17, 'Britam', 'Pneumonia', 'Aga Khan Hospital', 'Premier', 26),
(18, 'Britam', 'Pneumonia', 'Aga Khan Hospital', 'Advantage', 35),
(19, 'Britam', 'Malaria', 'Aga Khan Hospital', 'Advantage', 35),
(20, 'Britam', 'Malaria', 'Aga Khan Hospital', 'Advantage', 20),
(21, 'Britam', 'Malaria', 'Kenyatta National Hospital', 'Advantage', 70),
(22, 'Britam', 'Malaria', 'Kenyatta National Hospital', 'Premier', 55),
(23, 'Britam', 'Malaria', 'Kenyatta National Hospital', 'Essential-1', 50),
(25, 'Britam', 'Malaria', 'Kenyatta National Hospital', 'Essential-2', 45),
(26, 'Britam', 'Pneumonia', 'Kenyatta National Hospital', 'Essential-2', 20),
(27, 'Britam', 'Pneumonia', 'Kenyatta National Hospital', 'Essential-1', 26),
(28, 'Britam', 'Pneumonia', 'Kenyatta National Hospital', 'Premier', 32),
(29, 'Britam', 'Pneumonia', 'Kenyatta National Hospital', 'Advantage', 38),
(30, 'NHIF', 'Pneumonia', 'Kenyatta National Hospital', 'Contract-A', 25),
(32, 'NHIF', 'Pneumonia', 'Nairobi Hospital', 'Contract-A', 20),
(33, 'NHIF', 'Pneumonia', 'Pwani Hospital', 'Contract-A', 25),
(34, 'NHIF', 'Pneumonia', 'Aga Khan Hospital', 'Contract-C', 20),
(35, 'NHIF', 'Pneumonia', 'AAR', 'Contract-C', 24),
(36, 'NHIF', 'Malaria', 'South B Hospital', 'Contract-A', 24),
(37, 'NHIF', 'Malaria', 'Mbagathi Hospital', 'Contract-A', 24),
(38, 'NHIF', 'Malaria', 'Mama Lucy Kibaki', 'Contract-A', 27);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `upassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uname`, `email`, `upassword`) VALUES
(1, 'koome', 'rg@gmail.com', '$2y$10$IN2L2v9UsSZAGBzl8bgTheb5wugwElyy3/8BJBm4NwDIWd2ssboFK'),
(5, 'koome', 'vg@gmail.com', '$2y$10$i9yiTsM80P1nYDhkgdBfNuf8YHagejWrXGGS8Ud7OmkRr13Cs3GS6'),
(8, 'mary', 'Mary@gmail.com', '$2y$10$qtRwXQOBEeMAcsBcRCv/euTDrgSsD/vSSPux1n5bmblsqFs.nZCHq'),
(9, 'james', 'james@gmail.com', '$2y$10$UG8VnLAlU06GiJ3jqBp4WuHoG/exTZklmt3fSIYwXyU7YiQ8oL5JG'),
(10, 'Rachael', 'rch@gmail.com', '$2y$10$VO3UiWfOPpyRbocvVKd0W.mhB0DYTyIBkgf7JY.4twnnOAFTyXx82'),
(12, 'mary', 'Mary1@gmail.com', '$2y$10$walaKhit/fwXmi18YM4tK.xxeR/eYLTF1n3VIZQ58tcQHUcV9yr0q');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`hid`),
  ADD KEY `illness` (`illness`);

--
-- Indexes for table `insurance`
--
ALTER TABLE `insurance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iname` (`iname`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `insurance`
--
ALTER TABLE `insurance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
