-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2019 at 07:42 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrs`
--

-- --------------------------------------------------------

--
-- Table structure for table `addflat`
--

CREATE TABLE `addflat` (
  `id` int(11) NOT NULL,
  `hname` varchar(100) DEFAULT NULL,
  `rentertype` varchar(100) DEFAULT NULL,
  `floorno` varchar(50) DEFAULT NULL,
  `roomno` varchar(50) DEFAULT NULL,
  `rentprice` varchar(50) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  `houseOwner` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addflat`
--

INSERT INTO `addflat` (`id`, `hname`, `rentertype`, `floorno`, `roomno`, `rentprice`, `description`, `date`, `houseOwner`) VALUES
(14, 'house1 [Savar]', 'businessman', '1st', '101', '15000', 'Desc Desc Desc Desc', 'Dec 02, 2018', 'touhid'),
(15, 'house1 [Savar]', 'employee', '2nd', '201', '15000', 'Desc Desc Desc Desc', 'Dec 02, 2018', 'touhid'),
(16, 'house1 [Savar]', 'student', '1st', '102', '15000', 'Desc Desc Desc Desc', 'Dec 02, 2018', 'touhid'),
(17, 'house2 [Savar]', 'student', '2nd', '201', '15000', 'Desc Desc Desc Desc', 'Dec 02, 2018', 'touhid'),
(18, 'house2 [Savar]', 'student', '2nd', '202', '15000', 'Desc Desc Desc Desc', 'Dec 02, 2018', 'touhid'),
(19, 'house2 [Savar]', 'employee', '2nd', '203', '15000', 'Desc Desc Desc Desc', 'Dec 02, 2018', 'touhid'),
(20, 'house2 [Savar]', 'student', '3rd', '301', '15000', 'Desc Desc Desc Desc', 'Dec 02, 2018', 'touhid'),
(21, 'house1 [Savar]', 'businessman', '1st', '101', '15000', 'Desc Desc Desc Desc', 'Dec 02, 2018', 'touhid1'),
(22, 'house1 [Savar]', 'student', '1st', '102', '15000', 'Desc Desc Desc Desc', 'Dec 02, 2018', 'touhid1'),
(23, 'house2 [Savar]', 'businessman', '1st', '201', '15000', 'Desc Desc Desc Desc', 'Dec 02, 2018', 'touhid1');

-- --------------------------------------------------------

--
-- Table structure for table `addhouse`
--

