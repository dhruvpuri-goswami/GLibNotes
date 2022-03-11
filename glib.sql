-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:8111
-- Generation Time: Mar 11, 2022 at 11:33 AM
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
  `file_description` longtext NOT NULL,
  `uploaded_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_uploads`
--

INSERT INTO `tbl_uploads` (`u_id`, `user_id`, `uploaded_file`, `keyword`, `file_name`, `file_description`, `uploaded_date`) VALUES
(21, 2, 'Java_Complete_Referenece_7th.pdf', 'JAVA', 'Java Complete Reference', 'Best book for java', '2022-03-11'),
(22, 2, '2017 summer.pdf', 'JAVA', 'Java GTU Paper 2017 summer', 'Revision practise and good for exams preparation', '2022-03-11'),
(24, 2, '2017 winter.pdf', 'JAVA', 'Java GTU Paper 2017 winter', 'Revision practise and good for exams preparation', '2022-03-11'),
(27, 3, 'Practical-List3.pdf', 'PHP', 'PHP Practical List 3', 'All practicals related Php', '2022-03-11'),
(28, 3, 'Practical-List4.pdf', 'PHP', 'PHP Practical List 4', 'All practicals related Php', '2022-03-11'),
(29, 3, 'Practical-List5.pdf', 'PHP', 'PHP Practical List 5', 'All practicals related Php', '2022-03-11'),
(30, 3, 'Practical-13.pdf', 'ANDROID', 'Android Practical 13', 'Android Practical 13', '2022-03-11'),
(31, 3, 'logoglib.jpg', 'JAVA', 'Diploma Java Notes', 'Logo', '2022-03-11'),
(33, 2, 'Advance Java Practical 1 To 18.pdf', 'JAVA', 'Diploma Java Notes', 'All practicals related Php', '2022-03-11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(20) NOT NULL,
  `user_name` varchar(60) NOT NULL,
  `img` varchar(255) NOT NULL DEFAULT 'male.png',
  `email` varchar(40) NOT NULL,
  `mobile_no` varchar(10) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `password` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `img`, `email`, `mobile_no`, `city`, `state`, `password`) VALUES
(2, 'Dhruvpuri Goswami', 'WhatsApp Image 2022-03-03 at 11.53.31 AM-min.jpeg', 'goswamidj16@gmail.com', '9327054895', 'Variyav', 'Gujarat', '123'),
(3, 'Abhishek Nalla', 'male.png', 'nallaabhi2003@gmail.com', '9054849782', 'Surat', 'Gujarat', 'abhishek');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_uploads`
--
ALTER TABLE `tbl_uploads`
  ADD PRIMARY KEY (`u_id`);

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
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
