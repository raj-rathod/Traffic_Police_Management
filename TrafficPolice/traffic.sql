-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2021 at 02:58 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `traffic`
--

-- --------------------------------------------------------

--
-- Table structure for table `p_info`
--

CREATE TABLE `p_info` (
  `p_id` int(11) NOT NULL,
  `uname` varchar(40) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `post` varchar(20) NOT NULL,
  `post_id` varchar(20) NOT NULL,
  `pno` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `psw` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_info`
--

INSERT INTO `p_info` (`p_id`, `uname`, `pname`, `post`, `post_id`, `pno`, `email`, `psw`) VALUES
(1, 'shubham', 'Shubahm Sindhu', 'DGP', '3669', '8003649945', 'shubham@gmail.com', 'shubham'),
(2, 'naya', 'nayana', 'si', '57876', '5584887', 'naya27@gmail.com', 'naya27');

-- --------------------------------------------------------

--
-- Table structure for table `u_info`
--

CREATE TABLE `u_info` (
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `adds` varchar(30) NOT NULL,
  `pno` varchar(30) NOT NULL,
  `aids` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `challandate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `u_info`
--

INSERT INTO `u_info` (`uid`, `pid`, `name`, `adds`, `pno`, `aids`, `email`, `challandate`) VALUES
(1, 1, 'Rajesh', 'dbit', '72772772', '1717177177', 'rajesh@gmail.com', '2019-11-21'),
(2, 1, 'hugfhh', 'fuiuiiu', '46789', '866878', 'shubhamsindhu2712@gmail.com', '2019-11-21'),
(3, 1, 'hjkgh', 'ghk', '567790', '56789', 'shubhamsindhu2712@gmail.com', '2019-11-21'),
(4, 2, 'mith', 'rmg', '5522', '2565', 'mith41@gmial.com', '2019-11-21');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_detail`
--

CREATE TABLE `vehicle_detail` (
  `vid` int(11) NOT NULL,
  `uid` int(10) NOT NULL,
  `vname` varchar(20) NOT NULL,
  `vhno` varchar(30) NOT NULL,
  `vtype` varchar(30) NOT NULL,
  `vmodel` varchar(30) NOT NULL,
  `pid` int(11) NOT NULL,
  `ccost` varchar(30) NOT NULL,
  `cdesc` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_detail`
--

INSERT INTO `vehicle_detail` (`vid`, `uid`, `vname`, `vhno`, `vtype`, `vmodel`, `pid`, `ccost`, `cdesc`) VALUES
(1, 1, 'Pulsar 150', 'ka 11 ks3712', '2', 'new', 1, '10000', '0'),
(2, 2, 'bJAJ', '6789', '2', 'naye', 1, '10000', '0'),
(3, 3, 'gfhjk', '56778', '2', 'ghjjk', 1, '5000', '0'),
(4, 4, 'bullet', '258', '2', 'bs4', 2, '20000', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `p_info`
--
ALTER TABLE `p_info`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `u_info`
--
ALTER TABLE `u_info`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `vehicle_detail`
--
ALTER TABLE `vehicle_detail`
  ADD PRIMARY KEY (`vid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `p_info`
--
ALTER TABLE `p_info`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `u_info`
--
ALTER TABLE `u_info`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vehicle_detail`
--
ALTER TABLE `vehicle_detail`
  MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
