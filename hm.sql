-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2020 at 02:21 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `creationDate`, `updationDate`) VALUES
(5, 'admin', '778f12a7012f7bda804f24f7f88ad58f', '2017-01-24 16:21:18', '14-09-2020 09:17:17 PM');

-- --------------------------------------------------------

--
-- Table structure for table `cause`
--

CREATE TABLE `cause` (
  `id` int(11) NOT NULL,
  `CauseName` varchar(255) DEFAULT NULL,
  `RaisedAmount` int(11) DEFAULT NULL,
  `GoalAmount` int(11) DEFAULT NULL,
  `Percentage` varchar(11) DEFAULT NULL,
  `CauseDescription` text DEFAULT NULL,
  `CauseImage` varchar(255) DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Subject` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Email` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Message` text CHARACTER SET latin1 DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `id` int(11) NOT NULL,
  `Years` int(11) DEFAULT NULL,
  `Beneficiaries` int(11) DEFAULT NULL,
  `Projects` int(11) DEFAULT NULL,
  `Workshops` int(11) DEFAULT NULL,
  `postingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `editor`
--

CREATE TABLE `editor` (
  `id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `editor`
--

INSERT INTO `editor` (`id`, `username`, `password`, `creationDate`) VALUES
(1, 'editor 1', 'editorweb1', '2020-08-25 10:08:28'),
(2, 'editor 2', 'editorweb2', '2020-08-25 10:47:13'),
(3, 'editor 3', 'editorweb3', '2020-08-25 10:47:25');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `EventName` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `EventDescription` text CHARACTER SET latin1 DEFAULT NULL,
  `EventDate` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `EventCategory` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `EventImage1` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `EventImage2` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `EventImage3` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `EventImage4` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `postingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `MediaName` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `MediaDescription` text CHARACTER SET latin1 DEFAULT NULL,
  `MediaLink` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `MediaImage` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `postingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mental`
--

CREATE TABLE `mental` (
  `id` int(11) NOT NULL,
  `Overview` text CHARACTER SET latin1 DEFAULT NULL,
  `Member` text CHARACTER SET latin1 DEFAULT NULL,
  `EventImage` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `EventImage2` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `EventImage3` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `operation`
--

CREATE TABLE `operation` (
  `id` int(11) NOT NULL,
  `Overview` text CHARACTER SET latin1 DEFAULT NULL,
  `Member` text CHARACTER SET latin1 DEFAULT NULL,
  `EventImage` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `EventImage2` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `EventImage3` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `postingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `outreach`
--

CREATE TABLE `outreach` (
  `id` int(11) NOT NULL,
  `Overview` text CHARACTER SET latin1 DEFAULT NULL,
  `Member` text CHARACTER SET latin1 DEFAULT NULL,
  `EventImage` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `EventImage2` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `EventImage3` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `research`
--

CREATE TABLE `research` (
  `id` int(11) NOT NULL,
  `ResearchName` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `ResearchDescription` text CHARACTER SET latin1 DEFAULT NULL,
  `ResearchLink` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `postingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `id` int(11) NOT NULL,
  `Overview` text CHARACTER SET latin1 DEFAULT NULL,
  `Member` text CHARACTER SET latin1 DEFAULT NULL,
  `EventImage` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `EventImage2` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `EventImage3` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `MemberName` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Designation` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Category` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `MemberImage` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `Description` text CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cause`
--
ALTER TABLE `cause`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `editor`
--
ALTER TABLE `editor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mental`
--
ALTER TABLE `mental`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `operation`
--
ALTER TABLE `operation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outreach`
--
ALTER TABLE `outreach`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `research`
--
ALTER TABLE `research`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `editor`
--
ALTER TABLE `editor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `research`
--
ALTER TABLE `research`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
