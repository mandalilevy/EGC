-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2021 at 10:33 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `egc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('excelglobalcollege@gmail.com', 'Excel@2021');

-- --------------------------------------------------------

--
-- Table structure for table `clear`
--

CREATE TABLE `clear` (
  `adno` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `alcontact` varchar(200) NOT NULL,
  `dpt` varchar(200) NOT NULL,
  `course` varchar(200) NOT NULL,
  `jd` varchar(200) NOT NULL,
  `cd` varchar(200) NOT NULL,
  `lecturer` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `cst` varchar(200) NOT NULL,
  `cet` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clear`
--

INSERT INTO `clear` (`adno`, `name`, `contact`, `alcontact`, `dpt`, `course`, `jd`, `cd`, `lecturer`, `status`, `cst`, `cet`) VALUES
('200', 'Emah Galani', '0744627492', '0756292993', 'ICT', 'Programing with Java', '2021-09-08', '2021-11-08', 'Mandali Nambale Levy', 'Completed', '10:00', '11:30'),
('EX2', 'Urvi Jakharia', '0788282822', '0792233210', 'Business', 'ACCA', '2021-09-07', '2021-10-14', 'Steven Ocharo', 'Completed', '12:00', '13:00'),
('EX4', 'Manali Kotecha', '0767377777', '0764662727', 'ICT', 'Web-Design', '2021-09-07', '2021-10-07', 'Mandali Nambale Levy', 'Completed', '10:00', '12:00'),
('EX700', 'Dhruv Vanir', '0783388388', '0784746373', 'Languages', 'IELTS', '2021-09-08', '2021-10-08', 'Sylvia Wekesa', 'Completed', '18:00', '19:00'),
('EXL30', 'Drasti Joshi', '0786171771', '0788171626', 'Languages', 'IELTS', '2021-09-08', '2021-10-08', 'Sylvia Wekesa', 'Completed', '18:00', '19:00');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `courseid` varchar(100) DEFAULT NULL,
  `coursename` varchar(100) DEFAULT NULL,
  `dpt` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `courseid`, `coursename`, `dpt`) VALUES
