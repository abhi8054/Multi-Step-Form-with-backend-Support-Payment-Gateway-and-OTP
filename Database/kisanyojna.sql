-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2022 at 12:24 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kisanyojna`
--

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `id` int(11) NOT NULL,
  `aadharno` varchar(100) NOT NULL,
  `mobileno` int(11) NOT NULL,
  `pancardno` varchar(10) NOT NULL,
  `state` varchar(10) NOT NULL,
  `block` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `fathername` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `marriage` varchar(50) NOT NULL,
  `village` varchar(50) NOT NULL,
  `houseno` int(11) NOT NULL,
  `post` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `pincode` int(11) NOT NULL,
  `addmember` int(11) NOT NULL,
  `accountno` varchar(100) NOT NULL,
  `ifccode` varchar(20) NOT NULL,
  `bankname` varchar(100) NOT NULL,
  `accountholdername` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL,
  `paystatus` int(11) NOT NULL,
  `aadharfrontphoto` varchar(100) NOT NULL,
  `aadharbackphoto` varchar(100) NOT NULL,
  `pancardphoto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`id`, `aadharno`, `mobileno`, `pancardno`, `state`, `block`, `fname`, `lname`, `fathername`, `gender`, `dob`, `marriage`, `village`, `houseno`, `post`, `district`, `pincode`, `addmember`, `accountno`, `ifccode`, `bankname`, `accountholdername`, `amount`, `paystatus`, `aadharfrontphoto`, `aadharbackphoto`, `pancardphoto`) VALUES
(1, '2147483647', 1234567890, '1234567890', 'Punjab', 'A-Block', 'Abhishek', 'Poddar', 'Ras Bihari Poddar', 'male', '2022-06-05', 'unmarried', 'abc', 123, '0', 'Amritsar', 143001, 5, '2147483647', '12345', 'HDFC', 'Abhishek Poddar', 100, 1, 'aadhar/aadharfront.jpg', 'aadhar/aadharback.jpg', 'pancard/pancard.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
