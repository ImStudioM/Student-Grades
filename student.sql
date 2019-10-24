-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2019 at 04:53 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webpalk`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_id` int(255) NOT NULL,
  `exam` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `grade` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `student_id`, `exam`, `grade`) VALUES
(1, 'Student name', 123456789, 'Exam name', '100'),
(2, 'Student name', 123456789, 'Exam name', '100'),
(3, 'Student name', 123456789, 'Exam name', '100'),
(4, 'Student name', 123456789, 'Exam name', '100'),
(5, 'Student name', 123456789, 'Exam name', '100'),
(6, 'Student name', 123456789, 'Exam name', '100'),
(7, 'Student name', 123456789, 'Exam name', '100'),
(8, 'Student name', 123456789, 'Exam name', '100'),
(9, 'Student name', 123456789, 'Exam name', '100'),
(10, 'Student name', 123456789, 'Exam name', '100'),
(11, 'Student name', 123456789, 'Exam name', '100'),
(12, 'Student name', 123456789, 'Exam name', '100'),
(13, 'Student name', 123456789, 'Exam name', '100'),
(14, 'Student name', 123456789, 'Exam name', '100'),
(15, 'Student name', 123456789, 'Exam name', '100'),
(16, 'Student name', 123456789, 'Exam name', '100'),
(17, 'Student name', 123456789, 'Exam name', '100'),
(18, 'Student name', 123456789, 'Exam name', '100'),
(19, 'Student name', 123456789, 'Exam name', '100'),
(20, 'Student name', 123456789, 'Exam name', '100'),
(21, 'Student name', 123456789, 'Exam name', '100'),
(22, 'Student name', 123456789, 'Exam name', '100'),
(23, 'Student name', 123456789, 'Exam name', '100'),
(24, 'Student name', 123456789, 'Exam name', '100');




--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
