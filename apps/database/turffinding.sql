-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2024 at 04:43 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `turffinding`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `cusrid` int(11) NOT NULL,
  `Log_id` varchar(200) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `sex` varchar(30) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `addr` text DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `cntno` varchar(100) DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`cusrid`, `Log_id`, `name`, `sex`, `age`, `location`, `addr`, `email`, `cntno`, `photo`, `date`) VALUES
(2, 'TRF763233536065', 'RAS', 'Male', 25, 'palakkad', 'palakakd', 'ras@gmail.com', '9847169014', 'a.jpg', '2022-03-16');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cusrid` int(11) NOT NULL,
  `Log_id` varchar(200) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `sex` varchar(30) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `addr` text DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `cntno` varchar(100) DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cusrid`, `Log_id`, `name`, `sex`, `age`, `location`, `addr`, `email`, `cntno`, `photo`, `date`) VALUES
(2, 'TRF18820581', 'RAS', 'Male', 25, 'palakkad', 'palakakd', 'ras@gmail.com', '9847169014', 'Tulips.jpg', '2022-03-16'),
(3, 'TRF394609667', 'u1', NULL, NULL, NULL, NULL, 'u1@gmail', '1234567890', NULL, '2023-09-28');

-- --------------------------------------------------------

--
-- Table structure for table `fcart`
--

