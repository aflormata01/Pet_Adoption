-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2017 at 04:27 AM
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
-- Table structure for table `discussion`
--

CREATE TABLE `discussion` (
  `discuss#` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `body` varchar(500) NOT NULL,
  `photo` blob,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `category` varchar(30) NOT NULL DEFAULT 'General'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
(9, '', 'bb', 'hgj\r\n', NULL, '0000-00-00 00:00:00.000000', 'General');

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
('aflormata', 'flormata', 'allysa', NULL, 'aflormata2000@gmail.com', '01-01-2000', 'F'),
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
  `body` blob NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stories`
--

INSERT INTO `stories` (`story#`, `username`, `title`, `body`, `file_name`, `date`) VALUES
(14, 'aflormata', 'awaw', '', './assets/uploads/164429885759e945b039ef8.jpg', '0000-00-00 00:00:00.000000'),
(13, '', 'fghdf', 0x73646673646673616466, './assets/uploads/2317159e5b72f2cb86.png', '0000-00-00 00:00:00.000000'),
(12, '', 'fghfgdhfdg', 0x68666764686664676866676468, './assets/uploads/2681259e59a7bb23c9.jpg', '0000-00-00 00:00:00.000000'),
(1, 'dale09', 'Pet', 0x312e2044697361626c6520496e7465726e657420636f6e6e656374696f6e2e0d0a0d0a0d0a322e204d616b65207375726520796f7520646f206e6f74206861766520616e79206f662074686520666f6c6c6f77696e6720656e747269657320696e20796f757220686f7374732066696c652e0d0a0d0a2020203132372e302e302e31206c6d6c6963656e7365732e776970342e61646f62652e636f6d0d0a2020203132372e302e302e31206c6d2e6c6963656e7365732e61646f62652e636f6d0d0a0d0a332e20496e7374616c6c2041646f626520496c6c7573747261746f7220434320323031352e205b466f6c6c6f772074686520496d6167657320696e20496e7374616c6c6174696f6e2053637265656e73686f747320666f6c6465725d0d0a0d0a342e20416674657220496e7374616c6c6174696f6e2e204c61756e636820496c6c7573747261746f7220617320547269616c2e205b49747320496d706f7274616e745d0d0a0d0a352e20436c6f736520496c6c7573747261746f722e0d0a0d0a362e20436f7079207468652066696c652022616d746c69622e646c6c222066726f6d20437261636b20666f6c64657220746f20666f6c6c6f77696e67206469726563746f72792e205b433a5c50726f6772616d2046696c65735c41646f62655c41646f626520496c6c7573747261746f7220434320323031355c537570706f72742046696c65735c436f6e74656e74735c57696e646f77735c5d0d0a0d0a0d0a372e20426c6f636b207468652070726f6772616d20696e20796f7572206669726577616c6c20616e64206164642074686520666f6c6c6f77696e67206c696e657320746f20796f757220686f7374732066696c652e0d0a0d0a3132372e302e302e31206c6d6c6963656e7365732e776970342e61646f62652e636f6d0d0a3132372e302e302e31206c6d2e6c6963656e7365732e61646f62652e636f6d0d0a3132372e302e302e31206e6131722e73657276696365732e61646f62652e636f6d0d0a3132372e302e302e3120686c7263762e73746167652e61646f62652e636f6d0d0a3132372e302e302e3120707261637469766174652e61646f62652e636f6d200d0a3132372e302e302e312061637469766174652e61646f62652e636f6d0d0a0d0a382e2052756e207468652070726f6772616d202620456e6a6f792e2e2e2121210d0a0d0a4e4f54453a20486f7374732066696c65206973206c6f636174656420696e20433a5c57696e646f77735c53797374656d33325c647269766572735c6574635c0d0a0d0a23232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323230d0a0d0a547769747465723a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202046616365626f6f6b3a200d0a68747470733a2f2f747769747465722e636f6d2f466972737455706c6f616473202020202020202020202020202020202020202020202020202068747470733a2f2f7777772e66616365626f6f6b2e636f6d2f466972737455706c6f6164730d0a0d0a0d0a476f6f676c65202b3a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020204c696e6b6564696e3a0d0a68747470733a2f2f706c75732e676f6f676c652e636f6d2f3131313239353832383138363435303532313237312f706f7374732020202020202068747470733a2f2f7777772e6c696e6b6564696e2e636f6d2f636f6d70616e792f666972737475706c6f6164730d0a0d0a0d0a50696e7465726573743a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020596f75547562653a0d0a687474703a2f2f7777772e70696e7465726573742e636f6d2f466972737455706c6f6164732f202020202020202020202020202020202020202068747470733a2f2f7777772e796f75747562652e636f6d2f6368616e6e656c2f554368506a754c555334634e574c633149324430557066672f0d0a0d0a0d0a496e7374616772616d3a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020456c6c6f3a0d0a68747470733a2f2f696e7374616772616d2e636f6d2f666972737475706c6f6164732f202020202020202020202020202020202020202020202068747470733a2f2f656c6c6f2e636f2f666972737475706c6f61647320200d0a0d0a2323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323, '', '2017-03-02 16:00:00.000000'),
(15, 'aflormata', 'xmas', '', './assets/uploads/84343723759e9907416926.png', '0000-00-00 00:00:00.000000');

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
('14', 'aflormata');

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
  MODIFY `discuss#` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
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
  MODIFY `story#` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
