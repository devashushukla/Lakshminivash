-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2017 at 08:24 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `game`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_image`
--

CREATE TABLE `add_image` (
  `id` int(11) NOT NULL,
  `img_ans` varchar(255) NOT NULL,
  `fin_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_image`
--

INSERT INTO `add_image` (`id`, `img_ans`, `fin_image`) VALUES
(2, 'a', 'photo1484306358.jpg'),
(3, 'Ashutosh', 'profile14797407511484551574.png'),
(4, 'dfg', 'logo1484563113.png');

-- --------------------------------------------------------

--
-- Table structure for table `antonyms`
--

CREATE TABLE `antonyms` (
  `id` int(11) NOT NULL,
  `word` varchar(255) NOT NULL,
  `antonyms` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `antonyms`
--

INSERT INTO `antonyms` (`id`, `word`, `antonyms`, `detail`) VALUES
(2, 'GOOD', 'BAD', 'Make a soft																		'),
(3, 'Yes', 'No', 'No smoking thank you for your cooperation		No smoking thank you for your cooperation		No smoking thank you for your cooperation		No smoking thank you for your cooperation		No smoking thank you for your cooperation		No smoking thank you for your cooperatio'),
(13, 'fdgdfg', 'sdfsdaf', 'safsdafsdafsdaf sfs sdf dfsad sdfsadfsadf sdf'),
(14, 'safsdfsd', 'dsfdfsgsdg', 'a sf sdf sfs sdf sfddf									'),
(15, ' dfgd dfg', ' safg gds g', ' dgdfgddfg									');

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
(14, 's', '12234323434234', 's', 's', 'cloud1483186837.png', 'male', 'makeasoft@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `synonyms`
--

CREATE TABLE `synonyms` (
  `id` int(11) NOT NULL,
  `word` varchar(255) NOT NULL,
  `synonyms` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `synonyms`
--

INSERT INTO `synonyms` (`id`, `word`, `synonyms`, `detail`) VALUES
(12, 'Clear', 'Delete', 'hello this is testing 															'),
(13, 'good', 'best', 'its the upper quality of good things 									');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_image`
--
ALTER TABLE `add_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `antonyms`
--
ALTER TABLE `antonyms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `synonyms`
--
ALTER TABLE `synonyms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_image`
--
ALTER TABLE `add_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `antonyms`
--
ALTER TABLE `antonyms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `synonyms`
--
ALTER TABLE `synonyms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
