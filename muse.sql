-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Dec 13, 2016 at 09:09 AM
-- Server version: 5.5.49-log
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `muse`
--

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE IF NOT EXISTS `music` (
  `SongID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Artist` varchar(100) NOT NULL,
  `SongName` varchar(100) NOT NULL,
  `Genre` varchar(100) NOT NULL,
  `SongFile` varchar(100) NOT NULL,
  `Image` varchar(200) NOT NULL,
  `Favorite` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`SongID`, `UserID`, `Artist`, `SongName`, `Genre`, `SongFile`, `Image`, `Favorite`) VALUES
(3, 26, 'Lanny Kravitz', 'Fly Away', 'rock', 'Lenny Kravitz - Fly Away.mp3', '', 26),
(4, 26, 'Iris', 'Lady in Black', 'rock', 'Iris and Uriah Heep- Lady in black versuri.mp3', '', 0),
(5, 26, 'The Rossetes', 'Be My Baby', 'country', 'Be My Baby.mp3', '', 0),
(6, 27, 'Assasin', 'Shanty', 'acoustic', 'Assassin''s Creed IV- Black Flag - Leave Her Johnny Shanty.mp3', '', 26),
(7, 27, 'Greek Fire', 'On The Top of The World', 'rock', 'Greek Fire - Top Of The World.mp3', '', 0),
(8, 26, 'The Beatles', 'Yesterday', 'rock', 'Yesterday.m4a', '', 0),
(10, 27, 'Kurt Nielsen', 'I', 'acoustic', 'I - Kurt Nilsen.mp3', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `UserID` int(11) NOT NULL,
  `Fname` varchar(200) DEFAULT NULL,
  `Lname` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Username` varchar(200) DEFAULT NULL,
  `Password` varchar(200) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Picture` varchar(200) NOT NULL,
  `Prefferences` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `Fname`, `Lname`, `Email`, `Username`, `Password`, `Timestamp`, `Picture`, `Prefferences`) VALUES
(26, 'Pavol', 'Nazarej', 'pavol@gmail.com', 'pavol', 'pavol', '2016-05-23 08:53:12', 'pein.jpg', 'rock'),
(27, 'Pascal', 'Lizard', 'pein@me.com', 'pein', 'pein', '2016-12-12 13:06:31', 'filip.jpg', 'acoustic');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`SongID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
  MODIFY `SongID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
