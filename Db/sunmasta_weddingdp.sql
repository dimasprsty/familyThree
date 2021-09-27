-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2021 at 09:12 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `weddingdp`
--

-- --------------------------------------------------------

--
-- Table structure for table `guestbook`
--

CREATE TABLE IF NOT EXISTS `guestbook` (
`No` int(100) NOT NULL,
  `SendingName` varchar(100) NOT NULL,
  `FromColleague` varchar(100) NOT NULL,
  `WhisesMessage` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guestbook`
--

INSERT INTO `guestbook` (`No`, `SendingName`, `FromColleague`, `WhisesMessage`) VALUES
(1, 'MR', 'Boss', 'Test'),
(2, 'Nazar', 'T', 'T'),
(3, 'Nazar', 'Boss', 'Happy'),
(4, 'qwerty', 'qwerty', 'qwerty'),
(5, 'juba', 'juba', 'juba'),
(6, 'tes', 'tes', 'tes'),
(7, 'tes', 'tes', 'tes'),
(8, 'tes', 'tes', 'tes'),
(9, ' Arya Wijaya', ' Teman nguli', 'Barakallah lutil! Semoga jadi keluarga sakinna mawadah wa rahmah. Lancar acaranya ndor!'),
(10, 'Mantanmu', 'Dari yang pernah kau sayangi dan sakiti', 'Selamat berbahagia, tetap menyerah jangan semangat'),
(11, 'Dimdim', 'Boos', 'Happy wedding.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guestbook`
--
ALTER TABLE `guestbook`
 ADD PRIMARY KEY (`No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guestbook`
--
ALTER TABLE `guestbook`
MODIFY `No` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