CREATE TABLE `fcart` (
  `cart_id` int(11) NOT NULL,
  `CLog_Id` varchar(200) NOT NULL,
  `SLog_Id` varchar(200) NOT NULL,
  `cname` varchar(200) NOT NULL,
  `caddr` text NOT NULL,
  `ccntno` varchar(200) NOT NULL,
  `scntno` varchar(200) NOT NULL,
  `saddr` varchar(200) NOT NULL,
  `photo` text NOT NULL,
  `name` varchar(200) NOT NULL,
  `qty` varchar(200) NOT NULL,
  `tot` double NOT NULL,
  `dat` double NOT NULL,
  `desp` text NOT NULL,
  `stats` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `fcart`
--

INSERT INTO `fcart` (`cart_id`, `CLog_Id`, `SLog_Id`, `cname`, `caddr`, `ccntno`, `scntno`, `saddr`, `photo`, `name`, `qty`, `tot`, `dat`, `desp`, `stats`) VALUES
(1, 'TRF18820581', 'TRF768776089', 'RAS', 'palakakd', '9847169014', '984716955', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Tulips.png', 'RIC', '5', 12500, 16, 'sss', 'Accept'),
(2, 'TRF18820581', 'TRF768776089', 'RAS', 'palakakd', '9847169014', '984716955', 'PALAKKA', 'Tulips.png', 'RIC', '5', 12500, 16, 'sss', 'Cancel');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fdbk_id` int(11) NOT NULL,
  `Log_Id` text NOT NULL,
  `fname` varchar(200) NOT NULL,
  `contactno` varchar(200) NOT NULL,
  `subj` varchar(200) NOT NULL,
  `despc` text NOT NULL,
  `stat` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `reply` text NOT NULL,
  `rdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fdbk_id`, `Log_Id`, `fname`, `contactno`, `subj`, `despc`, `stat`, `date`, `reply`, `rdate`) VALUES
(1, 'TRF763233536', 'NICE', '9847169014', 'hi', 'sss', 'Accept', '2022-03-16', 'eryery', '2022-03-16'),
(2, 'TRF763233536', 'NICE', '9847169014', 'hi', 'sss', 'Pending', '2022-03-16', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notid` int(11) NOT NULL,
  `notifid` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `contno` varchar(200) NOT NULL,
  `subj` text NOT NULL,
  `descprt` text NOT NULL,
  `sdate` date NOT NULL,
  `ddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notid`, `notifid`, `name`, `contno`, `subj`, `descprt`, `sdate`, `ddate`) VALUES
(3, 'NOT1102609048', 'shameer', '9847169014', 'hi', 'nice', '2022-12-31', '2022-12-31'),
(4, 'NOT1102609048', 'shameer', '9847169014', 'hi', 'nice', '2022-12-31', '2022-12-31'),
(5, 'NOT1102609048', 'shameer', '9847169014', 'hi', 'nice', '2022-12-31', '2022-12-31'),
(6, 'NOT1102609048', 'shameer', '9847169014', 'hi', 'nice', '2022-12-31', '2022-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `trcart`
--

CREATE TABLE `trcart` (
  `cart_id` int(11) NOT NULL,
  `CLog_Id` varchar(200) NOT NULL,
  `SLog_Id` varchar(200) NOT NULL,
  `cname` varchar(200) NOT NULL,
  `caddr` text NOT NULL,
  `ccntno` varchar(200) NOT NULL,
  `scntno` varchar(200) NOT NULL,
  `saddr` varchar(200) NOT NULL,
  `photo` text NOT NULL,
  `name` varchar(200) NOT NULL,
  `qty` varchar(200) NOT NULL,
  `tot` double NOT NULL,
  `dat` date NOT NULL,
  `desp` text NOT NULL,
  `stats` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `trcart`
--

INSERT INTO `trcart` (`cart_id`, `CLog_Id`, `SLog_Id`, `cname`, `caddr`, `ccntno`, `scntno`, `saddr`, `photo`, `name`, `qty`, `tot`, `dat`, `desp`, `stats`) VALUES
(1, 'TRF18820581', 'TRF763233536', 'RAS', 'palakakd', '9847169014', '9847169254', 'PALAKKAD', 'Penguins.jpg', 'NICE', '5', 1250, '2022-03-16', 'hi', 'Accept'),
(2, 'TRF18820581', 'TRF763233536', 'RAS', 'palakakd', '9847169014', '9847169254', 'PALAKKAD', 'Penguins.jpg', 'NICE', '5', 1250, '2022-03-16', 'hi', 'Cancel'),
(3, 'TRF394609667', 'TRF622453474', 'u1', '', '1234567890', '9874563210', 't1 add', '3.jpg', 't1', '10', 100000, '0000-00-00', 'hiii', 'Accept');

-- --------------------------------------------------------

--
-- Table structure for table `turf`
--

CREATE TABLE `turf` (
  `turfid` int(11) NOT NULL,
  `Log_id` varchar(200) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `addr` text DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `cntno` varchar(100) DEFAULT NULL,
  `expr` text DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `turf`
--

INSERT INTO `turf` (`turfid`, `Log_id`, `name`, `location`, `addr`, `email`, `cntno`, `expr`, `photo`, `date`) VALUES
(3, 'TRF763233536', 'NICE', 'PALAKKAD', 'PALAKKAD', 'nice@gmail.com', '9847169014', 'n@gmail.com', 'Tulips.jpg', '2022-03-16'),
(4, 'TRF622453474', 't1', '', '', 't1@gmail', '789456123', '', '4.png', '2023-09-28');

-- --------------------------------------------------------

--
-- Table structure for table `turf_register`
--

CREATE TABLE `turf_register` (
  `turfrid` int(11) NOT NULL,
  `Log_Id` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `licenno` text NOT NULL,
  `cntno` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `addr` varchar(200) NOT NULL,
  `capcty` text NOT NULL,
  `amnt` varchar(200) NOT NULL,
  `edate` date NOT NULL,
  `photo` text NOT NULL,
  `desp` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `turf_register`
--

INSERT INTO `turf_register` (`turfrid`, `Log_Id`, `name`, `licenno`, `cntno`, `location`, `addr`, `capcty`, `amnt`, `edate`, `photo`, `desp`) VALUES
(5, 'TRF763233536', 'NICE', '79879464', '9847169254', 'PALAKKAD', 'PALAKKAD', '250', '250', '2022-12-31', 'Penguins.jpg', 'SSS'),
(6, 'TRF763233536', 'NICE', '79879464', '9847169254', 'PALAKKAD', 'PALAKKAD', '250', '250', '2022-12-31', 'a.jpg', 'SSS'),
(7, 'TRF763233536', 'NICE', '79879464', '9847169254', 'PALAKKAD', 'PALAKKAD', '250', '250', '2022-12-31', 'Penguins.jpg', 'SSS'),
(8, 'TRF622453474', 't1', '1', '9874563210', 't1 loc', 't1 add', '10', '10000', '2023-09-28', '3.jpg', 't1 dec');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `usrid` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `Log_Id` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `utype` varchar(200) NOT NULL,
  `cntno` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`usrid`, `name`, `Log_Id`, `email`, `password`, `utype`, `cntno`) VALUES
(10, 'Administrator', 'TRF763233536065', 'admin@gmail.com', '123', 'Administrator', '9847169014'),
(14, 'RAS', 'TRF18820581', 'ras@gmail.com', '123', 'User', '9847169014'),
(15, 'NICE', 'TRF763233536', 'nice@gmail.com', '123', 'Turf', '9847169014'),
(16, 't1', 'TRF622453474', 't1@gmail', 't1', 'Turf', '789456123'),
(17, 'u1', 'TRF394609667', 'u1@gmail', 'u1', 'User', '1234567890');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`cusrid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cusrid`);

--
-- Indexes for table `fcart`
--
ALTER TABLE `fcart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fdbk_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notid`);

--
-- Indexes for table `trcart`
--
ALTER TABLE `trcart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `turf`
--
ALTER TABLE `turf`
  ADD PRIMARY KEY (`turfid`);

--
-- Indexes for table `turf_register`
--
ALTER TABLE `turf_register`
  ADD PRIMARY KEY (`turfrid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`usrid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `cusrid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cusrid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fcart`
--
ALTER TABLE `fcart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fdbk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `trcart`
--
ALTER TABLE `trcart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `turf`
--
ALTER TABLE `turf`
  MODIFY `turfid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `turf_register`
--
ALTER TABLE `turf_register`
  MODIFY `turfrid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `usrid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
