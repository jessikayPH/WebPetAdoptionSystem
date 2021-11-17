-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2021 at 07:35 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ems`
--

-- --------------------------------------------------------

--
-- Table structure for table `alogin`
--

CREATE TABLE `alogin` (
  `id` int(11) NOT NULL,
  `email` tinytext NOT NULL,
  `password` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alogin`
--

INSERT INTO `alogin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `birthday` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `nid` int(20) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `dept` varchar(100) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `pic` text NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `nameofpet` varchar(100) NOT NULL,
  `wan` varchar(100) NOT NULL,
  `two` varchar(100) NOT NULL,
  `three` varchar(100) NOT NULL,
  `four` varchar(100) NOT NULL,
  `five` varchar(100) NOT NULL,
  `wanwan` varchar(100) NOT NULL,
  `twotwo` varchar(100) NOT NULL,
  `threethree` varchar(100) NOT NULL,
  `fourfour` varchar(100) NOT NULL,
  `fivefive` varchar(100) NOT NULL,
  `six` varchar(100) NOT NULL,
  `seven` varchar(100) NOT NULL,
  `eight` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_nopad_ci NOT NULL,
  `nine` varchar(100) NOT NULL,
  `ten` varchar(100) NOT NULL,
  `eleven` varchar(100) NOT NULL,
  `twelve` varchar(100) NOT NULL,
  `tertin` varchar(100) NOT NULL,
  `portin` varchar(100) NOT NULL,
  `piptin` varchar(100) NOT NULL,
  `sixteen` varchar(100) NOT NULL,
  `seventeen` varchar(100) NOT NULL,
  `eighteen` varchar(100) NOT NULL,
  `nineteen` varchar(100) NOT NULL,
  `twenty` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `pickdate` varchar(100) NOT NULL,
  `picktime` varchar(100) NOT NULL,
  `receipt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `firstName`, `lastName`, `email`, `password`, `birthday`, `gender`, `contact`, `nid`, `address`, `dept`, `degree`, `pic`, `occupation`, `status`, `age`, `code`, `nameofpet`, `wan`, `two`, `three`, `four`, `five`, `wanwan`, `twotwo`, `threethree`, `fourfour`, `fivefive`, `six`, `seven`, `eight`, `nine`, `ten`, `eleven`, `twelve`, `tertin`, `portin`, `piptin`, `sixteen`, `seventeen`, `eighteen`, `nineteen`, `twenty`, `subject`, `pickdate`, `picktime`, `receipt`) VALUES
(38, 'Joserizal', 'joserizal', 'joserizal23@gmail.com', '1234', '2021-10-24', 'Male', '09522556503', 0, '196 Pili Avenue Block 6 West Rembo Makati City', '21:03', 'Approved', 'images/adoptee.png', 'IT', 'single', '23', '#87868908f', 'Moley', 'website', 'dog', 'no', 'my self', 'kind, pretty and loving', 'No', 'Yes', 'Parents', 'No', 'I have stable job and income', 'my parents', 'my parents', 'Yes, because they are the one who push me to adopt instead of buying', 'Practice playing', 'House', 'No', 'in my parents guide', 'Yes', 'smart and kind ', 'Yes', 'yes', 'yes, 100% fully committed', 'yes, by taking to the training camp or watching videos from youtube', 'yes', 'yes', 'Pet pick up', '2021-10-25', '10:10', ''),
(39, 'Jonnel', 'Ayson', 'Jonnelayson2@gmail.com', '1234', '2021-10-28', 'Male', '09522556503', 0, '196 Pili Avenue Block 6 West Rembo Makati City', '15:42', 'Approved', 'images/no.jpg', 'IT', 'single', '23', '#87868908f', 'Moley', 'website', 'dog', 'no', 'my self', 'kind, pretty and loving', 'Yes', 'Yes', 'Parents', 'No', 'I have stable job and income', 'my parents', 'my parents', 'Yes, because they are the one who push me to adopt instead of buying', 'Practice playing', 'House', 'No', 'in my parents guide', 'No', 'smart and kind ', 'Yes', 'yes', 'yes, 100% fully committed', 'yes, by taking to the training camp or watching videos from youtube', 'yes', 'yes', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `employee_leave`
--

CREATE TABLE `employee_leave` (
  `id` int(11) DEFAULT NULL,
  `token` int(11) NOT NULL,
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL,
  `reason` char(100) DEFAULT NULL,
  `status` char(50) DEFAULT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_leave`
--

INSERT INTO `employee_leave` (`id`, `token`, `start`, `end`, `reason`, `status`, `time`) VALUES
(38, 33, '2021-10-24', '2021-10-24', 'Interview', 'Approved', '21:08');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `pid` int(11) NOT NULL,
  `eid` int(11) DEFAULT NULL,
  `pname` varchar(100) DEFAULT NULL,
  `duedate` date DEFAULT NULL,
  `subdate` date DEFAULT '0000-00-00',
  `mark` int(11) NOT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `eid` int(11) NOT NULL,
  `points` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`eid`, `points`) VALUES
(38, 0),
(39, 0);

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int(11) NOT NULL,
  `base` int(11) NOT NULL,
  `bonus` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`id`, `base`, `bonus`, `total`) VALUES
(38, 0, 0, 0),
(39, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alogin`
--
ALTER TABLE `alogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `employee_leave`
--
ALTER TABLE `employee_leave`
  ADD PRIMARY KEY (`token`),
  ADD KEY `employee_leave_ibfk_1` (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `project_ibfk_1` (`eid`);

--
-- Indexes for table `rank`
--
ALTER TABLE `rank`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alogin`
--
ALTER TABLE `alogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `employee_leave`
--
ALTER TABLE `employee_leave`
  MODIFY `token` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee_leave`
--
ALTER TABLE `employee_leave`
  ADD CONSTRAINT `employee_leave_ibfk_1` FOREIGN KEY (`id`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`eid`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rank`
--
ALTER TABLE `rank`
  ADD CONSTRAINT `rank_ibfk_1` FOREIGN KEY (`eid`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `salary`
--
ALTER TABLE `salary`
  ADD CONSTRAINT `salary_ibfk_1` FOREIGN KEY (`id`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
