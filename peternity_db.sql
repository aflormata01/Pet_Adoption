-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1

-- Generation Time: Oct 21, 2017 at 11:28 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `discussion`
--

CREATE TABLE `discussion` (
  `discuss#` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `body` varchar(500) NOT NULL,
  `photo` blob,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP
) ;

--
-- Dumping data for table `discussion`
--

INSERT INTO `discussion` (`discuss#`, `username`, `Title`, `body`, `photo`, `date`, `category`) VALUES
(1, 'aflormata01', '\r\nRestricted food for dogs', 'Lorem Ipsum Dolor shimberlu eklaboo', NULL, '0000-00-00 00:00:00.000000', 'General'),
(2, 'franchescamarie', '\r\nAffordable Vet Clinics?', 'Lorem Ipsum Dolor shimberlu eklaboo', NULL, '0000-00-00 00:00:00.000000', 'General'),
(3, '', 'How to breed dogs', 'dsfasdfsdf', NULL, '0000-00-00 00:00:00.000000', 'General'),
(4, '', 'How to train cats', 'sdafsdfsdfsdf', NULL, '0000-00-00 00:00:00.000000', 'General'),
(5, '', 'asa', 'adasd', NULL, '0000-00-00 00:00:00.000000', 'General'),
(6, '', 'da', 'ad', NULL, '0000-00-00 00:00:00.000000', 'General'),
(7, '', 'n', 'jj\r\n', NULL, '0000-00-00 00:00:00.000000', 'General'),
(8, '', 'bn', 'gcghc', NULL, '0000-00-00 00:00:00.000000', 'General'),
(9, '', 'bb', 'hgj\r\n', NULL, '0000-00-00 00:00:00.000000', 'General'),
(10, '', 'fefefe', 'fefefef', NULL, '2017-10-21 03:08:35.299452', 'General'),
(11, 'aflormata', 'ererer', 'erererer', NULL, '2017-10-21 03:28:38.655063', 'General');

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
(8, '1', 'aflormata', ';\'', '2017-10-21 09:06:55.101408');

-- --------------------------------------------------------

--
-- Table structure for table `disc_rating`
--

CREATE TABLE `disc_rating` (
  `discuss#` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `rate` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news#` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `body` varchar(500) NOT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news#`, `title`, `body`, `photo`, `date`) VALUES
('1', 'Bugsy the new baby', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum', './assets/uploads/kisses.jpg', 'October 1,2016'),
('3', 'Puppy for me', 'If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden  ', './assets/uploads/chi.jpg', 'November 4,2017'),
('4', 'Chubs has tick :(', 'But spotting these tiny bloodsuckers in a dog\'s fur isn\'t always easy. Stay But spotting these tiny bloodsuckers in a dog\'s fur isn\'t always easy. Stay BuBut spotting these tiny bloodsuckers in a dog\'s fur isn\'t always easy. Stay Butt spotting these tiny bloodsuckers in a dog\'s fur isn\'t always easy. Stay alert—if you notice any of these 5 signs, your dog might have ticks. signs, your dog might have ticks. signs, your dog might have ticks.', './assets/uploads/chubs.jpg', 'October 21, 2017'),
('7', 'Candy got a new bestfriend', 'fasfdsf sdafa ffasfd sfsdaf affasfdsfs dafaffas fd.', './assets/uploads/candy.jpg', 'August 04, 2017');

-- --------------------------------------------------------

--
-- Table structure for table `owneraccount`
--

CREATE TABLE `owneraccount` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date_signedup` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP
) ;

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

('aflormata', 'flormata', 'allysa', './assets/uploads/146884780759eae47947dd7.png', 'aflormata2000@gmail.com', '2000-01-01', 'Male'),
('chessy', 'chesca', 'cortez', NULL, '', '', ''),
('chichi123', 'allysa', 'flormata', './assets/images/peternity.png', '', '', '');

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
  `availability` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petrescued`
--

INSERT INTO `petrescued` (`petID`, `pet_nickname`, `date_rescued`, `photo`, `availability`) VALUES
('1', 'PIOLO', '2017', './assets/uploads/piolo.jpg', 'Unadopted'),
('2', 'LILY', '2017', './assets/uploads/lily.jpg', 'Scheduled'),
('3', 'BOGGART', '2016', './assets/uploads/boggart.jpg', 'Adopted'),
('4', 'HAMMER', '2017', './assets/uploads/hammer.jpg', 'Scheduled'),
('5', 'SHOOKIRA', '2015', './assets/uploads/shookira.jpg', 'Adopted'),
('6', 'CHARLIE', '2017', './assets/uploads/charlie.jpg', 'Scheduled'),
('7', 'BERRY', '2017', './assets/uploads/berry.jpg', 'Scheduled'),
('8', 'KISSES', '2017', './assets/uploads/kisses.jpg', 'Scheduled'),
('9', 'ALVIN', '2017', './assets/uploads/alvin.jpg', 'Unadopted');

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE `stories` (
  `story#` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP
) ;

--
-- Dumping data for table `stories`
--

INSERT INTO `stories` (`story#`, `username`, `title`, `file_name`, `date`) VALUES
(14, 'aflormata', 'awaw', './assets/uploads/164429885759e945b039ef8.jpg', '0000-00-00 00:00:00.000000'),
(13, '', 'fghdf', './assets/uploads/2317159e5b72f2cb86.png', '0000-00-00 00:00:00.000000'),
(12, '', 'fghfgdhfdg', './assets/uploads/2681259e59a7bb23c9.jpg', '0000-00-00 00:00:00.000000'),
(1, 'dale09', 'Pet', '', '2017-03-02 16:00:00.000000'),
(15, 'aflormata', 'xmas', './assets/uploads/84343723759e9907416926.png', '0000-00-00 00:00:00.000000'),
(16, 'aflormata', '', './assets/uploads/185328301659ead76849e0c.jpg', '2017-10-21 05:13:12.444792');


-- --------------------------------------------------------

--
-- Table structure for table `stories_like`
--

CREATE TABLE `stories_like` (
  `story#` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stories_like`
--

INSERT INTO `stories_like` (`story#`, `username`) VALUES

('1', 'aflormata'),
('12', 'aflormata'),
('14', 'aflormata'),
('16', 'aflormata');


--
-- Indexes for dumped tables
--

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
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news#`);

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
  MODIFY `discuss#` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `disc_comments`
--
ALTER TABLE `disc_comments`
  MODIFY `comment#` bigint(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
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
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`

  MODIFY `story#` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;COMMIT;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
