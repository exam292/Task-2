-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2022 at 01:12 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `fk_student` varchar(11) NOT NULL,
  `fk_teacher` varchar(11) NOT NULL,
  `fk_course` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `fk_student`, `fk_teacher`, `fk_course`) VALUES
(1, '1', '1', '1'),
(2, '1', '2', '2'),
(12, '2', '1', '1'),
(13, '2', '2', '2'),
(17, '2', '1', '2'),
(18, '3', '1', '1'),
(19, '2', '3', '9'),
(20, '1', '3', '9'),
(21, '3', '3', '9');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `desc` longtext NOT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `desc`, `code`) VALUES
(1, 'Networking', '...', 'ICT100'),
(2, 'Programming', '...', 'ICT101'),
(6, 'Biology', '...', 'SCI200'),
(7, 'Chemistry', '...', 'SCI201'),
(8, 'Physics', '...', 'SCI202'),
(9, 'Maths', '...', 'FDT000'),
(10, 'English literature', '...', 'FDT001'),
(11, 'English Language', '...', 'FDT002');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'student1', '$2y$10$mAkDd4AkY7SqybRY4gJmP.D5z5SnH53kf5sclZdA/1Wg.b/J17OvS', '2022-03-22 12:51:53'),
(2, 'Ben', '$2y$10$atbKEjqgTb0FDdCv6SYP1.EuI3yavkjSw9J9x1vLG.OAU/3KGJckS', '2022-03-22 13:21:22'),
(3, 'Jeff', '$2y$10$R7De9HgNFFGJooDxnM9rH.hrXabCktZV7/jmAg6eFZv5D9fnlQTvK', '2022-03-22 13:21:38');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'teacher1', '$2y$10$7TDfvjhoeL36Vn5JCHB8CuqXrpWxNjca8fsjqKW2TR7CyMA/Vwlwe', '2022-03-22 12:52:36'),
(2, 'John', '$2y$10$JpWMd3RacCFuDZt3yxMa5OB6MRiwmBDbLZzEilWArnVEpML.h3W9K', '2022-03-22 13:20:29'),
(3, 'Glew', '$2y$10$UPgRiufanOxpa1QziklwJ.S4Gxw2XWhuycvcT2N4CWO8/cabe.lh.', '2022-03-22 13:21:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
