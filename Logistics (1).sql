-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 21, 2019 at 04:42 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Logistics`
--

-- --------------------------------------------------------

--
-- Table structure for table `Customer_Details`
--

CREATE TABLE `Customer_Details` (
  `ID` int(11) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone_Number` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Customer_Details`
--

INSERT INTO `Customer_Details` (`ID`, `First_Name`, `Last_Name`, `Email`, `Phone_Number`, `Password`) VALUES
(4, 'abel', 'muriithi', 'abelmuriithi13@outlook.com', '0799179426', '0000');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `ID` int(11) NOT NULL,
  `Commodity_Name` varchar(50) NOT NULL,
  `Commodity_ID` varchar(50) NOT NULL,
  `Supplier_ID` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Supplier_Name` varchar(50) NOT NULL,
  `Price` varchar(50) NOT NULL,
  `Photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`ID`, `Commodity_Name`, `Commodity_ID`, `Supplier_ID`, `Email`, `Supplier_Name`, `Price`, `Photo`) VALUES
(2, 'Bathing soap', '', '', '', '', 'Ksh 500', ''),
(3, 'Washing Soap', '', '', '', '', 'Ksh 200', 'Supplier/images'),
(4, 'Milk', '', '', '', '', 'Ksh 50', 'pic'),
(5, 'Tyres', '', '', '', '', 'Ksh 12000', ''),
(6, 'Bic pen', '', '', '', '', 'Ksh 20', ''),
(7, 'Bread', '', '', '', '', 'Ksh 50', ''),
(8, 'Pencil', '', '', '', '', 'Ksh 10', ''),
(9, 'Sugar', '', '', '', '', 'Ksh 20', ''),
(10, 'Books', '', '', '', '', 'Ksh 100', ''),
(11, 'Shoes', '', '', '', '', 'Ksh 100', '');

-- --------------------------------------------------------

--
-- Table structure for table `supplier1`
--

CREATE TABLE `supplier1` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone_Number` varchar(50) NOT NULL,
  `Name_of_Firm` varchar(50) NOT NULL,
  `KRA_Pin_Number` varchar(50) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier1`
--

INSERT INTO `supplier1` (`ID`, `Name`, `Email`, `Phone_Number`, `Name_of_Firm`, `KRA_Pin_Number`, `Location`, `Password`) VALUES
(1, 'Abel Karis', 'abelmuriithi@gmail.com', '+254799179426', 'Machungwa', 'A0115609U', 'Nairobi', '0000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Customer_Details`
--
ALTER TABLE `Customer_Details`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `supplier1`
--
ALTER TABLE `supplier1`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Customer_Details`
--
ALTER TABLE `Customer_Details`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `supplier1`
--
ALTER TABLE `supplier1`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