CREATE TABLE `addhouse` (
  `id` int(11) NOT NULL,
  `selectCity` varchar(100) DEFAULT NULL,
  `selectArea` varchar(100) DEFAULT NULL,
  `houseName` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  `houseOwner` varchar(100) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addhouse`
--

INSERT INTO `addhouse` (`id`, `selectCity`, `selectArea`, `houseName`, `address`, `description`, `houseOwner`, `date`) VALUES
(17, 'Dhaka', 'Savar', 'house1', 'road 332, Savar', 'Desc Desc Desc Desc', 'touhid', 'Dec 02, 2018'),
(18, 'Dhaka', 'Savar', 'house2', 'road 332, Savar', 'Desc Desc Desc Desc', 'touhid', 'Dec 02, 2018'),
(19, 'Dhaka', 'Danmondi', 'house3', 'road 332, Danmondi', 'Desc Desc Desc Desc', 'touhid', 'Dec 02, 2018'),
(20, 'Dhaka', 'Savar', 'house1', 'road 332, Savar', 'Desc Desc Desc Desc', 'touhid1', 'Dec 02, 2018'),
(21, 'Dhaka', 'Savar', 'house2', 'road 332, Savar', 'Desc Desc Desc Desc', 'touhid1', 'Dec 02, 2018'),
(22, 'Dhaka', 'Danmondi', 'house3', 'road 332, Danmondi', 'Desc Desc Desc Desc', 'touhid1', 'Dec 02, 2018');

-- --------------------------------------------------------

--
-- Table structure for table `addmember`
--

CREATE TABLE `addmember` (
  `id` int(11) NOT NULL,
  `membername` varchar(50) DEFAULT NULL,
  `occupation` varchar(50) DEFAULT NULL,
  `nid` varchar(50) DEFAULT NULL,
  `phnno` varchar(50) DEFAULT NULL,
  `entrydate` varchar(100) DEFAULT NULL,
  `leavedate` varchar(100) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addmember`
--

INSERT INTO `addmember` (`id`, `membername`, `occupation`, `nid`, `phnno`, `entrydate`, `leavedate`, `username`) VALUES
(1, 'member1', 'Emploee', '34723', '0198', 'oct 15, 2017', '2018-12-12', 'hridoy1'),
(2, 'member2', 'Emploee', '34723', '0197', 'oct 15, 2017', '2018-07-28', 'hridoy1'),
(3, 'member3', 'Emploee', '34723', '0196', 'oct 15, 2017', '2018-11-15', 'hridoy1'),
(4, 'member4', 'Emploee', '347538', '0195', 'oct 15, 2017', '2018-10-15', 'hridoy1'),
(5, 'touhid1', 'Emploee', '3443', '019855', 'Nov 30, 2018', '2018-11-30', 'hridoy1'),
(8, 'touhid', 'Emploee', '444', '0198554', 'Nov 30, 2018', 'NULL', 'hridoy1');

-- --------------------------------------------------------

--
-- Table structure for table `flatrent`
--

CREATE TABLE `flatrent` (
  `id` int(11) NOT NULL,
  `hname` varchar(50) DEFAULT NULL,
  `floorno` varchar(50) DEFAULT NULL,
  `roomno` varchar(50) DEFAULT NULL,
  `representativephn` varchar(50) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  `houseOwner` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flatrent`
--

INSERT INTO `flatrent` (`id`, `hname`, `floorno`, `roomno`, `representativephn`, `date`, `houseOwner`) VALUES
(10, 'house1 [Savar]', '1st', '101', '0198', 'Dec 02, 2018', 'touhid'),
(11, 'house1 [Savar]', '2nd', '201', '01988', 'Dec 02, 2018', 'touhid'),
(12, 'house1 [Savar]', '1st', '102', '01968', 'Dec 02, 2018', 'touhid'),
(13, 'house2 [Savar]', '2nd', '201', '01888', 'Dec 02, 2018', 'touhid'),
(14, 'house2 [Savar]', '2nd', '202', '01987', 'Dec 02, 2018', 'touhid'),
(15, 'house1 [Savar]', '1st', '101', '01983', 'Dec 02, 2018', 'touhid1'),
(16, 'house1 [Savar]', '1st', '102', '0194', 'Dec 02, 2018', 'touhid1');

-- --------------------------------------------------------

--
-- Table structure for table `h_owner`
--

CREATE TABLE `h_owner` (
  `id` int(11) NOT NULL,
  `deg` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `nid` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `phnno` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `occupation` varchar(50) DEFAULT NULL,
  `postcode` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `h_owner`
--

INSERT INTO `h_owner` (`id`, `deg`, `name`, `pass`, `nid`, `email`, `phnno`, `address`, `city`, `occupation`, `postcode`) VALUES
(1, 'woner', 'touhid', 't1', '31', 't1@gmail.com', '01981', 'road 31 savar', 'Dhaka', 'Businessman', '2151'),
(2, 'woner', 'touhid1', 't2', '32', 't2@gmail.com', '01982', 'road 32 savar', 'Dhaka', 'Businessman', '2151'),
(3, 'woner', 'touhid2', 't3', '33', 't3@gmail.com', '01983', 'road 33 savar', 'Dhaka', 'Businessman', '2151'),
(4, 'owner', 'mushi', 'r555', '3443', 't5@gmail.com', '019', 'r 32', 'Dhaka', 'businessman', '2151');

-- --------------------------------------------------------

--
-- Table structure for table `h_representative`
--

CREATE TABLE `h_representative` (
  `id` int(11) NOT NULL,
  `deg` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `nid` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phnno` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `occupation` varchar(50) DEFAULT NULL,
  `postcode` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `h_representative`
--

INSERT INTO `h_representative` (`id`, `deg`, `name`, `pass`, `nid`, `email`, `phnno`, `address`, `city`, `occupation`, `postcode`) VALUES
(1, 'representative', 'hridoy1', 'h1', '21', 'h1@gmail.com', '0181', 'road 21 savar', 'Dhaka', 'Businessman', '2121'),
(2, 'representative', 'hridoy2', 'h2', '22', 'h2@gmail.com', '0182', 'road 22 savar', 'Dhaka', 'Businessman', '2121'),
(3, 'representative', 'hridoy3', 'h3', '23', 'h3@gmail.com', '0183', 'road 23 savar', 'Dhaka', 'Businessman', '2121'),
(4, 'representative', 'mushi', 'r555', '765', 't5@gmail.com', '019', 'r 32', 'Dhaka', 'businessman', '2151');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addflat`
--
ALTER TABLE `addflat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addhouse`
--
ALTER TABLE `addhouse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addmember`
--
ALTER TABLE `addmember`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flatrent`
--
ALTER TABLE `flatrent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `h_owner`
--
ALTER TABLE `h_owner`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `h_representative`
--
ALTER TABLE `h_representative`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `email_2` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addflat`
--
ALTER TABLE `addflat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `addhouse`
--
ALTER TABLE `addhouse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `addmember`
--
ALTER TABLE `addmember`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `flatrent`
--
ALTER TABLE `flatrent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `h_owner`
--
ALTER TABLE `h_owner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `h_representative`
--
ALTER TABLE `h_representative`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
