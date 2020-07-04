-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2020 at 05:45 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `filesafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(2) NOT NULL,
  `uname` varchar(10) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phno` bigint(10) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `pass`, `email`, `phno`, `name`) VALUES
(1, 'admin', 'lololol', 'admin@filesafe.com', 8837802954, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `sno` int(3) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phno` bigint(10) NOT NULL,
  `msg` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`sno`, `name`, `email`, `phno`, `msg`) VALUES
(1, 'Admin', 'admin@filesafe.com', 8837802954, 'I AM ADMIN ALL HAIL THE ADMIN!!!!!!!!!!!!!!!'),
(2, 'Prajwal Khokhar', 'kprajwaldeep@gmail.com', 8837802954, 'I AM GOD?!'),
(3, 'Prajwal Khokhar', 'kprajwaldeep@gmail.com', 8837802954, 'I AM GOD!!!!!!!!!!!!!!');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `sno` int(3) NOT NULL,
  `folderid` int(3) NOT NULL,
  `type` varchar(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `actualname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`sno`, `folderid`, `type`, `name`, `actualname`) VALUES
(40, 23, 'other', '5f0044e3c1339.jfif', 'cloud3.jfif'),
(41, 24, 'image', '5f00450783785.jpg', 'logo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `folders`
--

CREATE TABLE `folders` (
  `sno` int(3) NOT NULL,
  `uid` int(3) NOT NULL,
  `name` varchar(25) NOT NULL,
  `no_of_files` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `folders`
--

INSERT INTO `folders` (`sno`, `uid`, `name`, `no_of_files`) VALUES
(23, 5, 'hsa', 1),
(24, 5, 'hsa', 1);

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `uid` int(2) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `phno` bigint(15) NOT NULL,
  `email` varchar(35) NOT NULL,
  `uname` varchar(50) DEFAULT NULL,
  `profilepic` int(3) NOT NULL DEFAULT 0,
  `extension` varchar(5) NOT NULL DEFAULT 'png',
  `pass` varchar(50) NOT NULL,
  `totaldocs` int(3) NOT NULL DEFAULT 0,
  `docspresent` int(3) NOT NULL DEFAULT 0,
  `removeddocs` int(3) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`uid`, `fname`, `lname`, `phno`, `email`, `uname`, `profilepic`, `extension`, `pass`, `totaldocs`, `docspresent`, `removeddocs`) VALUES
(5, 'Prajwal', 'Khokhar', 8837802954, 'admin@filesafe.com', 'admin', 0, 'png', 'lololol', 3, 2, 1),
(6, 'Prajwal', 'Khokhar', 8837802954, 'Zzx@23.com', 'Deejwal_Vu', 0, 'png', 'aaaaaa', 2, -1, 1),
(7, 'Prajwal', 'Khokhar', 8837802954, 'Zzx@23.com', 'praj', 0, 'png', 'lololol', 0, 0, 0),
(8, 'Prajwal', 'Khokhar', 8837802954, 'Zzx@23.com', 'wwss', 8, 'png', 'lololol', 7, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `folders`
--
ALTER TABLE `folders`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `signin`
--
ALTER TABLE `signin`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `folders`
--
ALTER TABLE `folders`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `signin`
--
ALTER TABLE `signin`
  MODIFY `uid` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
