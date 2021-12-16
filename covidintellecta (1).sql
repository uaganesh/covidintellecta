-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2021 at 08:00 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covidintellecta`
--

-- --------------------------------------------------------

--
-- Table structure for table `activebooking`
--

CREATE TABLE `activebooking` (
  `bookingid` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `adhaarno` int(12) NOT NULL,
  `age` int(3) NOT NULL,
  `district` varchar(255) NOT NULL,
  `testingcenter` varchar(255) NOT NULL,
  `timeslot` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'PENDING',
  `testresult` varchar(30) NOT NULL,
  `resultref` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activebooking`
--

INSERT INTO `activebooking` (`bookingid`, `date`, `username`, `name`, `contact`, `dob`, `address`, `adhaarno`, `age`, `district`, `testingcenter`, `timeslot`, `status`, `testresult`, `resultref`) VALUES
(12, '2021-12-16', 'arun', 'ARUN BABY', 2147483647, '1995-09-05', 'VASAVAN VILASAM , KANNUR', 2147483647, 18, 'Trivandrum', 'KMCT', '8am-10AM', 'COMPLETED', 'Positive', '61bad661dc357');

-- --------------------------------------------------------

--
-- Table structure for table `approvedlabs`
--

CREATE TABLE `approvedlabs` (
  `labid` int(11) NOT NULL,
  `labname` varchar(255) NOT NULL,
  `officecontact` varchar(12) NOT NULL,
  `officeemail` varchar(100) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `proregno` varchar(255) NOT NULL,
  `dateofreg` date NOT NULL,
  `password` varchar(255) NOT NULL,
  `ownername` varchar(255) NOT NULL,
  `personalphone` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `idcard` varchar(50) NOT NULL,
  `provisonalcertificate` varchar(255) NOT NULL,
  `governmentid` varchar(255) NOT NULL,
  `applicationstatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `approvedlabs`
--

INSERT INTO `approvedlabs` (`labid`, `labname`, `officecontact`, `officeemail`, `userid`, `state`, `district`, `pincode`, `proregno`, `dateofreg`, `password`, `ownername`, `personalphone`, `address`, `idcard`, `provisonalcertificate`, `governmentid`, `applicationstatus`) VALUES
(1, 'DDRC Laboratory', '9568745987', 'redcross@gmail.com', 'hgjhghg', 'Kerala', 'Trivandrum', '691506', 'tv181733', '0000-00-00', '1234', 'GANESH', '9895702220', 'Kalpaka, Near Railway Station', 'dog', '', '', ''),
(2, 'Metalab', '9568745963', 'redcross@gmail.com', 'dfdf', 'Kerala', 'Kollam', '691506', 'tv181733', '0000-00-00', '1234', 'GANESH', '9895702220', 'Kalpaka, Near Railway Station', 'dog', '', '', ''),
(3, 'Aster Medicity', '9568745974', 'redcross@gmail.com', 'dfdf', 'Kerala', 'Wayanad', '691506', 'tv181733', '0000-00-00', '1234', 'GANESH', '9895702220', 'Kalpaka, Near Railway Station', 'dog', '', '', ''),
(4, 'KIMS', '9895702220', 'redcross@gmail.com', 'dfdfdf', 'Kerala', 'Alappuzha', '691506', 'tv181733', '0000-00-00', '1234', 'GANESH', '9895702220', 'Kalpaka, Near Railway Station', 'dog', '', '', ''),
(5, 'Red Cross', '9895702220', 'redcross@gmail.com', 'redcross123', 'Kerala', 'Kottayam', '691506', 'tv181733', '0000-00-00', '1234', 'GANESH', '9895702220', 'Kalpaka, Near Railway Station', 'dog', '', '', ''),
(6, 'Kannur Central', '9895702220', 'redcross@gmail.com', 'kannursenti', 'Kerala', 'Kottayam', '691506', 'tv181733', '0000-00-00', '1234', 'GANESH', '9895702220', 'Kalpaka, Near Railway Station', 'dog', '', '', ''),
(7, 'SHERLY ', '9895702220', 'redcross@gmail.com', 'redcross123', 'Kerala', 'Thrissur', '691506', 'tv181733', '0000-00-00', '1234', 'GANESH', '9895702220', 'Kalpaka, Near Railway Station', 'dog', '', '', ''),
(8, 'TOYSON', '9895702220', 'redcross@gmail.com', 'redcross123', 'Kerala', 'Idukki', '691506', 'tv181733', '0000-00-00', '1234', 'GANESH', '9895702220', 'Kalpaka, Near Railway Station', 'dog', '', '', ''),
(9, 'Tangonics', '9895702220', 'redcross@gmail.com', 'redcross123', 'Kerala', 'Thrissur', '691506', 'tv181733', '0000-00-00', '1234', 'GANESH', '9895702220', 'Kalpaka, Near Railway Station', 'dog', '', '', ''),
(10, 'Logatil', '9895702220', 'redcross@gmail.com', 'redcross123', 'Kerala', 'Kasargode', '691506', 'tv181733', '0000-00-00', '1234', 'GANESH', '9895702220', 'Kalpaka, Near Railway Station', 'dog', '', '', ''),
(11, 'jeeva', '9895702220', 'redcross@gmail.com', 'redcross123', 'Kerala', 'Kannur', '691506', 'tv181733', '0000-00-00', '1234', 'GANESH', '9895702220', 'Kalpaka, Near Railway Station', 'dog', '', '', ''),
(12, 'amala', '9895702220', 'redcross@gmail.com', 'redcross123', 'Kerala', 'Palakkad', '691506', 'tv181733', '0000-00-00', '1234', 'GANESH', '9895702220', 'Kalpaka, Near Railway Station', 'dog', '', '', ''),
(13, 'NIMS', '9895702220', 'redcross@gmail.com', 'redcross123', 'Kerala', 'Kannur', '691506', 'tv181733', '0000-00-00', '1234', 'GANESH', '9895702220', 'Kalpaka, Near Railway Station', 'dog', '', '', ''),
(14, 'KMCT', '9895702220', 'redcross@gmail.com', 'KMCT', 'Kerala', 'Trivandrum', '691506', 'tv181733', '0000-00-00', '1234', 'GANESH', '9895702220', 'Kalpaka, Near Railway Station', 'dog', '', '', ''),
(15, 'Sree gokulam', '9895702220', 'redcross@gmail.com', 'redcross123', 'Kerala', 'Kozhikode', '691506', 'tv181733', '0000-00-00', '1234', 'GANESH', '9895702220', 'Kalpaka, Near Railway Station', 'dog', '', '', ''),
(16, 'Amritha', '9895702220', 'redcross@gmail.com', 'redcross123', 'Kerala', 'Kozhikode', '691506', 'tv181733', '0000-00-00', '1234', 'GANESH', '9895702220', 'Kalpaka, Near Railway Station', 'dog', '', '', ''),
(17, 'Metro scans', '9895702220', 'redcross@gmail.com', 'redcross123', 'Kerala', 'Alappuzha', '691506', 'tv181733', '0000-00-00', '1234', 'GANESH', '9895702220', 'Kalpaka, Near Railway Station', 'dog', '', '', ''),
(18, 'ASTER', '9895702220', 'astermedicity@gmail.com', 'redcross123', 'Kerala', 'Eranakulam', '691506', 'tv181733', '0000-00-00', '1234', 'GANESH', '9895702220', 'Kalpaka, Near Railway Station', 'dog', '', '', ''),
(19, 'Rajagiri', '9895702220', 'redcross@gmail.com', 'redcross123', 'Kerala', 'Kannur', '691506', 'tv181733', '0000-00-00', '1234', 'GANESH', '9895702220', 'Kalpaka, Near Railway Station', 'dog', '', '', ''),
(20, 'Lakeshore', '9895702220', 'redcross@gmail.com', 'redcross123', 'Kerala', 'Malappuram', '691506', 'tv181733', '0000-00-00', '1234', 'GANESH', '9895702220', 'Kalpaka, Near Railway Station', 'dog', '', '', ''),
(21, 'dingan', '9567858726', 'shghsg@hg.com', 'ringer666', 'Kerala', 'Kollam', '691506', 'tk154n', '1997-09-17', 'djhdjhd', 'arunser', '965478965', 'shgdh sdhd shdg', 'Aadhar', 'shgdh.pdf', 'sdhghd.pdf', 'COMPLETED'),
(25, 'TVM NEW CENTER', '9895702220', 'redcross@gmail.com', 'simbu123', 'Kerala', 'Kollam', '691506', 'tv181733', '1998-05-12', '1234', 'GANESH', '9895702220', 'Kalpaka, Near Railway Station', 'dog', 'sdhgsjhgdshjsd.pdf', 'dfjhfjd.pdf', 'ACCEPTED'),
(29, 'VIJAYA LAB', '9895702220', 'redcross@gmail.com', 'redcross123', 'Kerala', 'Kollam', '691506', 'tv181733', '0000-00-00', '1234', 'GANESH', '9895702220', 'Kalpaka, Near Railway Station', 'dog', '', 'dfgdg.pdf', 'ACCEPTED'),
(30, 'TEXTER LAB', '9895702220', 'redcross@gmail.com', 'redcross123', 'Kerala', 'Kollam', '691506', 'tv181733', '0000-00-00', '1234', 'GANESH', '9895702220', 'Kalpaka, Near Railway Station', 'dog', '', 'dfgdg.pdf', 'ACCEPTED'),
(31, 'MEDI CLINIC', '9895702220', 'redcross@gmail.com', 'redcross123', 'Kerala', 'Kollam', '691506', 'tv181733', '0000-00-00', '1234', 'GANESH', '9895702220', 'Kalpaka, Near Railway Station', 'dog', '', 'dfgdg.pdf', 'ACCEPTED');

-- --------------------------------------------------------

--
-- Table structure for table `labapplications`
--

CREATE TABLE `labapplications` (
  `applicationid` int(11) NOT NULL,
  `labname` varchar(255) NOT NULL,
  `officecontact` varchar(12) NOT NULL,
  `officeemail` varchar(100) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `proregno` varchar(255) NOT NULL,
  `dateofreg` date NOT NULL,
  `password` varchar(255) NOT NULL,
  `provisonalcertificate` varchar(255) NOT NULL,
  `ownername` varchar(255) NOT NULL,
  `personalphone` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `idcard` varchar(50) NOT NULL,
  `governmentid` varchar(255) NOT NULL,
  `applicationstatus` varchar(50) NOT NULL DEFAULT 'PENDING'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `regid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(50) DEFAULT NULL,
  `accountstatus` varchar(100) NOT NULL DEFAULT 'ENABLED'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`regid`, `name`, `username`, `email`, `password`, `usertype`, `accountstatus`) VALUES
(1, '', 'arun', 'arun@gmail.com', '1234', 'citizen', 'ENABLED'),
(3, '', 'admin', 'admin@gmail.com', '1234', 'admin', 'ENABLED'),
(5, 'KMCT', 'KMCT', 'kmct@gmail.com', '1234', 'lab', 'ENABLED'),
(13, 'ASTER MEDICITY', 'astermedicity', 'aster@gmail.com', '1234', 'lab', 'ENABLED');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activebooking`
--
ALTER TABLE `activebooking`
  ADD PRIMARY KEY (`bookingid`);

--
-- Indexes for table `approvedlabs`
--
ALTER TABLE `approvedlabs`
  ADD PRIMARY KEY (`labid`);

--
-- Indexes for table `labapplications`
--
ALTER TABLE `labapplications`
  ADD PRIMARY KEY (`applicationid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`regid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activebooking`
--
ALTER TABLE `activebooking`
  MODIFY `bookingid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `approvedlabs`
--
ALTER TABLE `approvedlabs`
  MODIFY `labid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `labapplications`
--
ALTER TABLE `labapplications`
  MODIFY `applicationid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `regid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
