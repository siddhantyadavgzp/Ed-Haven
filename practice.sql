-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2018 at 01:16 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `practice`
--

-- --------------------------------------------------------

--
-- Table structure for table `filet`
--

CREATE TABLE `filet` (
  `userID` int(9) NOT NULL,
  `subject` varchar(15) NOT NULL,
  `subtopic` varchar(25) NOT NULL,
  `description` varchar(300) NOT NULL,
  `filename` varchar(260) NOT NULL,
  `vote` int(11) DEFAULT NULL,
  `kab` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `filet`
--

INSERT INTO `filet` (`userID`, `subject`, `subtopic`, `description`, `filename`, `vote`, `kab`) VALUES
(1, 'Physics', 'Mechanics', 'A really nice and detailed ppt from our professor dealing with principle of virtual work', 'Presentation3.pptx', 1013, '2018-09-30'),
(1, 'Physics', 'Mechanics', 'Book by RC HIBBELER with extensive problem solving dealing with statistics', 'imagetopdf.pdf', 303, '2018-09-30'),
(1, 'Physics', 'Electrodynamics', 'Great book to provide you intuition on fundamentals of Electrostats', 'imagetopdf-ilovepdf-compressed.pdf', 776, '2018-09-30'),
(1, 'Physics', 'Modern', 'Lectur notes which introducee you to all the major fields of modern physics in brief', '1.CEN-105_PPTs_FirstSet 2018.pptx', 105, '2018-09-30'),
(1, 'Physics', 'Mechanics', 'Collection of mechanics\' questions from universities around the world', '1.CEN-105_PPTs_Second Set II part (2017-2018).pptx', 934, '2018-09-30');

-- --------------------------------------------------------

--
-- Table structure for table `websiteusers`
--

CREATE TABLE `websiteusers` (
  `userID` int(9) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `userName` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `iit` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `websiteusers`
--

INSERT INTO `websiteusers` (`userID`, `fullname`, `userName`, `email`, `pass`, `iit`) VALUES
(1, 'Manas Chaudhary', 'Manas', 'mchaudhary@me.iitr.ac.in', 'manas123', 'R'),
(2, 'Mohit Sharma', 'Scar', 'msharma2@ph.iitr.ac.in', 'rrrrrrrr', 'R');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `websiteusers`
--
ALTER TABLE `websiteusers`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `websiteusers`
--
ALTER TABLE `websiteusers`
  MODIFY `userID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
