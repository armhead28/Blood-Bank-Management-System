-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2017 at 12:50 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloodgroup`
--

CREATE TABLE `bloodgroup` (
  `id` int(2) NOT NULL,
  `name` varchar(10) NOT NULL,
  `stock` int(3) NOT NULL DEFAULT '0',
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloodgroup`
--

INSERT INTO `bloodgroup` (`id`, `name`, `stock`, `description`) VALUES
(1, 'A+', 13, 'This is a+ blood group.'),
(2, 'A-', 3, 'This is a- blood group'),
(3, 'O+', 0, 'This is o+ Blood Group'),
(4, 'O-', 0, 'This is o- blood group'),
(5, 'B+', 0, 'This is b+ blood group'),
(6, 'B-', 0, 'This is b- blood group'),
(9, 'AB+', 2, 'This is ab+ blood group'),
(10, 'sdf', 12, 'dvdsfdsf');

-- --------------------------------------------------------

--
-- Table structure for table `bloodsale`
--

CREATE TABLE `bloodsale` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `bgroup` varchar(10) NOT NULL,
  `referby` varchar(20) NOT NULL,
  `unit` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloodsale`
--

INSERT INTO `bloodsale` (`id`, `name`, `contact`, `email`, `address`, `bgroup`, `referby`, `unit`) VALUES
(1, 'vikash', 22222222, 'raj@gmail.com', 'noida', 'O-', 'apolo', 10),
(2, 'kumar', 123456, 'kumar@gmail.com', 'delhi', 'A+', 'aiims', 5),
(3, 'kumar', 9876543210, 'kumar@gmail.com', 'delhi', 'A-', 'aiims', 2),
(4, 'sadfj', 234234, 'vikash@gmail.com', 'dasfsdaf', 'A+', 'sdfdsf', 2);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `message` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `contact`, `message`) VALUES
('kaleem', 'kaleem@gmail.com', 767, 'hdgwqhjg'),
('TEST', 'TEST@GMAIL.COM', 123455, 'hello test');

-- --------------------------------------------------------

--
-- Table structure for table `donerlist`
--

CREATE TABLE `donerlist` (
  `id` int(3) NOT NULL,
  `username` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `bloodgroup` varchar(5) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `image` varchar(50) DEFAULT 'user.jpg',
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donerlist`
--

INSERT INTO `donerlist` (`id`, `username`, `email`, `password`, `name`, `contact`, `address`, `bloodgroup`, `city`, `state`, `country`, `image`, `status`) VALUES
(1, 'vikash', 'vikash@gmail.com', 'vikash', 'vikash sinha', '901550868', 'noida', 'A+', 'noida', 'utter pradesh', 'india', '1.jpg', 1),
(2, 'kumar', 'kumar@gmail.com', 'kumar', 'kumar', '22222222', 'delhi', 'O+', 'delhi', 'delhi', 'india', 'user.jpg', 1),
(3, 'Ram', 'ram@gmail.com', 'ram', 'Ram singh', '99999999', 'D-58 noida', 'O-', 'noida', 'utter pradesh', 'india', 'user.jpg', 1),
(4, 'admin', 'admin@gmail.com', 'admin@123', '', '', '', '', 'mumbai', '', '', 'user.jpg', 1),
(5, 'ankit', 'ankit@gmail.com', 'ankit', 'Ankit', '21212121', 'delhi', 'A-', 'delhi', 'delhi', 'india', 'user.jpg', 1),
(6, 'cetpa', 'cetpa@gmail.com', 'cetpa', 'cetpa', '123456789', 'noida', 'O-', 'noida', 'utter pradesh', 'india', 'user.jpg', 1),
(7, 'vikas', 'vikash@gmail.com', '', 'vikash', '123123', 'noida', 'A-', 'noida', '', '', 'user.jpg', 1),
(8, 'imran', 'imran@gmail.com', 'imran', 'imran', '90909090', 't0343', 'A-', 'faridabad', 'utter pradesh', 'india', 'user.jpg', 1),
(9, 'a', 'a@gmail.com', 'a', 'a', '123', 'asd', 'A+', 'delhi', 'delhi', 'india', 'user.jpg', 1),
(10, 'testuser', 'testuser@gmail.com', 'test', 'test', '1212121212', 'noida', 'A-', 'delhi', 'delhi', 'india', 'user.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloodgroup`
--
ALTER TABLE `bloodgroup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bloodsale`
--
ALTER TABLE `bloodsale`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donerlist`
--
ALTER TABLE `donerlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bloodgroup`
--
ALTER TABLE `bloodgroup`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `bloodsale`
--
ALTER TABLE `bloodsale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `donerlist`
--
ALTER TABLE `donerlist`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
