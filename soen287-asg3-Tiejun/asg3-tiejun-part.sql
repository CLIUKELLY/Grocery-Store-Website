-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: August 15, 2020 at 08:57 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `termproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `ADD_ID` int(11) NOT NULL,
  `A_LAST` varchar(50) DEFAULT NULL,
  `A_FIRST` varchar(50) DEFAULT NULL,
  `A_APT` varchar(20) DEFAULT NULL,
  `A_RUE` varchar(100) DEFAULT NULL,
  `A_CITY` varchar(20) DEFAULT NULL,
  `A_ZIP` varchar(20) DEFAULT NULL,
  `A_PHONE` int(20) DEFAULT NULL,
  `C_ID` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`ADD_ID`, `A_LAST`, `A_FIRST`, `A_APT`, `A_RUE`, `A_CITY`, `A_ZIP`, `A_PHONE`, `C_ID`) VALUES
(1, 'Shipping', 'Receiver', '7', 'Saint', 'Montreal', 'h4l2v2', 438119345, 1),
(2, 'Address', 'Billing', '7', 'Saint', 'Montreal', 'h4l2v2', 438119345, 1),
(3, 'address', 'billing', '4', 'Saint-Laurent', 'Montreal', 'h4l2v2', 345678, -1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `C_ID` int(11) NOT NULL,
  `C_USERID` varchar(10) DEFAULT NULL,
  `C_PASSWORD` varchar(10) DEFAULT NULL,
  `ROLE` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`C_ID`, `C_USERID`, `C_PASSWORD`, `ROLE`) VALUES
(1, 'TestUser1', '123', 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `item`
-- This is product table, in order to be convenience, set the table name as item.

CREATE TABLE `item` (
  `ITEM_ID` int(11) NOT NULL,
  `ITEM_NAME` varchar(20) DEFAULT NULL,
  `ITEM_DESC` varchar(200) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `QTY` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`ITEM_ID`, `ITEM_NAME`, `ITEM_DESC`, `price`, `QTY`) VALUES
(940740, 'Celer', 'Organic product', 2.99, 200),
(101328, 'Apple cider vinegar', 'Organic product', 8.97, 300),
(176002, 'Blue corn', 'Organic product', 4.19, 200);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PAY_ID` int(11) NOT NULL,
  `C_ID` int(11) DEFAULT NULL,
  `ADD_ID` int(11) DEFAULT NULL,
  `TYPE` varchar(10) DEFAULT NULL,
  `ACCOUNTNO` int(11) DEFAULT NULL,
  `EXP_DATE` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`PAY_ID`, `C_ID`, `ADD_ID`, `TYPE`, `ACCOUNTNO`, `EXP_DATE`) VALUES
(1, 1, 2, 'master', 2348, '2014-02-23'),
(2, -1, 3, 'master', 456, '2014-03-23');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `S_ID` int(11) NOT NULL,
  `S_DATE` date DEFAULT NULL,
  `PAY_ID` int(11) DEFAULT NULL,
  `ADD_ID` int(11) DEFAULT NULL,
  `C_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`S_ID`, `S_DATE`, `PAY_ID`, `ADD_ID`, `C_ID`) VALUES
(1, '2016-05-02', 1, 2, 1),
(2, '2016-05-02', 2, 3, -1);

-- --------------------------------------------------------

--
-- Table structure for table `sales_line`
--

CREATE TABLE `sales_line` (
  `S_ID` int(11) NOT NULL,
  `ITEM_ID` int(11) NOT NULL,
  `QTY` int(11) DEFAULT NULL,
  `PRICE` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_line`
--

INSERT INTO `sales_line` (`S_ID`, `ITEM_ID`, `QTY`, `PRICE`) VALUES
(1, 69, 9, 35);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`ADD_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`C_ID`),
  ADD UNIQUE KEY `C_USERID` (`C_USERID`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`ITEM_ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PAY_ID`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`S_ID`);

--
-- Indexes for table `sales_line`
--
ALTER TABLE `sales_line`
  ADD PRIMARY KEY (`S_ID`,`ITEM_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `ADD_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `C_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `ITEM_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `PAY_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `S_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
