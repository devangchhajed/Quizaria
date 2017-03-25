-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2017 at 03:59 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizaria`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `feedback` varchar(300) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(6) UNSIGNED NOT NULL,
  `message` varchar(300) DEFAULT NULL,
  `regdate` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `message`, `regdate`) VALUES
(1, 'Demo Notification', '2016-02-09 13:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `qna`
--

CREATE TABLE `qna` (
  `id` int(6) UNSIGNED NOT NULL,
  `ques` varchar(200) DEFAULT NULL,
  `ans1` varchar(50) DEFAULT NULL,
  `ans2` varchar(50) DEFAULT NULL,
  `ans3` varchar(50) DEFAULT NULL,
  `ans4` varchar(50) DEFAULT NULL,
  `rans` varchar(50) DEFAULT NULL,
  `points` int(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qna`
--

INSERT INTO `qna` (`id`, `ques`, `ans1`, `ans2`, `ans3`, `ans4`, `rans`, `points`) VALUES
(1, 'Two by Four equals ', '8', '1', '3', '6', '8', 30),
(2, 'Two by Two equals ', '4', '5', '3', '6', '4', 10),
(3, 'Two by Five equals ', '10', '3', '9', '6', '10', 40),
(4, 'Two by six equals ', '12', '15', '13', '16', '12', 50),
(5, 'Two by seven equals ', '14', '11', '9', '17', '14', 60),
(6, 'Two by eight equals ', '16', '12', '13', '19', '16', 70),
(7, 'Two by nine equals ', '18', '15', '13', '22', '18', 80),
(8, 'Three by Three equals ', '9', '15', '8', '6', '9', 90),
(9, 'Four by Three equals ', '12', '14', '17', '15', '12', 100),
(10, 'Two by Two equals ', '4', '5', '3', '6', '4', 10);

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `id` int(6) UNSIGNED NOT NULL,
  `email` varchar(50) NOT NULL,
  `quesid` varchar(50) DEFAULT NULL,
  `timetaken` int(20) DEFAULT NULL,
  `points` int(5) DEFAULT NULL,
  `reg_date` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `college` varchar(60) NOT NULL,
  `score` int(10) DEFAULT NULL,
  `ttime` int(20) DEFAULT NULL,
  `dimage` text,
  `reg_date` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `college`, `score`, `ttime`, `dimage`, `reg_date`) VALUES
(1, 'Devang', 'geekdevang@gmail.com', '9876543210', 'admin', 'BIT Jaipur', 0, 0, './images/dp/devang.jpg', NULL),
(2, 'Mrinal', 'geekdsdevang@gmail.com', '9876543210', 'admin', 'BIT Jaipur', 110, 0, './images/dp/devang.jpg', NULL),
(3, 'Saransh', 'asd', '9876543210', 'admin', 'BIT Jaipur', 100, 0, './images/dp/devang.jpg', NULL),
(4, 'PAlak', 'ds@gmail.com', '9876543210', 'admin', 'BIT Jaipur', 150, 0, './images/dp/devang.jpg', NULL),
(5, 'Charvi', 'dss@gmail.com', '9876543210', 'admin', 'BIT Jaipur', 100, 0, './images/dp/devang.jpg', NULL),
(6, 'Abhi', 'sd@gmail.com', '9876543210', 'admin', 'BIT Jaipur', 900, 0, './images/dp/devang.jpg', NULL),
(8, 'Ashu', 'sd34tr34@gmail.com', '9876543210', 'admin', 'BIT Jaipur', 100, 0, './images/dp/devang.jpg', NULL),
(9, 'Ujjwal', '34r43r43r@gmail.com', '9876543210', 'admin', 'BIT Jaipur', 455, 0, './images/dp/devang.jpg', NULL),
(10, 'Terra', '5445b5gg@gmail.com', '9876543210', 'admin', 'BIT Jaipur', 150, 0, './images/dp/devang.jpg', NULL),
(11, 'Sara', '5445bbvvvv@gmail.com', '9876543210', 'admin', 'BIT Jaipur', 300, 0, './images/dp/devang.jpg', NULL),
(12, 'Bella', '45@gmail.com', '9876543210', 'admin', 'BIT Jaipur', 100, 0, './images/dp/devang.jpg', NULL),
(13, 'SPAO', 'ohiuh@uibi.asd', '987654321', '98756', 'BIT', 190, NULL, NULL, NULL),
(14, 'Prakhar', 'ausdg@ihd.sd', '987654321', '548494956', 'BIT', 1000, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qna`
--
ALTER TABLE `qna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `qna`
--
ALTER TABLE `qna`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `score`
--
ALTER TABLE `score`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
