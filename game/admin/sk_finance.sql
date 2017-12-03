-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2017 at 01:05 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sk_finance`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_finance_details`
--

CREATE TABLE `add_finance_details` (
  `id` int(11) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `rate_range` varchar(255) NOT NULL,
  `processing_fee_range` varchar(255) NOT NULL,
  `lone_amount` varchar(255) NOT NULL,
  `tenure_range` varchar(255) NOT NULL,
  `fin_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_finance_details`
--

INSERT INTO `add_finance_details` (`id`, `bank_name`, `rate_range`, `processing_fee_range`, `lone_amount`, `tenure_range`, `fin_image`) VALUES
(6, 'TVS credit finance ', '9 To 11', '8000 To 12000', '80%', 'Four years', 'logo11483441957.png'),
(7, 'Cholamandalam investment and finance company ltd.', '10 To 13', '12000 To 15000', '85%', 'Four years', 'logo21483340037.png'),
(8, 'Mahindra Finance', '9 To 11', '8000 To 13000', '85%', 'Four years', '2016-12-24_1338451483442066.png'),
(9, 'TATA Finanace', '8 To 11', '9000 To 11000', '85%', 'Four years', 'ra1483441982.png'),
(10, 'Shriram Finanace', '11 To 15', '10000 To 13000', '80%', 'Four years', 'logo1483340227.png');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_mobile_no` varchar(255) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_city` varchar(255) NOT NULL,
  `user_profile_pic` varchar(255) NOT NULL,
  `user_gender` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `user_name`, `user_mobile_no`, `user_address`, `user_city`, `user_profile_pic`, `user_gender`, `user_email`, `user_password`) VALUES
(14, 's', '12234323434234', 's', 's', 'cloud1483186837.png', 'male', 'ashutoshwebexpert@gmail.com', 'dd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_finance_details`
--
ALTER TABLE `add_finance_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_finance_details`
--
ALTER TABLE `add_finance_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
