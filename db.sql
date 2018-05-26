-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 29, 2016 at 11:04 AM
-- Server version: 5.5.42
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `infs3202a2-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(4) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `case` varchar(35) DEFAULT NULL,
  `cpu` varchar(35) NOT NULL,
  `motherboard` varchar(35) NOT NULL,
  `gpu` varchar(35) NOT NULL,
  `ram` varchar(35) NOT NULL,
  `storage2` varchar(35) NOT NULL,
  `storage` varchar(35) NOT NULL,
  `psu` varchar(35) NOT NULL,
  `progress` int(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `case`, `cpu`, `motherboard`, `gpu`, `ram`, `storage2`, `storage`, `psu`, `progress`) VALUES
(1, 'user', '5f4dcc3b5aa765d61d8327deb882cf99', 'H-FramE 2.0', 'INTEL I5-6400', 'GiGABYTE Z170 Gaming G1 ATX', 'AMD Fury X', 'Corsair Dominator Platinum 16GB (4 ', 'WESTERN DIGITAL BLACK\r\n            ', 'Samsung 850 PRO 512GB', 'CORSAIR  AX860W', 400),
(2, 'John', '81dc9bdb52d04dc20036dbd8313ed055', 'ORIGAMI', 'INTEL I7-6700', 'Asus X99 Rampage V Extreme', 'NVIDIA Geforce GTX 1080', 'Corsair Dominator Platinum 16GB (4 ', ' WESTERN DIGITAL BLACK\r\n           ', ' WESTERN DIGITAL BLUE 1TB', 'CORSAIR AX1200', 600);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;


  --
-- Table structure for table `users`
--

CREATE TABLE `contact` (
  `name` varchar(35) NOT NULL,
  `phone` int(14) NOT NULL,
  `email` varchar(35) NOT NULL,
  `message` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




