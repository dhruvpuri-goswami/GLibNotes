-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:8111
-- Generation Time: Mar 09, 2022 at 11:19 AM
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
-- Database: `glib`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_uploads`
--

CREATE TABLE `tbl_uploads` (
  `u_id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `uploaded_file` varchar(255) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_description` varchar(255) NOT NULL,
  `uploaded_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_uploads`
--

INSERT INTO `tbl_uploads` (`u_id`, `user_id`, `uploaded_file`, `keyword`, `file_name`, `file_description`, `uploaded_date`) VALUES
(13, 1, '763573122.pdf', 'JAVA', 'Diploma Java Notes', 'Java All Notes', '2022-03-03'),
(16, 1, 'Android-Assignment 2 (196120316019_Dhruvpuri Goswami).pdf', 'ASP', 'Diploma ASP.net Notes', 'All Asp.net notes', '2022-03-03'),
(17, 1, '860141322.pdf', 'ASP', 'Diploma asp Notes', 'asp work notes', '2022-03-03'),
(18, 1, 'WhatsApp Image 2022-03-02 at 11.11.01 AM.jpeg', 'JAVA', 'Diploma Java Notes', 'hrthr', '2022-03-03'),
(19, 1, 'Unit_5_PHP_Lab Manual_Term 212.pdf', 'OOP', 'Object Oriented Programming', 'All oop notes are in it', '2022-03-07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(20) NOT NULL,
  `user_name` varchar(60) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `email`, `password`) VALUES
(1, 'Dhruvpuri Goswami', 'goswami@gmail.com', 'dhruv');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_uploads`
--
ALTER TABLE `tbl_uploads`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `uploaded_file` (`uploaded_file`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_uploads`
--
ALTER TABLE `tbl_uploads`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
