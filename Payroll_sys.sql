-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 07, 2023 at 05:54 AM
-- Server version: 5.6.38
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Payroll_sys`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE `Admin` (
  `id` int(11) NOT NULL,
  `ad_name` varchar(100) NOT NULL,
  `ad_email` varchar(100) NOT NULL,
  `ad_password` varchar(100) NOT NULL,
  `ad_verify_code` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`id`, `ad_name`, `ad_email`, `ad_password`, `ad_verify_code`) VALUES
(10, 'Kenneth Silva', 'kbarinas0@gmail.com', '123', '953439811');

-- --------------------------------------------------------

--
-- Table structure for table `Att_Record`
--

CREATE TABLE `Att_Record` (
  `id` int(11) NOT NULL,
  `Employee_id` varchar(100) NOT NULL,
  `Full_Name` varchar(100) NOT NULL,
  `Employee_Position` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `time_In` varchar(100) NOT NULL,
  `time_Out` varchar(100) NOT NULL,
  `Amount_Rate` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Att_Record`
--

INSERT INTO `Att_Record` (`id`, `Employee_id`, `Full_Name`, `Employee_Position`, `Date`, `time_In`, `time_Out`, `Amount_Rate`) VALUES
(71, '002', 'Kenneth Silva', 'cashier', '2023-11-07', '7:38am', '0000', '750'),
(70, '002', 'Kenneth Silva', 'cashier', '2023-11-05', '1:07pm', '0000', '750'),
(72, '002', 'Kenneth Silva', 'cashier', '2023-11-07', '7:39am', '0000', '750');

-- --------------------------------------------------------

--
-- Table structure for table `deduction`
--

CREATE TABLE `deduction` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(100) NOT NULL,
  `employee_name` varchar(100) NOT NULL,
  `employee_position` varchar(100) NOT NULL,
  `sss_contri` varchar(100) NOT NULL,
  `pagibig_contri` varchar(100) NOT NULL,
  `phil_contri` varchar(100) NOT NULL,
  `totalDeduct` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Employee`
--

CREATE TABLE `Employee` (
  `id` int(11) NOT NULL,
  `Employee_id` varchar(100) NOT NULL,
  `Emplo_LastName` varchar(100) NOT NULL,
  `Emplo_FirstName` varchar(100) NOT NULL,
  `Emplo_MiddleName` varchar(100) NOT NULL,
  `Emplo_email` varchar(100) NOT NULL,
  `Emplo_Gender` varchar(100) NOT NULL,
  `Emplo_ContNum` varchar(100) NOT NULL,
  `Emplo_Address` varchar(100) NOT NULL,
  `Emplo_Position` varchar(100) NOT NULL,
  `rate` varchar(100) NOT NULL,
  `qrimage` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Employee`
--

INSERT INTO `Employee` (`id`, `Employee_id`, `Emplo_LastName`, `Emplo_FirstName`, `Emplo_MiddleName`, `Emplo_email`, `Emplo_Gender`, `Emplo_ContNum`, `Emplo_Address`, `Emplo_Position`, `rate`, `qrimage`) VALUES
(137, '001', 'Barinas', 'Kenneth', 'Burger', 'kbarinas0@gmail.com', 'Male', '09867532111', 'Pagadian City', 'manager', '750', '1698590019.png'),
(138, '002', 'Silva', 'Kenneth', 'Donut', 'kbarinas0@gmail.com', 'Male', '09867532111', 'Pagadian City', 'seller', '450', '');

-- --------------------------------------------------------

--
-- Table structure for table `Time_Sheet`
--

CREATE TABLE `Time_Sheet` (
  `id` int(11) NOT NULL,
  `Employee_id` varchar(100) NOT NULL,
  `Full_Name` varchar(100) NOT NULL,
  `Employee_Position` varchar(100) NOT NULL,
  `Employee_email` varchar(100) NOT NULL,
  `Employee_address` varchar(100) NOT NULL,
  `qrimage` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `time_In` varchar(100) NOT NULL,
  `time_Out` varchar(100) NOT NULL,
  `Num_Absent` varchar(100) NOT NULL,
  `No_Day_work` varchar(100) NOT NULL,
  `Amount_Rate` varchar(100) NOT NULL,
  `Total_Rate` varchar(100) NOT NULL,
  `Salary_Status` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Time_Sheet`
--

INSERT INTO `Time_Sheet` (`id`, `Employee_id`, `Full_Name`, `Employee_Position`, `Employee_email`, `Employee_address`, `qrimage`, `Date`, `time_In`, `time_Out`, `Num_Absent`, `No_Day_work`, `Amount_Rate`, `Total_Rate`, `Salary_Status`) VALUES
(65, '002', 'Kenneth Silva', 'cashier', 'kbarinas0@gmail.com', 'Pagadian City', '1699157318.png', '0000-00-00', '', '', '', '', '', '', ''),
(62, '001', 'Kenneth Barinas', 'manager', 'kbarinas0@gmail.com', 'Pagadian City', '1698809216.png', '0000-00-00', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Att_Record`
--
ALTER TABLE `Att_Record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deduction`
--
ALTER TABLE `deduction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Employee`
--
ALTER TABLE `Employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Time_Sheet`
--
ALTER TABLE `Time_Sheet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Admin`
--
ALTER TABLE `Admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `Att_Record`
--
ALTER TABLE `Att_Record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `deduction`
--
ALTER TABLE `deduction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `Employee`
--
ALTER TABLE `Employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `Time_Sheet`
--
ALTER TABLE `Time_Sheet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
