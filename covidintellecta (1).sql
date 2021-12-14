-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2021 at 05:07 PM
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
  `status` varchar(100) NOT NULL DEFAULT 'PENDING'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activebooking`
--

INSERT INTO `activebooking` (`bookingid`, `date`, `username`, `name`, `contact`, `dob`, `address`, `adhaarno`, `age`, `district`, `testingcenter`, `timeslot`, `status`) VALUES
(3, '2021-12-14', 'arun', 'U A GANESH', 2147483647, '1997-09-05', 'KALPAKA , NEAR RAILWAY STATION  , KOTTARAKKARA , KOLLAM', 2147483647, 18, 'Kollam', 'KMCT', '8am-10AM', 'COMPLETED'),
(6, '2021-12-14', 'sadas', 'sdaas', 989570222, '0000-00-00', 'ddccxzcs', 423423, 24, 'xdadas', 'KMCT', '', 'PENDING');

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
  `personalphone` varchar(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `idcard` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `approvedlabs`
--

INSERT INTO `approvedlabs` (`labid`, `labname`, `officecontact`, `officeemail`, `userid`, `state`, `district`, `pincode`, `proregno`, `dateofreg`, `password`, `ownername`, `personalphone`, `address`, `idcard`) VALUES
(1, 'DDRC Laboratory', '9895702220', 'redcross@gmail.com', 'redcross123', 'Kerala', 'Trivandrum', '691506', 'tv181733', '0000-00-00', '1234', 'GANESH', '9895702220', 'Kalpaka, Near Railway Station', 'dog'),
(2, 'Metalab', '9895702220', 'redcross@gmail.com', 'dfdf', 'Kerala', 'Kollam', '691506', 'tv181733', '0000-00-00', '1234', 'GANESH', '9895702220', 'Kalpaka, Near Railway Station', 'dog'),
(3, 'Aster Medicity', '9895702220', 'redcross@gmail.com', 'dfdf', 'Kerala', 'Wayanad', '691506', 'tv181733', '0000-00-00', '1234', 'GANESH', '9895702220', 'Kalpaka, Near Railway Station', 'dog'),
(4, 'KIMS', '9895702220', 'redcross@gmail.com', 'dfdfdf', 'Kerala', 'Alappuzha', '691506', 'tv181733', '0000-00-00', '1234', 'GANESH', '9895702220', 'Kalpaka, Near Railway Station', 'dog'),
(5, 'Red Cross', '9895702220', 'redcross@gmail.com', 'redcross123', 'Kerala', 'Kottayam', '691506', 'tv181733', '0000-00-00', '1234', 'GANESH', '9895702220', 'Kalpaka, Near Railway Station', 'dog'),
(6, 'Kannur Sentigen', '9895702220', 'redcross@gmail.com', 'kannursenti', 'Kerala', 'Kottayam', '691506', 'tv181733', '0000-00-00', '1234', 'GANESH', '9895702220', 'Kalpaka, Near Railway Station', 'dog'),
(7, 'Vasavan ', '9895702220', 'redcross@gmail.com', 'redcross123', 'Kerala', 'Thrissur', '691506', 'tv181733', '0000-00-00', '1234', 'GANESH', '9895702220', 'Kalpaka, Near Railway Station', 'dog'),
(8, 'Muriyil Jerry ', '9895702220', 'redcross@gmail.com', 'redcross123', 'Kerala', 'Idukki', '691506', 'tv181733', '0000-00-00', '1234', 'GANESH', '9895702220', 'Kalpaka, Near Railway Station', 'dog'),
(9, 'Tangonics', '9895702220', 'redcross@gmail.com', 'redcross123', 'Kerala', 'Thrissur', '691506', 'tv181733', '0000-00-00', '1234', 'GANESH', '9895702220', 'Kalpaka, Near Railway Station', 'dog'),
(10, 'Logatil', '9895702220', 'redcross@gmail.com', 'redcross123', 'Kerala', 'Kasargode', '691506', 'tv181733', '0000-00-00', '1234', 'GANESH', '9895702220', 'Kalpaka, Near Railway Station', 'dog'),
(11, 'jeeva', '9895702220', 'redcross@gmail.com', 'redcross123', 'Kerala', 'Kannur', '691506', 'tv181733', '0000-00-00', '1234', 'GANESH', '9895702220', 'Kalpaka, Near Railway Station', 'dog'),
(12, 'amala', '9895702220', 'redcross@gmail.com', 'redcross123', 'Kerala', 'Palakkad', '691506', 'tv181733', '0000-00-00', '1234', 'GANESH', '9895702220', 'Kalpaka, Near Railway Station', 'dog'),
(13, 'NIMS', '9895702220', 'redcross@gmail.com', 'redcross123', 'Kerala', 'Kannur', '691506', 'tv181733', '0000-00-00', '1234', 'GANESH', '9895702220', 'Kalpaka, Near Railway Station', 'dog'),
(14, 'KMCT', '9895702220', 'redcross@gmail.com', 'KMCT', 'Kerala', 'Kollam', '691506', 'tv181733', '0000-00-00', '1234', 'GANESH', '9895702220', 'Kalpaka, Near Railway Station', 'dog'),
(15, 'Sree gokulam', '9895702220', 'redcross@gmail.com', 'redcross123', 'Kerala', 'Kozhikode', '691506', 'tv181733', '0000-00-00', '1234', 'GANESH', '9895702220', 'Kalpaka, Near Railway Station', 'dog'),
(16, 'Amritha', '9895702220', 'redcross@gmail.com', 'redcross123', 'Kerala', 'Kozhikode', '691506', 'tv181733', '0000-00-00', '1234', 'GANESH', '9895702220', 'Kalpaka, Near Railway Station', 'dog'),
(17, 'Metro scans', '9895702220', 'redcross@gmail.com', 'redcross123', 'Kerala', 'Alappuzha', '691506', 'tv181733', '0000-00-00', '1234', 'GANESH', '9895702220', 'Kalpaka, Near Railway Station', 'dog'),
(18, 'ASTER', '9895702220', 'redcross@gmail.com', 'redcross123', 'Kerala', 'Eranakulam', '691506', 'tv181733', '0000-00-00', '1234', 'GANESH', '9895702220', 'Kalpaka, Near Railway Station', 'dog'),
(19, 'Rajagiri', '9895702220', 'redcross@gmail.com', 'redcross123', 'Kerala', 'Kannur', '691506', 'tv181733', '0000-00-00', '1234', 'GANESH', '9895702220', 'Kalpaka, Near Railway Station', 'dog'),
(20, 'Lakeshore', '9895702220', 'redcross@gmail.com', 'redcross123', 'Kerala', 'Malappuram', '691506', 'tv181733', '0000-00-00', '1234', 'GANESH', '9895702220', 'Kalpaka, Near Railway Station', 'dog');

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
  `personalphone` varchar(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `idcard` varchar(50) NOT NULL,
  `governmentid` varchar(255) NOT NULL,
  `applicationstatus` varchar(50) NOT NULL DEFAULT 'PENDING'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labapplications`
