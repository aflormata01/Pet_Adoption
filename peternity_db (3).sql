-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2017 at 02:18 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peternity_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(32) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `discussion`
--

CREATE TABLE `discussion` (
  `discuss#` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `body` varchar(500) NOT NULL,
  `photo` blob,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `category` varchar(30) NOT NULL DEFAULT 'General',
  `totalrate` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discussion`
--

INSERT INTO `discussion` (`discuss#`, `username`, `Title`, `body`, `photo`, `date`, `category`, `totalrate`) VALUES
(1, 'aflormata01', '\r\nRestricted food for dogs', 'Lorem Ipsum Dolor shimberlu eklaboo', NULL, '0000-00-00 00:00:00.000000', 'General', 0),
(2, 'franchescamarie', '\r\nAffordable Vet Clinics?', 'Lorem Ipsum Dolor shimberlu eklaboo', NULL, '0000-00-00 00:00:00.000000', 'General', 0),
(3, '', 'How to breed dogs', 'dsfasdfsdf', NULL, '0000-00-00 00:00:00.000000', 'General', 0);

-- --------------------------------------------------------

--
-- Table structure for table `disc_comments`
--

CREATE TABLE `disc_comments` (
  `comment#` bigint(15) NOT NULL,
  `discuss#` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disc_comments`
--

INSERT INTO `disc_comments` (`comment#`, `discuss#`, `username`, `comment`, `date`) VALUES
(1, '1', 'aflormata01', '2312312312312312', '0000-00-00 00:00:00.000000'),
(2, '1', 'aflormata', 'dsadsadsa', '2017-10-21 09:02:01.468062'),
(3, '1', 'aflormata', 'patrick', '2017-10-21 09:02:40.957211'),
(4, '1', 'aflormata', '', '2017-10-21 09:02:41.562456'),
(5, '1', 'aflormata', 'asdsadsa', '2017-10-21 09:04:05.205961'),
(6, '1', 'aflormata', 'awwww', '2017-10-21 09:05:35.378547'),
(7, '1', 'aflormata', 'ayoko na hehe', '2017-10-21 09:06:02.973724'),
(8, '1', 'aflormata', ';\'', '2017-10-21 09:06:55.101408'),
(9, '10', 'aflormata', 'hala', '2017-10-22 01:36:04.989151'),
(10, '10', 'aflormata', 'aw :3', '2017-10-22 02:35:48.311186');

-- --------------------------------------------------------

--
-- Table structure for table `disc_rating`
--

CREATE TABLE `disc_rating` (
  `discuss#` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `rate` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disc_rating`
--

INSERT INTO `disc_rating` (`discuss#`, `username`, `rate`) VALUES
(2, 'aflormata', '2'),
(3, 'aflormata', '2'),
(10, 'aflormata', '1');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_no` int(200) NOT NULL,
  `title` varchar(50) NOT NULL,
  `body` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_no`, `title`, `body`) VALUES
(1, 'Peternity Anniversary', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(2, 'Pets Fashion Show', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\r\n		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `faqs_no` int(200) NOT NULL,
  `body` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`faqs_no`, `body`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg#` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `message` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news#` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `body` varchar(500) NOT NULL,
  `photo` varchar(110) DEFAULT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news#`, `title`, `body`, `photo`, `date`) VALUES
('1', 'Bugsy the new baby', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum', NULL, 'October 1,2016'),
('2', 'Hamster, Forever', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', NULL, 'September 8,2017'),
('3', 'Puppy for me', 'If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.', NULL, 'November 4,2017');

-- --------------------------------------------------------

--
-- Table structure for table `owneraccount`
--

CREATE TABLE `owneraccount` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date_signedup` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owneraccount`
--

INSERT INTO `owneraccount` (`username`, `password`, `date_signedup`) VALUES
('aflormata', '1234', '2017-07-07 16:00:00.000000'),
('aflormatas', '123', '0000-00-00 00:00:00.000000'),
('allysa321', '123', '2017-10-21 01:59:04.460332'),
('allysa110', '1234', '2017-10-21 01:38:08.021109'),
('audrey', '1234', '2017-10-21 01:29:44.299758'),
('aflormata01', 'allysa110', '2017-10-21 00:58:05.582269'),
('chinichilemon', '123123', '2017-10-21 02:16:42.007201'),
('chichi123', 'allysa123', '2017-10-21 02:18:21.669452');

-- --------------------------------------------------------

--
-- Table structure for table `ownerinfo`
--

CREATE TABLE `ownerinfo` (
  `username` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `photo` varchar(60) DEFAULT './assets/images/peternity.png',
  `email` varchar(50) NOT NULL,
  `birthdate` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ownerinfo`
--

INSERT INTO `ownerinfo` (`username`, `fname`, `lname`, `photo`, `email`, `birthdate`, `sex`) VALUES
('aflormata', 'flormata', 'chichi', './assets/uploads/25521208759ed109f85062.jpg', 'aflormata2000@gmail.com', '2000-01-01', 'Male'),
('chessy', 'chesca', 'cortez', NULL, '', '', ''),
('chichi123', 'allysa', 'flormata', './assets/images/peternity.png', '', '', ''),
('aflormata01', 'flormata', 'allysa', '', 'aflormata2000@gmail.com', '2000-01-01', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `petadoption`
--

CREATE TABLE `petadoption` (
  `petID` int(100) NOT NULL,
  `date_adopted` date DEFAULT NULL,
  `username` varchar(20) NOT NULL,
  `contactno` bigint(10) DEFAULT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petadoption`
--

INSERT INTO `petadoption` (`petID`, `date_adopted`, `username`, `contactno`, `address`) VALUES
(0, NULL, 'Chesca', 63977777, 'Pandacan, Manila'),
(7, NULL, 'aflormata', 9196117748, 'allysa'),
(0, NULL, 'Chesca', 63977777, 'Pandacan, Manila'),
(7, NULL, 'aflormata', 9196117748, 'allysa');

-- --------------------------------------------------------

--
-- Table structure for table `petrescued`
--

CREATE TABLE `petrescued` (
  `petID` varchar(50) NOT NULL,
  `pet_nickname` varchar(50) NOT NULL,
  `date_rescued` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `availability` varchar(50) NOT NULL,
  `bio` varchar(10000) NOT NULL DEFAULT 'I am a cute pet! Please adopt me! :('
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petrescued`
--

INSERT INTO `petrescued` (`petID`, `pet_nickname`, `date_rescued`, `photo`, `availability`, `bio`) VALUES
('1', 'PIOLO', '2017', './assets/uploads/piolo.jpg', 'Unadopted', 'I am a cute pet! Please adopt me! :('),
('2', 'LILY', '2017', './assets/uploads/lily.jpg', 'Scheduled', 'I am a cute pet! Please adopt me! :('),
('3', 'BOGGART', '2016', './assets/uploads/boggart.jpg', 'Adopted', 'I am a cute pet! Please adopt me! :('),
('4', 'HAMMER', '2017', './assets/uploads/hammer.jpg', 'Scheduled', 'I am a cute pet! Please adopt me! :('),
('5', 'SHOOKIRA', '2015', './assets/uploads/shookira.jpg', 'Adopted', 'I am a cute pet! Please adopt me! :('),
('6', 'CHARLIE', '2017', './assets/uploads/charlie.jpg', 'Scheduled', 'I am a cute pet! Please adopt me! :('),
('7', 'BERRY', '2017', './assets/uploads/berry.jpg', 'Scheduled', 'I am a cute pet! Please adopt me! :('),
('8', 'KISSES', '2017', './assets/uploads/kisses.jpg', 'Scheduled', 'I am a cute pet! Please adopt me! :('),
('9', 'ALVIN', '2017', './assets/uploads/alvin.jpg', 'Unadopted', 'I am a cute pet! Please adopt me! :(');

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE `stories` (
  `story#` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `likes` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stories`
--

INSERT INTO `stories` (`story#`, `username`, `title`, `file_name`, `date`, `likes`) VALUES
(17, 'aflormata', 'wow', './assets/uploads/210887093859ed22f752a02.png', '2017-10-22 23:00:07.371203', 0),
(18, 'aflormata', 'w00000w', './assets/uploads/76988489959ed231e017a8.jpg', '2017-10-22 23:00:46.016686', 0);

-- --------------------------------------------------------

--
-- Table structure for table `stories_like`
--

CREATE TABLE `stories_like` (
  `story#` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `discussion`
--
ALTER TABLE `discussion`
  ADD PRIMARY KEY (`discuss#`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `disc_comments`
--
ALTER TABLE `disc_comments`
  ADD PRIMARY KEY (`comment#`),
  ADD KEY `username` (`username`),
  ADD KEY `discuss#` (`discuss#`);

--
-- Indexes for table `disc_rating`
--
ALTER TABLE `disc_rating`
  ADD PRIMARY KEY (`discuss#`,`username`),
  ADD KEY `discuss#` (`discuss#`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_no`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`faqs_no`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg#`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news#`);

--
-- Indexes for table `owneraccount`
--
ALTER TABLE `owneraccount`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `ownerinfo`
--
ALTER TABLE `ownerinfo`
  ADD PRIMARY KEY (`username`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `petadoption`
--
ALTER TABLE `petadoption`
  ADD KEY `adoptionID` (`petID`,`username`);

--
-- Indexes for table `petrescued`
--
ALTER TABLE `petrescued`
  ADD PRIMARY KEY (`petID`);

--
-- Indexes for table `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`story#`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `stories_like`
--
ALTER TABLE `stories_like`
  ADD PRIMARY KEY (`story#`,`username`),
  ADD KEY `story#` (`story#`,`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `discussion`
--
ALTER TABLE `discussion`
  MODIFY `discuss#` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `disc_comments`
--
ALTER TABLE `disc_comments`
  MODIFY `comment#` bigint(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_no` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `faqs_no` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg#` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `story#` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
