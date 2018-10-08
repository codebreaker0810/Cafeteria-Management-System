-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2018 at 08:08 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cafemgmt`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `btime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bid`, `cid`, `amount`, `btime`) VALUES
(1, 47, 1360, '2018-10-04 17:30:34'),
(2, 47, 1360, '2018-10-04 17:31:18'),
(3, 47, 1360, '2018-10-04 17:31:52'),
(4, 47, 1360, '2018-10-04 17:32:16'),
(5, 77, 280, '2018-10-04 17:46:14'),
(6, 77, 40, '2018-10-04 17:49:40');

-- --------------------------------------------------------

--
-- Table structure for table `cafe`
--

CREATE TABLE `cafe` (
  `cfid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cafe`
--

INSERT INTO `cafe` (`cfid`, `name`, `address`) VALUES
(1, 'CAFE1', 'Pune'),
(2, 'CAFE2', 'Pune2');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cfid` int(11) NOT NULL,
  `pno` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cfid`, `pno`, `email`) VALUES
(1, 21457895, 'cafe1@cafe.com'),
(2, 21545514, 'cafe2@cafe.com');

-- --------------------------------------------------------

--
-- Table structure for table `contains`
--

CREATE TABLE `contains` (
  `id` int(11) NOT NULL,
  `oid` int(11) NOT NULL,
  `iid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contains`
--

INSERT INTO `contains` (`id`, `oid`, `iid`, `quantity`) VALUES
(24, 28, 5, 6),
(25, 28, 7, 5),
(26, 32, 5, 6),
(27, 32, 7, 6),
(28, 33, 7, 8),
(29, 33, 5, 4),
(30, 35, 5, 4),
(31, 35, 7, 2),
(32, 36, 5, 2),
(33, 61, 7, 1),
(34, 61, 7, 1),
(35, 60, 7, 1),
(36, 65, 7, 2);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pno` bigint(20) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cid`, `name`, `pno`, `address`) VALUES
(1, 'ABC', 98875788, 'Pune'),
(46, 'apple', 8888888888, 'Katraj'),
(47, 'Cust1', 9999999999, 'Pune'),
(52, 'A', 999999999, 's'),
(77, 'Omkar', 9876543210, 'Pune'),
(78, 'Omkar Thorat', 9970525069, 'Daund Pune'),
(84, 'a', 5, 'c'),
(85, 's', 4, '5'),
(92, 'a', 1, 'aq'),
(99, 'a', 2, 's'),
(100, 'L', 987554664, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `eid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`eid`, `name`, `phone`, `mail`, `password`, `mid`) VALUES
(11, 'ab', 7812345678, 'ab@a.c', 'Ab123@ac', 1),
(14, 'rahul', 7212345643, 'rahul@a.c', 'Rahul@123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `iid` int(11) NOT NULL,
  `idesc` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`iid`, `idesc`, `price`, `img`) VALUES
