-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 24, 2024 at 10:56 AM
-- Server version: 5.7.44
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `niifslkj_easse_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `subject_of_the_day`
--

CREATE TABLE `subject_of_the_day` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject_of_the_day`
--

INSERT INTO `subject_of_the_day` (`id`, `title`, `subject`, `date`) VALUES
(1, 'subject_1', 'Civic Education', '2024-05-22 02:29:27'),
(2, 'subject_2', 'Social Studies', '2024-05-22 02:29:27'),
(3, 'subject_3', 'Basic Science', '2024-05-22 02:29:27'),
(4, 'subject_4', 'Computer Studies', '2024-05-22 02:29:27'),
(5, 'subject_5', 'Mathematics', '2024-05-22 02:29:27'),
(6, 'subject_6', '', '2024-05-22 02:29:27'),
(7, 'subject_7', '', '2024-05-22 02:29:27'),
(8, 'subject_8', '', '2024-05-22 02:29:27'),
(9, 'subject_9', '', '2024-05-22 02:29:27'),
(10, 'subject_10', '', '2024-05-22 02:29:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subject_of_the_day`
--
ALTER TABLE `subject_of_the_day`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subject_of_the_day`
--
ALTER TABLE `subject_of_the_day`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
