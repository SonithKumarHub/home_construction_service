-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2022 at 01:20 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `home_construction`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(100) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `password`, `email`) VALUES
(1, 'Pradi@1234', 'pradeep@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `c_id` int(10) NOT NULL,
  `c_name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `image` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`c_id`, `c_name`, `email`, `address`, `phone`, `image`, `password`, `status`) VALUES
(21, 'Pradeep', 'pradeep@gmail.com', 'Mada', 6234564783, '1.jpg', 'Pradi@1234', 1);

-- --------------------------------------------------------

--
-- Table structure for table `labour`
--

CREATE TABLE `labour` (
  `l_id` int(10) NOT NULL,
  `l_name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `image` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `cost` int(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `labour`
--

INSERT INTO `labour` (`l_id`, `l_name`, `email`, `address`, `phone`, `image`, `password`, `designation`, `cost`, `status`) VALUES
(38, 'yajnesh', 'yajnesh@gmail.com', 'kanila', 9856748947, '2.jpg', 'Yajju@1234', 'pop', 15000, 3),
(39, 'dinesh', 'dinesh@gmail.com', 'mangalore', 8886748947, '2.jpg', 'dinnu@1234', 'pop', 16000, 3);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `p_id` int(11) NOT NULL,
  `p_date` date NOT NULL,
  `amount` int(65) NOT NULL,
  `p_method` varchar(50) NOT NULL,
  `c_id` int(50) NOT NULL,
  `rid` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`p_id`, `p_date`, `amount`, `p_method`, `c_id`, `rid`) VALUES
(7, '2022-08-25', 90000, 'UPI', 21, 37),
(8, '2022-08-25', 135000, 'UPI', 21, 38);

-- --------------------------------------------------------

--
-- Table structure for table `quotation`
--

CREATE TABLE `quotation` (
  `q_id` int(11) NOT NULL,
  `quotation` varchar(100) NOT NULL,
  `l_id` int(15) NOT NULL,
  `c_id` int(15) NOT NULL,
  `date` date NOT NULL,
  `r_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `r_id` int(11) NOT NULL,
  `request` varchar(100) NOT NULL,
  `l_id` int(15) NOT NULL,
  `c_id` int(15) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `address` varchar(100) NOT NULL,
  `days` int(50) NOT NULL,
  `c_name` varchar(20) NOT NULL,
  `phone` bigint(12) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`r_id`, `request`, `l_id`, `c_id`, `date`, `time`, `address`, `days`, `c_name`, `phone`, `status`) VALUES
(38, 'uhshd hgduih jgeh', 38, 21, '2022-08-30', '14:23:00.000000', 'ewfawe', 9, 'khushi', 9847427232, 0);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `r_id` int(11) NOT NULL,
  `c_id` int(15) NOT NULL,
  `review` varchar(100) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`r_id`, `c_id`, `review`, `c_name`, `email`) VALUES
(1, 3, 'hdgik\r\n', '', 'pradeep@gmail.com'),
(2, 3, 'hdgik\r\n', 'days', 'pradeep@gmail.com'),
(3, 3, 'hdgik\r\n', 'days', 'pradeep@gmail.com'),
(4, 3, 'hdgik\r\n', 'days', 'pradeep@gmail.com'),
(5, 7, 'good working', 'Pradeep', 'pradeep@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tolpay`
--

CREATE TABLE `tolpay` (
  `pay_id` int(20) NOT NULL,
  `r_id` varchar(50) NOT NULL,
  `amount` int(20) NOT NULL,
  `l_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tolpay`
--

INSERT INTO `tolpay` (`pay_id`, `r_id`, `amount`, `l_id`) VALUES
(4, '28', 45000, 17),
(5, '29', 80000, 19),
(6, '36', 60000, 25),
(7, '36', 60000, 25);

-- --------------------------------------------------------

--
-- Table structure for table `work_field`
--

CREATE TABLE `work_field` (
  `w_id` int(11) NOT NULL,
  `works_field` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `work_field`
--

INSERT INTO `work_field` (`w_id`, `works_field`) VALUES
(1, 'painters'),
(2, 'plumbers');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `labour`
--
ALTER TABLE `labour`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `quotation`
--
ALTER TABLE `quotation`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `tolpay`
--
ALTER TABLE `tolpay`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `work_field`
--
ALTER TABLE `work_field`
  ADD PRIMARY KEY (`w_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `labour`
--
ALTER TABLE `labour`
  MODIFY `l_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `quotation`
--
ALTER TABLE `quotation`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tolpay`
--
ALTER TABLE `tolpay`
  MODIFY `pay_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `work_field`
--
ALTER TABLE `work_field`
  MODIFY `w_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