(27, 'J-01', 'Programing with Java', 'ICT'),
(28, 'MO01', 'Microsoft Office Specialist', 'ICT'),
(29, 'BS01', 'ACCA', 'Business'),
(30, 'LA345', 'IELTS', 'Languages'),
(31, 'EXL1', 'English Level 1', 'Languages'),
(32, 'EXA2', 'ABE', 'Business'),
(33, 'LAN300', 'TOFEL', 'Languages'),
(34, 'EC2', 'Web-Design', 'ICT'),
(35, 'BS21', 'ESB', 'Business'),
(36, 'MOE', 'MOS EXPERT ', 'ICT'),
(37, 'QB', 'QUICKBOOKS', 'ICT'),
(38, 'EN', 'LEVEL 4', 'Languages');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `name` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`name`) VALUES
('Business'),
('ICT'),
('Languages');

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `cont` varchar(200) NOT NULL,
  `dpt` varchar(200) NOT NULL,
  `course` varchar(200) NOT NULL,
  `di` varchar(200) NOT NULL,
  `dc` varchar(200) NOT NULL,
  `remarks` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inquiries`
--

INSERT INTO `inquiries` (`id`, `name`, `cont`, `dpt`, `course`, `di`, `dc`, `remarks`) VALUES
(6, 'Juma Ndune', '0782038483', 'ICT', 'Programing with Java', '2021-09-13', '2021-10-06', 'He will be back on 12th-9-2021'),
(7, 'Maina Kamanda', '0782846377', 'ICT', 'Programing with Java', '2021-09-08', '2021-10-08', 'Maina Said He will be coming back for price confirmation but wanted the fees reduced to 10,000.'),
(8, 'Jacky Manda', '0782828282', 'Business', 'ABE', '2021-09-01', '2021-10-08', 'She will come back again'),
(9, 'Sahron Ali', '0788282822', 'Languages', 'IELTS', '2021-08-29', '2021-10-08', 'He will come back'),
(10, 'Jone Bulenywa', '0783677272', 'Business', 'ACCA', '2021-09-08', '2021-10-05', 'He will come back'),
(11, 'Amani Mboni', '0783473388', 'ICT', 'Programing with Java', '2021-09-08', '2021-10-07', 'He will come back'),
(12, 'Karuna Kethal', '0872772722', 'Languages', 'IELTS', '2021-09-08', '2021-09-30', 'she will come'),
(13, 'Saher Aboo', '0783837563', 'ICT', 'Programing with Java', '2021-09-09', '2021-09-30', 'He will come back');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE `lecturer` (
  `idn` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `dpt` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`idn`, `name`, `contact`, `email`, `dpt`, `status`) VALUES
('100', 'Daniel Nyamai', '0702337373', 'danwansho@gmail.com', 'ICT', 'Full Time'),
('200', 'Steven Ocharo', '0786262622', 'steven@gmail.com', 'Business', 'Full Time'),
('2e34', 'Evans Opiyo', '0787373737', 'evans@gmail.com', 'Business', 'Full Time'),
('300', 'Edward Okello', '0782262266', 'edward@gmail.com', 'Business', 'Full Time'),
('34828123', 'Mandali Nambale Levy', '0790686848', 'mandalilevy@gmail.com', 'ICT', 'Full Time'),
('400', 'Juma Mkombelo', '0785263636', 'juma@gmail.com', 'ICT', 'Full Time'),
('500', 'Sylvia Wekesa', '0732738282', 'sylvia@gmail.com', 'Languages', 'Full Time'),
('890', 'Jane Kyalo', '0756227272', 'jane@gmail.com', 'Languages', 'Full Time');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `adno` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `alcontact` varchar(200) NOT NULL,
  `dpt` varchar(200) NOT NULL,
  `course` varchar(200) NOT NULL,
  `jd` varchar(200) NOT NULL,
  `cd` varchar(200) NOT NULL,
  `lecturer` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `cst` varchar(200) NOT NULL,
  `cet` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`adno`, `name`, `contact`, `alcontact`, `dpt`, `course`, `jd`, `cd`, `lecturer`, `status`, `cst`, `cet`) VALUES
('300U', 'Karuna Kerai', '0738388388', '0756452525', 'ICT', 'Programing with Java', '2021-09-08', '2021-10-08', 'Daniel Nyamai', 'Active', '15:00', '16:00'),
('798', 'Meera Krishna', '0782828282', '0746828828', 'ICT', 'Microsoft Office Specialist', '2021-09-09', '2021-10-09', 'Daniel Nyamai', 'Active', '15:00', '16:00'),
('EX1', 'Anmol Solanki', '0788301340', '0790686848', 'ICT', 'Programing with Java', '2021-09-07', '2021-10-07', 'Mandali Nambale Levy', 'Active', '08:00', '10:00'),
('EX5', 'Ranbir Husein', '0782646646', '0872522222', 'ICT', 'Web-Design', '2021-09-16', '2021-12-07', 'Daniel Nyamai', 'Active', '13:00', '14:00'),
('IC45', 'Juma Jackson', '0762525225', '0783888338', 'ICT', 'Web-Design', '2021-09-09', '2021-10-09', 'Mandali Nambale Levy', 'Active', '07:00', '08:00'),
('ICT5', 'Yomnis Abdi', '0785244224', '0786255252', 'ICT', 'MOS EXPERT ', '2021-09-09', '2021-10-09', 'Mandali Nambale Levy', 'Active', '06:00', '07:00'),
('ST54', 'Abdi Galana', '0677262626', '0874847848', 'Languages', 'LEVEL 4', '2021-09-09', '2021-10-09', 'Jane Kyalo', 'Active', '20:00', '21:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `clear`
--
ALTER TABLE `clear`
  ADD PRIMARY KEY (`adno`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`idn`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`adno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
