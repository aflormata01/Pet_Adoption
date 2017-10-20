-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2017 at 08:54 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

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
  `date` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discussion`
--

INSERT INTO `discussion` (`discuss#`, `username`, `Title`, `body`, `photo`, `date`, `time`) VALUES
(1, 'aflormata01', '\r\nRestricted food for dogs', 'Lorem Ipsum Dolor shimberlu eklaboo', NULL, '07/23/2017', '4:03pm'),
(2, 'franchescamarie', '\r\nAffordable Vet Clinics?', 'Lorem Ipsum Dolor shimberlu eklaboo', NULL, '08/12/2017', '10:45pm'),
(3, '', 'How to breed dogs', 'dsfasdfsdf', NULL, '', ''),
(4, '', 'How to train cats', 'sdafsdfsdfsdf', NULL, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `disc_comments`
--

CREATE TABLE `disc_comments` (
  `discuss#` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news#` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `body` varchar(500) NOT NULL,
  `photo` blob,
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
-- Table structure for table `ownedpets`
--

CREATE TABLE `ownedpets` (
  `username` varchar(50) NOT NULL,
  `petID` varchar(50) NOT NULL,
  `petname` varchar(50) NOT NULL,
  `photo` blob,
  `bdate` varchar(50) NOT NULL,
  `breed` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `owneraccount`
--

CREATE TABLE `owneraccount` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date_signedup` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owneraccount`
--

INSERT INTO `owneraccount` (`username`, `password`, `date_signedup`) VALUES
('petlover01', '12345', '2017-23-09'),
('petpet', '12345', '2017-01-09'),
('andapet', '12345', '2017-22-15'),
('xandrabeli', '12345', '2017-15-10'),
('wanda', '12345', '2017-11-01'),
('catty', '12345', '2017-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `ownerinfo`
--

CREATE TABLE `ownerinfo` (
  `username` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `photo` blob,
  `email` varchar(50) NOT NULL,
  `birthdate` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ownerinfo`
--

INSERT INTO `ownerinfo` (`username`, `fname`, `lname`, `photo`, `email`, `birthdate`, `sex`) VALUES
('aflormata', 'Allysa', 'Flormata', NULL, '@aflormata01', '2000-01-01', 'Female'),
('alexiamndz', 'Alexia', 'Armando', NULL, '@alexiamndz', '1999-04-04', 'Female'),
('pelover01', 'Bello', 'Dusdos', NULL, '@petloverbello', '1999-10-01', 'F'),
('pepet', 'Robs', 'Alcantara', NULL, '@Alcanrob', '1998-24-01', 'M'),
('xandrabeli', 'Andally', 'Cruz', NULL, '@llycruz', '1995-12-12', 'F');

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
(0, NULL, 'Chesca', 63977777, 'Pandacan, Manila');

-- --------------------------------------------------------

--
-- Table structure for table `petrescued`
--

CREATE TABLE `petrescued` (
  `petID` varchar(50) NOT NULL,
  `pet_nickname` varchar(50) NOT NULL,
  `date_rescued` varchar(50) NOT NULL,
  `photo` blob NOT NULL,
  `availability` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petrescued`
--

INSERT INTO `petrescued` (`petID`, `pet_nickname`, `date_rescued`, `photo`, `availability`) VALUES
('1', 'PIOLO', '2017', '', 'Unadopted'),
('2', 'LILY', '2017', '', 'Scheduled'),
('3', 'BOGGART', '2016', '', 'Adopted'),
('4', 'HAMMER', '2017', '', 'Scheduled'),
('5', 'SHOOKIRA', '2015', '', 'Adopted'),
('6', 'CHARLIE', '2017', '', 'Scheduled'),
('7', 'BERRY', '2017', '', 'Unadopted'),
('8', 'KISSES', '2017', '', 'Scheduled'),
('9', 'ALVIN', '2017', '', 'Unadopted');

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE `stories` (
  `story#` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `caption` varchar(150) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stories`
--

INSERT INTO `stories` (`story#`, `username`, `title`, `caption`, `date`, `time`) VALUES
('1', 'aflormata', 'Rescued Pup: Wilson', '', '08/01/2017', '1:43pm'),
('2', 'andapet', 'My First adopted Pet', '', '2017-10-10', '3:00 pm'),
('3', 'petpet', 'Catty\'s favorite food', 'She really love it!', '2017-08-05', '8:00 am'),
('4', 'xandrabeli', 'Best products for pets', 'you would not wait to have these..', '2017-30-01', '12:00 pm'),
('5', 'andapet', 'How does it feel to have your own pet?', '', '2017-03-09', '11:30 am');

-- --------------------------------------------------------

--
-- Table structure for table `stories_like`
--

CREATE TABLE `stories_like` (
  `story#` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

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
  ADD KEY `username` (`username`),
  ADD KEY `discuss#` (`discuss#`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news#`);

--
-- Indexes for table `ownedpets`
--
ALTER TABLE `ownedpets`
  ADD KEY `username` (`username`);

--
-- Indexes for table `owneraccount`
--
ALTER TABLE `owneraccount`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `ownerinfo`
--
ALTER TABLE `ownerinfo`
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
  ADD KEY `story#` (`story#`,`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `discussion`
--
ALTER TABLE `discussion`
  MODIFY `discuss#` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