(4, 'apple', 14, 'ass1.png'),
(5, 'fries', 60, '3d_bars-2560x1440.jpg'),
(7, 'bread', 20, 'titanfall_2_hd-HD.jpg'),
(8, 'Vada_Pav', 10, 'vada-pav-pakwangali_520_020216111040.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `mid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pno` bigint(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cfid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`mid`, `name`, `pno`, `password`, `cfid`) VALUES
(1, 'admin', 88, 'admin', 1),
(3, 'manager2', 8745126451, 'admin', 2);

-- --------------------------------------------------------

--
-- Table structure for table `ord`
--

CREATE TABLE `ord` (
  `oid` int(11) NOT NULL,
  `no_of_item` int(11) NOT NULL DEFAULT '0',
  `eid` int(11) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'unpaid',
  `cid` int(11) NOT NULL,
  `otime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ord`
--

INSERT INTO `ord` (`oid`, `no_of_item`, `eid`, `status`, `cid`, `otime`) VALUES
(28, 4, 14, 'paid', 47, '2018-10-04 17:11:27'),
(29, 4, 14, 'paid', 47, '2018-10-04 17:11:27'),
(30, 4, 14, 'paid', 47, '2018-10-04 17:11:27'),
(31, 4, 14, 'paid', 47, '2018-10-04 17:11:27'),
(32, 8, 14, 'paid', 47, '2018-10-04 17:11:27'),
(33, 0, 14, 'paid', 47, '2018-10-04 17:11:27'),
(34, 3, 14, 'paid', 47, '2018-10-04 17:11:27'),
(35, 2, 14, 'paid', 77, '2018-10-04 17:11:27'),
(36, 0, 14, 'unpaid', 78, '2018-10-04 17:11:27'),
(37, 1, 14, 'unpaid', 78, '2018-10-04 17:11:27'),
(38, 1, 14, 'unpaid', 78, '2018-10-04 17:11:27'),
(39, 1, 14, 'unpaid', 78, '2018-10-04 17:11:27'),
(40, 1, 14, 'unpaid', 78, '2018-10-04 17:11:27'),
(41, 1, 14, 'unpaid', 78, '2018-10-04 17:11:27'),
(42, 1, 14, 'unpaid', 84, '2018-10-04 17:11:27'),
(43, 1, 14, 'unpaid', 85, '2018-10-04 17:11:27'),
(44, 2, 14, 'unpaid', 78, '2018-10-04 17:11:27'),
(45, 1, 14, 'unpaid', 78, '2018-10-04 17:11:27'),
(46, 1, 14, 'unpaid', 78, '2018-10-04 17:11:27'),
(47, 1, 14, 'unpaid', 78, '2018-10-04 17:11:27'),
(48, 1, 14, 'unpaid', 78, '2018-10-04 17:11:27'),
(49, 1, 14, 'unpaid', 84, '2018-10-04 17:11:27'),
(50, 0, 14, 'unpaid', 92, '2018-10-04 17:11:27'),
(51, 0, 14, 'unpaid', 92, '2018-10-04 17:11:27'),
(52, 0, 14, 'unpaid', 92, '2018-10-04 17:11:27'),
(53, 0, 14, 'unpaid', 92, '2018-10-04 17:11:27'),
(54, 0, 14, 'unpaid', 92, '2018-10-04 17:11:27'),
(55, 0, 14, 'unpaid', 92, '2018-10-04 17:11:27'),
(56, 0, 14, 'unpaid', 84, '2018-10-04 17:11:27'),
(57, 1, 14, 'unpaid', 99, '2018-10-04 17:11:27'),
(58, 1, 14, 'unpaid', 100, '2018-10-04 17:11:27'),
(59, 1, 14, 'unpaid', 100, '2018-10-04 17:11:27'),
(60, 1, 14, 'paid', 47, '2018-10-04 17:11:27'),
(61, 1, 14, 'unpaid', 52, '2018-10-04 17:11:27'),
(62, 1, 14, 'unpaid', 52, '2018-10-04 17:11:27'),
(63, 1, 14, 'unpaid', 52, '2018-10-04 17:11:27'),
(64, 1, 14, 'paid', 47, '2018-10-04 17:11:27'),
(65, 1, 14, 'paid', 77, '2018-10-04 17:49:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `cafe`
--
ALTER TABLE `cafe`
  ADD PRIMARY KEY (`cfid`),
  ADD UNIQUE KEY `address` (`address`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cfid`),
  ADD UNIQUE KEY `pno` (`pno`);

--
-- Indexes for table `contains`
--
ALTER TABLE `contains`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iid` (`iid`),
  ADD KEY `oid` (`oid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cid`),
  ADD UNIQUE KEY `pno` (`pno`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`eid`),
  ADD KEY `mid` (`mid`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`iid`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`mid`),
  ADD KEY `cfid` (`cfid`);

--
-- Indexes for table `ord`
--
ALTER TABLE `ord`
  ADD PRIMARY KEY (`oid`),
  ADD KEY `eid` (`eid`),
  ADD KEY `ord_ibfk_1` (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cafe`
--
ALTER TABLE `cafe`
  MODIFY `cfid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contains`
--
ALTER TABLE `contains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `iid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ord`
--
ALTER TABLE `ord`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `customer` (`cid`);

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`cfid`) REFERENCES `cafe` (`cfid`),
  ADD CONSTRAINT `contact_ibfk_2` FOREIGN KEY (`cfid`) REFERENCES `cafe` (`cfid`);

--
-- Constraints for table `contains`
--
ALTER TABLE `contains`
  ADD CONSTRAINT `contains_ibfk_1` FOREIGN KEY (`iid`) REFERENCES `item` (`iid`),
  ADD CONSTRAINT `contains_ibfk_2` FOREIGN KEY (`oid`) REFERENCES `ord` (`oid`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`mid`) REFERENCES `manager` (`mid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `manager`
--
ALTER TABLE `manager`
  ADD CONSTRAINT `manager_ibfk_1` FOREIGN KEY (`cfid`) REFERENCES `cafe` (`cfid`);

--
-- Constraints for table `ord`
--
ALTER TABLE `ord`
  ADD CONSTRAINT `ord_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `customer` (`cid`),
  ADD CONSTRAINT `ord_ibfk_2` FOREIGN KEY (`eid`) REFERENCES `employee` (`eid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
