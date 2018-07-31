-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2017 at 10:43 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adnetwork`
--

-- --------------------------------------------------------

--
-- Table structure for table `adtributes`
--

CREATE TABLE `adtributes` (
  `id` int(11) NOT NULL,
  `adid` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `points` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `adverts`
--

CREATE TABLE `adverts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `link` varchar(300) NOT NULL,
  `owner` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(200) NOT NULL,
  `androidimage` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adverts`
--

INSERT INTO `adverts` (`id`, `name`, `link`, `owner`, `type`, `description`, `image`, `androidimage`) VALUES
(1, 'Ladder', 'https://www.youtube.com/watch?v=8u9lwHJRnrc', 'krishnasis', 'app', 'Game, to while away your time, and have fun. Never ending fun and never ending stacking! Have fun with this game. Enjoy!', '', ''),
(2, 'Alfaload', 'http://www.alfaload.com', 'krishnasis', 'app', 'App to download anything you want!', 'adverts/ad_ladder.jpg', ''),
(3, 'Battery Low', 'https://www.google.com', 'Krish', 'shop', 'nice app best app ludum dare 39', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ad_conn`
--

CREATE TABLE `ad_conn` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `adid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ad_conn`
--

INSERT INTO `ad_conn` (`id`, `uid`, `adid`) VALUES
(1, 1, 2),
(2, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `ad_own`
--

CREATE TABLE `ad_own` (
  `id` int(11) NOT NULL,
  `adid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `eyeballs` int(11) NOT NULL,
  `clicks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ad_own`
--

INSERT INTO `ad_own` (`id`, `adid`, `uid`, `eyeballs`, `clicks`) VALUES
(1, 2, 1, 96, 17);

-- --------------------------------------------------------

--
-- Table structure for table `api`
--

CREATE TABLE `api` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `api` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `api`
--

INSERT INTO `api` (`id`, `uid`, `api`) VALUES
(1, 1, '1234');

-- --------------------------------------------------------

--
-- Table structure for table `apps`
--

CREATE TABLE `apps` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `appname` varchar(200) NOT NULL,
  `applink` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `processing_ad`
--

CREATE TABLE `processing_ad` (
  `id` int(11) NOT NULL,
  `adid` int(11) NOT NULL,
  `referrer` varchar(50) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `time_origin` varchar(50) NOT NULL,
  `browser` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `processing_ad`
--

INSERT INTO `processing_ad` (`id`, `adid`, `referrer`, `ip`, `time_origin`, `browser`, `location`) VALUES
(315, 2, 'http://localhost/adnetwork/app/hello.html', '::1', '1503821172', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.86 Safari/537.36', 'Kolkata');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `organisation` varchar(100) NOT NULL,
  `typeofaccount` varchar(50) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `api` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `password`, `organisation`, `typeofaccount`, `contact`, `email`, `api`) VALUES
(1, 'Krishnasis', 'Mandal', 'krishnasis', '5d41402abc4b2a76b9719d911017c592', 'Alfaload', 'shop', '9062686457', 'krishnasis@hotmail.com', '9221d3b4854096a20fad07f6cb4285e9'),
(2, 'Krishnasis', 'Mandal', 'krishnasism', '5d41402abc4b2a76b9719d911017c592', 'KRS Appstore', 'app', '12345', 'krishnasis@hotmail.com', ''),
(3, 'Krishnasis', 'Mandal', 'krishnasis1', '5d41402abc4b2a76b9719d911017c592', 'krs', 'app', '90', 'krishnasis@hotmail.com', '9221d3b4854096a20fad07f6cb4285e9'),
(4, 'KM', 'Man', 'krishnasism123', '5d41402abc4b2a76b9719d911017c592', 'KRS Appstoree', 'app', '123', 'helloworld@gmail.com', '24f83fe0bf066dfc90c7084db9860a28'),
(5, 'Krishnasis', 'Mandal', 'krishnasism1234', '5d41402abc4b2a76b9719d911017c592', 'helllo', 'app', '123', 'krishnasis@hotmail.com', '8cb5c223c1dec2f038bc5271acb1dc77'),
(6, 'Krishnasis', 'Mandal', 'krishnasis12345', '203ad5ffa1d7c650ad681fdff3965cd2', 'he', 'app', '123', 'krishnasis12345@hotmail.com', '7af85d347044bbd01708db8aedba002c'),
(10, 'Krishnasis', 'Mandal', 'hello', '5d41402abc4b2a76b9719d911017c592', 'hello', 'app', '23', 'krishnasis@hma.c', '5d41402abc4b2a76b9719d911017c592'),
(11, 'Krishnasis ', 'Mandal', 'krishnasismandal', '5d41402abc4b2a76b9719d911017c592', 'hello', 'app', '123', 'krishnasis@hotmail.com', '56d457ca71f3af226f4ee70ca5c5bb1d'),
(16, 'Krishnasis', 'Mandal', 'krishnasismandal12399', '5d41402abc4b2a76b9719d911017c592', 'KRS', 'app', '1235', 'krishnasis@hotmail.com', 'f75f0f995a892b810fe13911df0ae96c'),
(17, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 'app', '1235', '', 'd41d8cd98f00b204e9800998ecf8427e');

-- --------------------------------------------------------

--
-- Table structure for table `websites`
--

CREATE TABLE `websites` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `themename` varchar(20) NOT NULL,
  `uri` varchar(100) NOT NULL,
  `adid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `websites`
--

INSERT INTO `websites` (`id`, `uid`, `themename`, `uri`, `adid`) VALUES
(1, 1, 'sublime', 'kolkata', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adtributes`
--
ALTER TABLE `adtributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adverts`
--
ALTER TABLE `adverts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad_conn`
--
ALTER TABLE `ad_conn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad_own`
--
ALTER TABLE `ad_own`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `api`
--
ALTER TABLE `api`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apps`
--
ALTER TABLE `apps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `processing_ad`
--
ALTER TABLE `processing_ad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `websites`
--
ALTER TABLE `websites`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adtributes`
--
ALTER TABLE `adtributes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `adverts`
--
ALTER TABLE `adverts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ad_conn`
--
ALTER TABLE `ad_conn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ad_own`
--
ALTER TABLE `ad_own`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `api`
--
ALTER TABLE `api`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `apps`
--
ALTER TABLE `apps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `processing_ad`
--
ALTER TABLE `processing_ad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=316;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `websites`
--
ALTER TABLE `websites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
