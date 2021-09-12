-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2021 at 05:15 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simple`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `catid` int(11) NOT NULL,
  `categoryName` text DEFAULT NULL,
  `isActive` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`catid`, `categoryName`, `isActive`) VALUES
(1, 'PHP', 1),
(3, 'Java', 1),
(4, 'Python', 1),
(5, 'Node Js', 1),
(6, 'Scratch ', 1),
(7, 'Javascript', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbllogin`
--

CREATE TABLE `tbllogin` (
  `loginID` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `password2` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `type` varchar(10) NOT NULL,
  `createdDate` date DEFAULT NULL,
  `updatedDate` date DEFAULT NULL,
  `isActive` tinyint(1) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `hobbies` text DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `contactnumber` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbllogin`
--

INSERT INTO `tbllogin` (`loginID`, `username`, `password`, `password2`, `email`, `fullname`, `type`, `createdDate`, `updatedDate`, `isActive`, `address`, `hobbies`, `dob`, `contactnumber`) VALUES
(1, 'Admin', 'Admin', 'Admin', 'battikaran6@gmail.com', 'Viththiyakaran', 'Admin', '2021-08-20', '2021-08-20', 1, NULL, NULL, NULL, NULL),
(4, 'abc  ', '12345  ', '12345  ', 'lo@oc.com', 'Samsung  ', 'User', '0000-00-00', '2021-09-05', 1, 'Kalladu', '  Raja', '1970-01-01', 0),
(5, 'Raja ', '1234 ', '1234 ', 'ki@lo.com', 'Panneer Jenu ', 'User', '2021-09-04', '2021-09-05', 1, 'Kandy', ' Play', '1970-01-01', 0),
(6, 'Kumar    ', '1234     ', '1234     ', 'ki@lo.com', 'Kishoth     ', 'User', '2021-09-04', '2021-09-05', 1, '', '     ', '2021-09-14', 0),
(7, 'rajeek', '1234', '1234', 'Rajeek@gmail.com', 'Rajeek', 'User', '2021-09-09', '2021-09-09', 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblloginlog`
--

CREATE TABLE `tblloginlog` (
  `logID` int(11) NOT NULL,
  `userName` varchar(50) DEFAULT NULL,
  `userType` varchar(20) DEFAULT NULL,
  `loginDateAndTime` datetime DEFAULT NULL,
  `logIPAddress` varchar(30) DEFAULT NULL,
  `logBrowserName` varchar(20) DEFAULT NULL,
  `logBrowserVersion` varchar(20) DEFAULT NULL,
  `logOS` varchar(20) DEFAULT NULL,
  `logBrowserAgent` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblloginlog`
--

INSERT INTO `tblloginlog` (`logID`, `userName`, `userType`, `loginDateAndTime`, `logIPAddress`, `logBrowserName`, `logBrowserVersion`, `logOS`, `logBrowserAgent`) VALUES
(1, 'Admin', 'Admin', '2021-09-11 10:07:20', '127.0.0.1', 'Mozilla Firefox', '92.0', 'windows', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0)'),
(2, 'Admin', 'Admin', '2021-09-11 10:07:55', '127.0.0.1', 'Mozilla Firefox', '92.0', 'windows', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0)'),
(3, 'Admin', 'Admin', '2021-09-11 10:08:56', '127.0.0.1', 'Mozilla Firefox', '92.0', 'windows', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0)'),
(4, 'Admin', 'Admin', '2021-09-11 10:09:37', '127.0.0.1', 'Mozilla Firefox', '92.0', 'windows', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0)'),
(5, 'Admin', 'Admin', '2021-09-11 10:11:18', '127.0.0.1', 'Mozilla Firefox', '92.0', 'windows', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0)'),
(6, 'Admin', 'Admin', '2021-09-11 10:12:06', '127.0.0.1', 'Mozilla Firefox', '92.0', 'windows', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0)'),
(7, 'Admin', 'Admin', '2021-09-11 10:12:53', '127.0.0.1', 'Mozilla Firefox', '92.0', 'windows', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0)'),
(8, 'Admin', 'Admin', '2021-09-11 10:13:53', '127.0.0.1', 'Mozilla Firefox', '92.0', 'windows', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0)'),
(9, 'Admin', 'Admin', '2021-09-11 10:14:09', '127.0.0.1', 'Mozilla Firefox', '92.0', 'windows', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0)'),
(10, 'Admin', 'Admin', '2021-09-11 10:24:47', '127.0.0.1', 'Mozilla Firefox', '92.0', 'windows', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0)'),
(11, 'Admin', 'Admin', '2021-09-11 10:25:12', '127.0.0.1', 'Mozilla Firefox', '92.0', 'windows', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0)'),
(12, 'Admin', 'Admin', '2021-09-11 10:26:43', '127.0.0.1', 'Mozilla Firefox', '92.0', 'windows', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0)'),
(13, 'Admin', 'Admin', '2021-09-11 10:26:58', '127.0.0.1', 'Mozilla Firefox', '92.0', 'windows', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0)'),
(14, 'Admin', 'Admin', '2021-09-11 10:27:13', '127.0.0.1', 'Mozilla Firefox', '92.0', 'windows', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0)'),
(15, 'Admin', 'Admin', '2021-09-11 10:27:53', '127.0.0.1', 'Mozilla Firefox', '92.0', 'windows', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0)'),
(16, 'Admin', 'Admin', '2021-09-11 10:28:24', '127.0.0.1', 'Mozilla Firefox', '92.0', 'windows', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0)'),
(17, 'Admin', 'Admin', '2021-09-11 10:28:35', '127.0.0.1', 'Mozilla Firefox', '92.0', 'windows', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0)'),
(18, 'Admin', 'Admin', '2021-09-11 10:29:18', '127.0.0.1', 'Mozilla Firefox', '92.0', 'windows', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0)'),
(19, 'Admin', 'Admin', '2021-09-11 10:29:30', '127.0.0.1', 'Mozilla Firefox', '92.0', 'windows', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0)'),
(20, 'Admin', 'Admin', '2021-09-11 10:29:54', '127.0.0.1', 'Mozilla Firefox', '92.0', 'windows', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0)'),
(21, 'Admin', 'Admin', '2021-09-11 10:30:06', '127.0.0.1', 'Mozilla Firefox', '92.0', 'windows', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0)'),
(22, 'Admin', 'Admin', '2021-09-11 10:30:46', '127.0.0.1', 'Mozilla Firefox', '92.0', 'windows', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0)'),
(23, 'abc', 'User', '2021-09-11 10:30:54', '127.0.0.1', 'Mozilla Firefox', '92.0', 'windows', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0)'),
(24, 'Admin', 'Admin', '2021-09-11 10:32:39', '127.0.0.1', 'Mozilla Firefox', '92.0', 'windows', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0)'),
(25, 'abc', 'User', '2021-09-11 10:32:45', '127.0.0.1', 'Mozilla Firefox', '92.0', 'windows', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0)'),
(26, 'Admin', 'Admin', '2021-09-12 07:31:00', '127.0.0.1', 'Mozilla Firefox', '92.0', 'windows', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0)'),
(27, 'Admin', 'Admin', '2021-09-12 07:34:49', '127.0.0.1', 'Mozilla Firefox', '92.0', 'windows', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0)'),
(28, 'abc', 'User', '2021-09-12 07:35:04', '127.0.0.1', 'Mozilla Firefox', '92.0', 'windows', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0)'),
(29, 'abc', 'User', '2021-09-12 07:40:55', '127.0.0.1', 'Mozilla Firefox', '92.0', 'windows', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0)'),
(30, 'abc', 'User', '2021-09-12 08:00:39', '127.0.0.1', 'Mozilla Firefox', '92.0', 'windows', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0)'),
(31, 'Admin', 'Admin', '2021-09-12 08:03:01', '127.0.0.1', 'Mozilla Firefox', '92.0', 'windows', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0)'),
(32, 'Admin', 'Admin', '2021-09-12 08:12:03', '127.0.0.1', 'Mozilla Firefox', '92.0', 'windows', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0)'),
(33, 'abc', 'User', '2021-09-12 08:15:03', '127.0.0.1', 'Mozilla Firefox', '92.0', 'windows', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0)'),
(34, 'abc', 'User', '2021-09-12 08:18:45', '127.0.0.1', 'Mozilla Firefox', '92.0', 'windows', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0)'),
(35, 'abc', 'User', '2021-09-12 08:19:34', '127.0.0.1', 'Mozilla Firefox', '92.0', 'windows', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0)'),
(36, 'Admin', 'Admin', '2021-09-12 08:19:40', '127.0.0.1', 'Mozilla Firefox', '92.0', 'windows', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0)'),
(37, 'Admin', 'Admin', '2021-09-12 08:22:53', '127.0.0.1', 'Mozilla Firefox', '92.0', 'windows', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0)'),
(38, 'Raja', 'User', '2021-09-12 08:23:21', '127.0.0.1', 'Mozilla Firefox', '92.0', 'windows', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0)'),
(39, 'Admin', 'Admin', '2021-09-12 08:23:33', '127.0.0.1', 'Mozilla Firefox', '92.0', 'windows', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0)'),
(40, 'abc', 'User', '2021-09-12 08:26:05', '127.0.0.1', 'Mozilla Firefox', '92.0', 'windows', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0)'),
(41, 'Admin', 'Admin', '2021-09-12 08:26:17', '127.0.0.1', 'Mozilla Firefox', '92.0', 'windows', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0)'),
(42, 'Admin', 'Admin', '2021-09-12 08:26:57', '127.0.0.1', 'Mozilla Firefox', '92.0', 'windows', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0)'),
(43, 'Admin', 'Admin', '2021-09-12 08:29:48', '127.0.0.1', 'Mozilla Firefox', '92.0', 'windows', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0)'),
(44, 'abc', 'User', '2021-09-12 08:30:08', '127.0.0.1', 'Mozilla Firefox', '92.0', 'windows', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0)'),
(45, 'abc', 'User', '2021-09-12 08:31:02', '127.0.0.1', 'Mozilla Firefox', '92.0', 'windows', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0)'),
(46, 'abc', 'User', '2021-09-12 08:31:32', '127.0.0.1', 'Mozilla Firefox', '92.0', 'windows', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0)'),
(47, 'abc', 'User', '2021-09-12 08:32:28', '127.0.0.1', 'Mozilla Firefox', '92.0', 'windows', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0)'),
(48, 'abc', 'User', '2021-09-12 08:32:46', '127.0.0.1', 'Mozilla Firefox', '92.0', 'windows', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0)'),
(49, 'abc', 'User', '2021-09-12 08:33:02', '127.0.0.1', 'Mozilla Firefox', '92.0', 'windows', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0)'),
(50, 'abc', 'User', '2021-09-12 08:34:09', '127.0.0.1', 'Mozilla Firefox', '92.0', 'windows', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0)'),
(51, 'abc', 'User', '2021-09-12 08:34:16', '127.0.0.1', 'Mozilla Firefox', '92.0', 'windows', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0)'),
(52, 'abc', 'User', '2021-09-12 08:34:58', '127.0.0.1', 'Mozilla Firefox', '92.0', 'windows', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0)'),
(53, 'abc', 'User', '2021-09-12 08:35:16', '127.0.0.1', 'Mozilla Firefox', '92.0', 'windows', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0)');

-- --------------------------------------------------------

--
-- Table structure for table `tblmcqtest`
--

CREATE TABLE `tblmcqtest` (
  `qid` int(11) NOT NULL,
  `question` text DEFAULT NULL,
  `op1` text DEFAULT NULL,
  `op2` text DEFAULT NULL,
  `op3` text DEFAULT NULL,
  `op4` text DEFAULT NULL,
  `answer` text DEFAULT NULL,
  `categoryid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblmcqtest`
--

INSERT INTO `tblmcqtest` (`qid`, `question`, `op1`, `op2`, `op3`, `op4`, `answer`, `categoryid`) VALUES
(1, ' PHP stands for -', 'Hypertext Preprocessor', 'Pretext Hypertext Preprocessor', 'Personal Home Processor', 'None of the above', 'Hypertext Preprocessor', 1),
(2, 'Variable name in PHP starts with -', '! (Exclamation)', '$ (Dollar)', '& (Ampersand)', '# (Hash)', '$ (Dollar)', 1),
(4, 'Which of the following is not a variable scope in PHP?', 'Extern', 'Local', 'Static', 'Global', 'Extern', 1),
(5, 'Which of the following option leads to the portability and security of Java?', 'Bytecode is executed by JVM', 'The applet makes the Java code secure and portable', 'Use of exception handling', 'Dynamic binding between objects', 'Bytecode is executed by JVM', 3),
(6, 'Which of the following is not a Java features?', 'Dynamic', 'Architecture Neutral', 'Use of pointers', 'Object-oriented', 'Use of pointers', 3),
(7, 'What is the maximum possible length of an identifier?', '16', '32', '64', 'None of these above', 'None of these above', 4);

--
-- Triggers `tblmcqtest`
--
DELIMITER $$
CREATE TRIGGER `tblmcqanstrigger` AFTER INSERT ON `tblmcqtest` FOR EACH ROW INSERT into tblmcqtestans VALUES ( new.qid , new.answer )
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tblmcqtestans`
--

CREATE TABLE `tblmcqtestans` (
  `aid` int(11) DEFAULT NULL,
  `answer` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblmcqtestans`
--

INSERT INTO `tblmcqtestans` (`aid`, `answer`) VALUES
(1, 'Hypertext Preprocessor'),
(2, '$ (Dollar)'),
(3, '.php'),
(4, 'Extern'),
(5, 'Bytecode is executed by JVM'),
(6, 'Use of pointers'),
(7, 'None of these above');

-- --------------------------------------------------------

--
-- Table structure for table `tbluseractivitylog`
--

CREATE TABLE `tbluseractivitylog` (
  `actid` int(11) NOT NULL,
  `activity` varchar(50) DEFAULT NULL,
  `actDataAndTime` datetime DEFAULT NULL,
  `actIPAddress` varchar(20) DEFAULT NULL,
  `actBrowserName` varchar(20) DEFAULT NULL,
  `actOS` varchar(20) DEFAULT NULL,
  `actBrowserAgent` varchar(6) DEFAULT NULL,
  `actUserName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbluseractivitylog`
--

INSERT INTO `tbluseractivitylog` (`actid`, `activity`, `actDataAndTime`, `actIPAddress`, `actBrowserName`, `actOS`, `actBrowserAgent`, `actUserName`) VALUES
(1, 'MCQ', '2021-09-12 08:01:50', '127.0.0.1', 'Mozilla Firefox', 'windows', 'Mozill', 'abc'),
(2, 'Video', '2021-09-12 08:02:32', '127.0.0.1', 'Mozilla Firefox', 'windows', 'Mozill', 'abc'),
(3, 'MCQ', '2021-09-12 08:23:24', '127.0.0.1', 'Mozilla Firefox', 'windows', 'Mozill', 'Raja'),
(4, 'Video', '2021-09-12 08:23:25', '127.0.0.1', 'Mozilla Firefox', 'windows', 'Mozill', 'Raja'),
(5, 'MCQ', '2021-09-12 08:23:27', '127.0.0.1', 'Mozilla Firefox', 'windows', 'Mozill', 'Raja'),
(6, 'Video', '2021-09-12 08:34:12', '127.0.0.1', 'Mozilla Firefox', 'windows', 'Mozill', 'abc'),
(7, 'MCQ', '2021-09-12 08:34:14', '127.0.0.1', 'Mozilla Firefox', 'windows', 'Mozill', 'abc'),
(8, 'Video', '2021-09-12 08:34:15', '127.0.0.1', 'Mozilla Firefox', 'windows', 'Mozill', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `tblvideocomments`
--

CREATE TABLE `tblvideocomments` (
  `vcid` int(11) NOT NULL,
  `vid` int(11) DEFAULT NULL,
  `comments` text DEFAULT NULL,
  `commentsby` varchar(50) DEFAULT NULL,
  `commentdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblvideocomments`
--

INSERT INTO `tblvideocomments` (`vcid`, `vid`, `comments`, `commentsby`, `commentdate`) VALUES
(1, 5, 'Raja', 'Admin', '2021-09-08'),
(2, 5, 'ddd', 'Admin', '2021-09-08'),
(3, 5, 'ddd', 'Admin', '2021-09-08'),
(4, 5, 'ddd', 'Admin', '2021-09-08'),
(5, 5, 'ddd', 'Admin', '2021-09-08'),
(6, 5, 'ddd', 'Admin', '2021-09-08'),
(7, 5, 'dd', 'Admin', '2021-09-08'),
(8, 5, 'ddd', 'Admin', '2021-09-08'),
(14, 5, 'Raja', 'Admin', '2021-09-08'),
(15, 1, 'dfvdsfs', 'abc', '2021-09-09');

-- --------------------------------------------------------

--
-- Table structure for table `tblvideos`
--

CREATE TABLE `tblvideos` (
  `vid` int(11) NOT NULL,
  `videoName` text DEFAULT NULL,
  `videoPath` text DEFAULT NULL,
  `isActive` tinyint(1) DEFAULT NULL,
  `videoCategoryId` int(11) DEFAULT NULL,
  `videoImage` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblvideos`
--

INSERT INTO `tblvideos` (`vid`, `videoName`, `videoPath`, `isActive`, `videoCategoryId`, `videoImage`) VALUES
(1, ' Basic structure of Node js | Node Js For Beginners 📕 | Part 1 | Viththiyakaran', 'https://www.youtube.com/embed/P_z5io_j_7M', 1, 5, 'index.png'),
(2, 'Scratch Programming -1 - Motion | Scratch ', 'https://www.youtube.com/embed/sourCJPU9JQ', 1, 6, 'sp-scratch-FULL.png'),
(3, 'Scratch Programming - 2 - Looks | Scratch ', 'https://www.youtube.com/embed/P_z5io_j_7M', 1, 6, 'sp-scratch-FULL.png'),
(4, 'makecode interface | microbit ', 'https://www.youtube.com/embed/sC5xe_0yRqA', 1, 6, 'maxresdefault.jpg'),
(5, 'features of microbit | microbit', 'https://www.youtube.com/embed/4QqyGTuhKRE', 1, 6, 'maxresdefault.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `tbllogin`
--
ALTER TABLE `tbllogin`
  ADD PRIMARY KEY (`loginID`);

--
-- Indexes for table `tblloginlog`
--
ALTER TABLE `tblloginlog`
  ADD PRIMARY KEY (`logID`);

--
-- Indexes for table `tblmcqtest`
--
ALTER TABLE `tblmcqtest`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `tbluseractivitylog`
--
ALTER TABLE `tbluseractivitylog`
  ADD PRIMARY KEY (`actid`);

--
-- Indexes for table `tblvideocomments`
--
ALTER TABLE `tblvideocomments`
  ADD PRIMARY KEY (`vcid`);

--
-- Indexes for table `tblvideos`
--
ALTER TABLE `tblvideos`
  ADD PRIMARY KEY (`vid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbllogin`
--
ALTER TABLE `tbllogin`
  MODIFY `loginID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblloginlog`
--
ALTER TABLE `tblloginlog`
  MODIFY `logID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `tblmcqtest`
--
ALTER TABLE `tblmcqtest`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbluseractivitylog`
--
ALTER TABLE `tbluseractivitylog`
  MODIFY `actid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblvideocomments`
--
ALTER TABLE `tblvideocomments`
  MODIFY `vcid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tblvideos`
--
ALTER TABLE `tblvideos`
  MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
