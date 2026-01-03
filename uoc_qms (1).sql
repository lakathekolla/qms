-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 03, 2026 at 11:48 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uoc_qms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_contact` varchar(50) DEFAULT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_email` varchar(150) DEFAULT NULL,
  `admin_added` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_contact`, `admin_pass`, `admin_email`, `admin_added`) VALUES
(1, 'Admin', '0717881190', 'admin', 'admin@admin.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `info_quiz`
--

CREATE TABLE `info_quiz` (
  `id` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `q_id` int(11) NOT NULL,
  `q_txt` text NOT NULL,
  `q_pic` varchar(255) DEFAULT NULL,
  `q_mcq1_ans` varchar(255) DEFAULT NULL,
  `q_mcq2_ans` varchar(255) DEFAULT NULL,
  `q_mcq3_ans` varchar(255) DEFAULT NULL,
  `q_mcq4_ans` varchar(255) DEFAULT NULL,
  `q_mcq5_ans` varchar(255) DEFAULT NULL,
  `q_mcq_ans_num` tinyint(3) UNSIGNED DEFAULT NULL,
  `q_hint` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `stu_id` varchar(100) NOT NULL,
  `marks` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `quiz_id` int(11) NOT NULL,
  `quiz_name` varchar(255) NOT NULL,
  `quiz_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_name` varchar(100) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_email` varchar(150) DEFAULT NULL,
  `user_contact` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_name`, `user_pass`, `user_email`, `user_contact`) VALUES
('user', 'pass', '123@123.user@user.com', '0717881196');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `uq_admin_name` (`admin_name`);

--
-- Indexes for table `info_quiz`
--
ALTER TABLE `info_quiz`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_quiz_qid` (`quiz_id`,`q_id`),
  ADD KEY `idx_info_quiz_quiz` (`quiz_id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_marks_quiz` (`quiz_id`),
  ADD KEY `idx_marks_student` (`stu_id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`quiz_id`),
  ADD UNIQUE KEY `uq_quiz_name` (`quiz_name`),
  ADD KEY `idx_quiz_by` (`quiz_by`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info_quiz`
--
ALTER TABLE `info_quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `quiz_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `info_quiz`
--
ALTER TABLE `info_quiz`
  ADD CONSTRAINT `fk_info_quiz_quiz` FOREIGN KEY (`quiz_id`) REFERENCES `quiz` (`quiz_id`) ON DELETE CASCADE;

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `fk_marks_quiz` FOREIGN KEY (`quiz_id`) REFERENCES `quiz` (`quiz_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_marks_student` FOREIGN KEY (`stu_id`) REFERENCES `user_info` (`user_name`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
