-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2021 at 12:42 PM
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
-- Database: `studentdetails`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `USN` varchar(10) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `SEMESTER` int(10) NOT NULL,
  `FIRST_VAC_DATE` date DEFAULT NULL,
  `SECOND_VAC_DATE` date DEFAULT NULL,
  `STUIMG` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`USN`, `NAME`, `SEMESTER`, `FIRST_VAC_DATE`, `SECOND_VAC_DATE`, `STUIMG`) VALUES
('1JT18CS020', 'HARSHA K S', 6, NULL, NULL, 'images/harsha.jpg'),
('1JT18CS027', 'KARTHIK Y', 6, NULL, NULL, 'images/karthik.jpg'),
('1JT18CS034', 'Mandara M', 6, '2021-06-04', '2021-07-04', 'images/mandara.png'),
('1JT18CS056', 'Sumana M R', 6, '2021-06-02', '2021-07-02', 'images/sumana.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`USN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