--

INSERT INTO `labapplications` (`applicationid`, `labname`, `officecontact`, `officeemail`, `userid`, `state`, `district`, `pincode`, `proregno`, `dateofreg`, `password`, `provisonalcertificate`, `ownername`, `personalphone`, `address`, `idcard`, `governmentid`, `applicationstatus`) VALUES
(1, 'RED CROSS', '9895702220', 'redcross@gmail.com', 'redcross123', 'Kerala', 'Kollam', '691506', 'tv181733', '0000-00-00', '1234', '', 'GANESH', '9895702220', 'Kalpaka, Near Railway Station', 'dog', '', 'PENDING'),
(2, 'ASTER MEDICITY', '9652369874', 'SHGSH@GH.com', 'sjsjshsjh', 'Kerala', 'Kasargode', '69131', 'arun', '1996-09-05', '1234', '61949299398be0.80459596.pdf', 'sdsdsd', '254545', 'sssdsdds', 'Adhaar Card', '6194929939c3f5.79703735.pdf', 'PENDING');

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
(1, '', 'arun', 'arun@gmail.com', 'arun', 'citizen', 'ENABLED'),
(2, '', 'vyshnav', 'vyshnav@gmail.com', 'vyshnav', 'lab', 'ENABLED'),
(3, '', 'athulcp', 'athulcp@gmail.com', 'athulcp', 'admin', 'ENABLED'),
(4, 'Kannur Sentigen', 'kannursenti', 'ganesh@gmail.com', '1234', 'lab', 'ENABLED'),
(5, 'ARUN BABY', 'KMCT', 'arunbaby1998@gmail.com', '1234', 'lab', 'ENABLED'),
(6, 'sdsdf', 'sdjfsj', 'sdsdfd@gdjh.com', '$2y$10$k0B8RQiihhlDpc90eMkB9uFEISWwjbaD2TtnweRf.b/tGB/noD1yS', 'citizen', 'ENABLED'),
(7, 'Anjali', 'Anjali', 'anjali@gmail.com', '$2y$10$O6BUWFAMU8qBiG1QpSqdX.0n26qgpP1g/87Z1fyhO8mpHiAbTJ4AS', 'citizen', 'ENABLED');

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
  MODIFY `bookingid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `approvedlabs`
--
ALTER TABLE `approvedlabs`
  MODIFY `labid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `labapplications`
--
ALTER TABLE `labapplications`
  MODIFY `applicationid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `regid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
